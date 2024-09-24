<?php

namespace Modules\School\Http\Controllers\Grade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\School\Models\Grade\Grade;
use Modules\School\Http\Requests\Grade\GradeRequest;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('school::index');
        $grades = Grade::all();
        return response()->json(['success'=>'grades retrieved successfully'],200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(GradeRequest $request)
    {
        $grade = Grade::create($request->validated());
        return response()->json(['success'=>'grade stored successfully'],201);
    }

    /**
     * Show the specified resource.
     */
    public function show(Grade $grade)
    {
        return response()->json(['success'=>'grade details','Grade'=>$grade]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(GradeRequest $request, Grade $grade)
    {
        $grade->update($request->validated());
        return response()->json(['success'=>'grade updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        return response()->json(['success'=>'grade deleted successfully'],201);
    }
}
