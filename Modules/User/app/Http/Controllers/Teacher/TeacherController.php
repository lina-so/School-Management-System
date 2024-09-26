<?php

namespace Modules\User\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use Modules\User\Models\Teacher;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Modules\User\Http\Requests\Teacher\TeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return response()->json(['success'=>'Teachers retrieved successfully'],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        DB::transaction(function () use ($request) {
            $teacher = Teacher::create($request->validated());
            $teacher->subjects()->attach($request->input('subjects'));
            $teacher->sections()->attach($request->input('sections'));
            $teacher->classrooms()->attach($request->input('classrooms'));

        });

        return response()->json(['success'=>'Teacher stored successfully'],201);
    }

    /**
     * Show the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return response()->json(['success'=>'Teacher details','Teacher'=>$teacher]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, Teacher $teacher)
    {
        DB::transaction(function () use ($request) {
            $teacher->update($request->validated());
            $teacher->subjects()->sync($request->input('subjects'));
            $teacher->sections()->sync($request->input('sections'));
            $teacher->classrooms()->sync($request->input('classrooms'));
        });

        return response()->json(['success'=>'Teacher updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return response()->json(['success'=>'Teacher deleted successfully'],201);
    }
}
