<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\OurClienteleRequest;
use App\Models\OurClientele;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class OurClienteleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $our_clientele = OurClientele::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.our_clientele.index', [
            'our_clientele' => $our_clientele
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.our_clientele.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OurClienteleRequest $request)
    {
        $request->validated();

        try {

            $our_clientele = new OurClientele();

            // Check if new image are uploaded
            if ($request->hasFile('clientele_image')) {
                // Add new image to the paths array
                foreach ($request->file('clientele_image') as $image) {
                    // Generate a unique filename using time() and rand()
                    $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/j4c_Group/our_clientele/clientele_image'), $new_name);
                    $bannerImagePaths[] = $new_name; // Add the new clientele_image to the array
                }
            }

            // Update the clientele_image with the new image paths
            $our_clientele->clientele_image = json_encode($bannerImagePaths);

            $our_clientele->clientele_name = $request->clientele_name;
            $our_clientele->status = $request->status;
            $our_clientele->inserted_at = Carbon::now();
            $our_clientele->inserted_by = Auth::user()->id;
            $our_clientele->save();

            return redirect()->route('our-clientele.index')->with('success','Clientele has been successfully created.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage())
            ->withInput($request->all());
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
        $our_clientele = OurClientele::find($id);

        return view('backend.our_clientele.edit', [
            'our_clientele' => $our_clientele
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OurClienteleRequest $request, string $id)
    {
        $request->validated();

        try {

            $our_clientele = OurClientele::find($id);

            // Handle existing clientele images
            $existingBannerImages = $request->input('existing_clientele_image', []);
            $storedBannerImages = json_decode($our_clientele->clientele_image, true) ?? [];
            $uploadedBannerImages = [];

            if ($request->hasFile('clientele_image')) {
                foreach ($request->file('clientele_image') as $image) {
                    $new_name = time() . rand(10, 999) . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('/j4c_Group/our_clientele/clientele_image'), $new_name);
                    $uploadedBannerImages[] = $new_name;
                }
            }

            // Merge existing and new images
            $allBannerImages = array_merge($existingBannerImages, $uploadedBannerImages);
            $imagesToDelete = array_diff($storedBannerImages, $existingBannerImages);

            // Delete removed banner images
            foreach ($imagesToDelete as $oldImage) {
                $imagePath = public_path("/j4c_Group/our_clientele/clientele_image/{$oldImage}");
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $our_clientele->clientele_image = json_encode(array_unique($allBannerImages));

            $our_clientele->clientele_name = $request->clientele_name;
            $our_clientele->status = $request->status;
            $our_clientele->modified_at = Carbon::now();
            $our_clientele->modified_by = Auth::user()->id;
            $our_clientele->save();

            return redirect()->route('our-clientele.index')->with('success', 'Clientele has been successfully updated.');

        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Something went wrong while updating the Clientele. Please try again.');
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

            $our_clientele = OurClientele::find($id);
            $our_clientele->update($data);

            return redirect()->route('our-clientele.index')->with('success','Clientele has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
