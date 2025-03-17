<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\AboutVdipRequest;
use App\Models\AboutVdip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AboutVdipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about_vdip = AboutVdip::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.about_vdip.index', [
            'about_vdip' => $about_vdip
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about_vdip.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutVdipRequest $request)
    {
        $request->validated();

        try {

            $aboutVDIPL = new AboutVdip();

            // Check if new image are uploaded
            if ($request->hasFile('image')) {
                // Add new image to the paths array
                foreach ($request->file('image') as $image) {
                    // Generate a unique filename using time() and rand()
                    $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/j4c_Group/aboutVDIPL/image'), $new_name);
                    $bannerImagePaths[] = $new_name; // Add the new image to the array
                }
            }

            // Update the image with the new image paths
            $aboutVDIPL->image = json_encode($bannerImagePaths);

            $aboutVDIPL->title = $request->title;
            $aboutVDIPL->description = $request->description;
            $aboutVDIPL->inserted_at = Carbon::now();
            $aboutVDIPL->inserted_by = Auth::user()->id;
            $aboutVDIPL->save();

            return redirect()->route('about-vdipl.index')->with('success','About VDIPL has been successfully created.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage())->withInput($request->all());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about_vdip = AboutVdip::find($id);

        return view('backend.about_vdip.edit', [
            'about_vdip' => $about_vdip
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutVdipRequest $request, string $id)
    {
        $request->validated();

        try {

            $aboutVDIPL = AboutVdip::find($id);

            // Handle existing VDIPL About images
            $existingBannerImages = $request->input('existing_about_vdipl_image', []);
            $storedBannerImages = json_decode($aboutVDIPL->image, true) ?? [];
            $uploadedBannerImages = [];

            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/j4c_Group/aboutVDIPL/image'), $new_name);
                    $uploadedBannerImages[] = $new_name;
                }
            }

            // Merge existing and new images
            $allBannerImages = array_merge($existingBannerImages, $uploadedBannerImages);
            $imagesToDelete = array_diff($storedBannerImages, $existingBannerImages);

            // Delete removed banner images
            foreach ($imagesToDelete as $oldImage) {
                $imagePath = public_path("/j4c_Group/aboutVDIPL/image/{$oldImage}");
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $aboutVDIPL->image = json_encode(array_unique($allBannerImages));

            $aboutVDIPL->title = $request->title;
            $aboutVDIPL->description = $request->description;
            $aboutVDIPL->modified_at = Carbon::now();
            $aboutVDIPL->modified_by = Auth::user()->id;
            $aboutVDIPL->save();

            return redirect()->route('about-vdipl.index')->with('success', 'About VDIPL has been successfully updated.');

        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Something went wrong while updating the About VDIPL. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data['deleted_by'] =  Auth::user()->id;
        $data['deleted_at'] =  Carbon::now();

        try {

            $aboutVDIPL = AboutVdip::find($id);
            $aboutVDIPL->update($data);

            return redirect()->route('about-vdipl.index')->with('success','About VDIPL has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
