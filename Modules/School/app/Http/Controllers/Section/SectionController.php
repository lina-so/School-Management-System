<?php

namespace Modules\School\Http\Controllers\Section;

use Illuminate\Http\Request;
use Modules\School\Models\Section;
use App\Http\Controllers\Controller;
use Modules\School\Http\Requests\Section\SectionRequest;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('school::index');
        $sections = Section::all();
        return response()->json(['success'=>'sections retrieved successfully'],200);
    }



     /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
    {
        $section = Section::create($request->validated());
        return response()->json(['success'=>'section stored successfully'],201);
    }

    /**
     * Show the specified resource.
     */
    public function show(Section $section)
    {
        return response()->json(['success'=>'section details','section'=>$section]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, Section $section)
    {
        $section->update($request->validated());
        return response()->json(['success'=>'section updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return response()->json(['success'=>'section deleted successfully'],201);
    }
}
