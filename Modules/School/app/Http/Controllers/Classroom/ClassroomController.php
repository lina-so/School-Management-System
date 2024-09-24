<?php

namespace Modules\School\Http\Controllers\Classroom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\School\Models\Classroom\Classroom;
use Modules\School\Http\Requests\Classroom\ClassroomRequest;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('school::index');
        $classrooms = Classroom::all();
        return response()->json(['success'=>'classrooms retrieved successfully'],200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ClassroomRequest $request)
    {
        $classroom = Classroom::create($request->validated());
        return response()->json(['success'=>'classroom stored successfully'],201);
    }

    /**
     * Show the specified resource.
     */
    public function show(Classroom $classroom)
    {
        return response()->json(['success'=>'classroom details','classroom'=>$classroom]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ClassroomRequest $request, Classroom $classroom)
    {
        $classroom->update($request->validated());
        return response()->json(['success'=>'classroom updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return response()->json(['success'=>'classroom deleted successfully'],201);
    }
}
