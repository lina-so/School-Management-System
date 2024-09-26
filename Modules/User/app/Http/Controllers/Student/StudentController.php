<?php

namespace Modules\User\Http\Controllers\Student;

use Illuminate\Http\Request;
use Modules\User\Models\Student;
use App\Http\Controllers\Controller;
use Modules\User\Http\Requests\Student\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return response()->json(['success'=>'students retrieved successfully'],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        DB::transaction(function () use ($request) {
            
            if($request->status == 'graduated')
            {

            }
            if($request->status == 'transferred')
            {

            }

            $student = Student::create($request->validated());
        });

        return response()->json(['success'=>'Student stored successfully'],201);
    }

    /**
     * Show the specified resource.
     */
    public function show(Student $student)
    {
        return response()->json(['success'=>'Student details','Student'=>$student]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        DB::transaction(function () use ($request) {
            $student->update($request->validated());
        });

        return response()->json(['success'=>'Student updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['success'=>'Student deleted successfully'],201);
    }
}
