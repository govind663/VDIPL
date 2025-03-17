<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\Backend\AboutStatisticsRequest;
use App\Models\AboutStatistics;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AboutStatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutStatistics = AboutStatistics::orderBy("id","desc")->whereNull('deleted_at')->get();

        return view('backend.about_statistics.index', [
            'aboutStatistics' => $aboutStatistics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about_statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutStatisticsRequest $request)
    {
        $request->validated();

        try {

            $aboutStatistics = new AboutStatistics();

            $aboutStatistics->name = $request->name;
            $aboutStatistics->statistics_value = $request->statistics_value;
            $aboutStatistics->inserted_at = Carbon::now();
            $aboutStatistics->inserted_by = Auth::user()->id;
            $aboutStatistics->save();

            return redirect()->route('about-statistics.index')->with('success','About Statistics has been successfully created.');

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
        $aboutStatistics = AboutStatistics::findOrFail($id);

        return view('backend.about_statistics.edit', [
            'aboutStatistics' => $aboutStatistics
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutStatisticsRequest $request, string $id)
    {
        $request->validated();

        try {

            $aboutStatistics = AboutStatistics::findOrFail($id);

            $aboutStatistics->name = $request->name;
            $aboutStatistics->statistics_value = $request->statistics_value;
            $aboutStatistics->modified_at = Carbon::now();
            $aboutStatistics->modified_by = Auth::user()->id;
            $aboutStatistics->save();

            return redirect()->route('about-statistics.index')->with('success','About Statistics has been successfully updated.');

        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong  - '.$ex->getMessage())->withInput($request->all());
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

            $aboutStatistics = AboutStatistics::findOrFail($id);
            $aboutStatistics->update($data);

            return redirect()->route('about-statistics.index')->with('success','About Statistics has been successfully deleted.');
        } catch(\Exception $ex){

            return redirect()->back()->with('error','Something Went Wrong - '.$ex->getMessage());
        }
    }
}
