<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\BannerRequest;
use App\Models\Banner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.banners.index', [
            'banners' => $banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerRequest $request)
    {
        $request->validated();
        try {

            $banner = new Banner();

            // ==== Upload (banner_image or banner_video)
            if ($request->hasFile('banner_image')) {
                $image = $request->file('banner_image');
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/j4c_Group/banner/banner_image'), $new_name);

                $image_path = "/j4c_Group/banner/banner_image/" . $new_name;
                $banner->banner_image = $new_name;
            }

            $banner->banner_title = $request->banner_title;
            $banner->banner_subtitle = $request->banner_subtitle;
            $banner->status = $request->status;
            $banner->inserted_at = Carbon::now();
            $banner->inserted_by = Auth::user()->id;
            $banner->save();

            return redirect()->route('banner.index')->with('success','Banner has been successfully created.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage());
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
        $banner = Banner::where('id', $id)->first();

        return view('backend.banners.edit', [
            'banner' => $banner
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerRequest $request, string $id)
    {
        $request->validated();
        try {
            // Find the existing Banner record
            $banner = Banner::findOrFail($id);

            // Check and upload the banner image
            if ($request->hasFile('banner_image')) {
                // Delete the old image if it exists
                if ($banner->banner_image) {
                    $oldImagePath = public_path('/j4c_Group/banner/banner_image/' . $banner->banner_image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath); // Delete the old image file
                    }
                }

                // Process the new image
                $image = $request->file('banner_image');
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/j4c_Group/banner/banner_image'), $new_name);

                // Update the banner object with the new image path
                $banner->banner_image = $new_name;
            }

            $banner->banner_title = $request->banner_title;
            $banner->banner_subtitle = $request->banner_subtitle;
            $banner->status = $request->status;
            $banner->modified_at = Carbon::now();
            $banner->modified_by = Auth::user()->id;
            $banner->save();

            return redirect()->route('banner.index')->with('success', 'Banner has been successfully updated.');

        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Something went wrong while updating the banner. Please try again.');
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

            $banner = Banner::findOrFail($id);
            $banner->update($data);

            return redirect()->route('banner.index')->with('success','Banner has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
