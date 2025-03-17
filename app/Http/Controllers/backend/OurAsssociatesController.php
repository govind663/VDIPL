<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\OurAsssociatesRequest;
use App\Models\OurAsssociates;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OurAsssociatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $our_asssociates = OurAsssociates::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.our_asssociates.index', [
            'our_asssociates' => $our_asssociates,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.our_asssociates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurAsssociatesRequest $request)
    {
        $request->validated();

        try {

            $our_associates = new OurAsssociates();

            // Check if new image are uploaded
            if ($request->hasFile('associate_image')) {
                // Add new image to the paths array
                foreach ($request->file('associate_image') as $image) {
                    // Generate a unique filename using time() and rand()
                    $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/j4c_Group/our_associates/associate_image'), $new_name);
                    $bannerImagePaths[] = $new_name; // Add the new associate_image to the array
                }
            }

            // Update the associate_image with the new image paths
            $our_associates->associate_image = json_encode($bannerImagePaths);

            $our_associates->associate_name = $request->associate_name;
            $our_associates->status = $request->status;
            $our_associates->inserted_at = Carbon::now();
            $our_associates->inserted_by = Auth::user()->id;
            $our_associates->save();

            return redirect()->route('our-associates.index')->with('success','Associate has been successfully created.');

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
        $our_associates = OurAsssociates::find($id);

        return view('backend.our_asssociates.edit', [
            'our_associates' => $our_associates
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OurAsssociatesRequest $request, string $id)
    {
        $request->validated();

        try {

            $our_associates = OurAsssociates::find($id);

            // Handle existing associate images
            $existingBannerImages = $request->input('existing_associate_image', []);
            $storedBannerImages = json_decode($our_associates->associate_image, true) ?? [];
            $uploadedBannerImages = [];

            if ($request->hasFile('associate_image')) {
                foreach ($request->file('associate_image') as $image) {
                    $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/j4c_Group/our_associates/associate_image'), $new_name);
                    $uploadedBannerImages[] = $new_name;
                }
            }

            // Merge existing and new images
            $allBannerImages = array_merge($existingBannerImages, $uploadedBannerImages);
            $imagesToDelete = array_diff($storedBannerImages, $existingBannerImages);

            // Delete removed banner images
            foreach ($imagesToDelete as $oldImage) {
                $imagePath = public_path("/j4c_Group/our_associates/associate_image/{$oldImage}");
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $our_associates->associate_image = json_encode(array_unique($allBannerImages));

            $our_associates->associate_name = $request->associate_name;
            $our_associates->status = $request->status;
            $our_associates->modified_at = Carbon::now();
            $our_associates->modified_by = Auth::user()->id;
            $our_associates->save();

            return redirect()->route('our-associates.index')->with('success', 'Associate has been successfully updated.');

        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Something went wrong while updating the Associate. Please try again.');
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

            $our_associates = OurAsssociates::find($id);
            $our_associates->update($data);

            return redirect()->route('our-associates.index')->with('success','Associate has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
