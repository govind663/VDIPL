<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\ServicesRequest;
use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.services.index', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServicesRequest $request)
    {
        $request->validated();
        try {

            $service = new Services();

            // ==== Upload (service_image)
            if ($request->hasFile('service_image')) {
                $image = $request->file('service_image');
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/j4c_Group/service/service_image'), $new_name);

                $image_path = "/j4c_Group/service/service_image/" . $new_name;
                $service->service_image = $new_name;
            }

            // ==== Upload (service_icon)
            if ($request->hasFile('service_icon')) {
                $image = $request->file('service_icon');
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/j4c_Group/service/service_icon'), $new_name);

                $image_path = "/j4c_Group/service/service_icon/" . $new_name;
                $service->service_icon = $new_name;
            }

            $service->service_name = $request->service_name;
            $service->slug = $request->slug;
            $service->status = $request->status;
            $service->inserted_at = Carbon::now();
            $service->inserted_by = Auth::user()->id;
            $service->save();

            return redirect()->route('services.index')->with('success','Service has been successfully created.');

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
        $service = Services::findOrFail($id);

        return view('backend.services.edit', [
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServicesRequest $request, string $id)
    {
        $request->validated();

        try {
            
            $service = Services::findOrFail($id);

            // Check and upload the service_image
            if ($request->hasFile('service_image')) {
                // Delete the old image if it exists
                if ($service->service_image) {
                    $oldImagePath = public_path('/j4c_Group/service/service_image/' . $service->service_image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath); // Delete the old image file
                    }
                }

                // Process the new image
                $image = $request->file('service_image');
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/j4c_Group/service/service_image'), $new_name);
                $image_path = "/j4c_Group/service/service_image/" . $new_name;

                // Update the service object with the new image path
                $service->service_image = $new_name;
            }

            // Check and upload the service_icon
            if ($request->hasFile('service_icon')) {
                // Delete the old image if it exists
                if ($service->service_icon) {
                    $oldImagePath = public_path('/j4c_Group/service/service_icon/' . $service->service_icon);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath); // Delete the old image file
                    }
                }

                // Process the new image
                $image = $request->file('service_icon');
                $extension = $image->getClientOriginalExtension();
                $new_name = time() . rand(10, 999) . '.' . $extension;
                $image->move(public_path('/j4c_Group/service/service_icon'), $new_name);
                $image_path = "/j4c_Group/service/service_icon/" . $new_name;

                // Update the service object with the new image path
                $service->service_icon = $new_name;
            }

            $service->service_name = $request->service_name;
            $service->slug = $request->slug;
            $service->status = $request->status;
            $service->modified_at = Carbon::now();
            $service->modified_by = Auth::user()->id;
            $service->save();

            return redirect()->route('services.index')->with('success', 'Service has been successfully updated.');

        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Something went wrong while updating the Service. Please try again.');
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
            $service = Services::findOrFail($id);
            $service->update($data);

            return redirect()->route('services.index')->with('success','Service has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
