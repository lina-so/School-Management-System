<?php

namespace Modules\School\Http\Controllers\Subject;

use Illuminate\Http\Request;
use Modules\School\Models\Subject;
use App\Http\Controllers\Controller;
use Modules\School\Http\Requests\Subject\SubjectRequest;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('school::index');
        $sections = Subject::all();
        return response()->json(['success'=>'subjects retrieved successfully'],200);
    }



     /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectRequest $request)
    {
        $subject = Subject::create($request->validated());
        return response()->json(['success'=>'subject stored successfully'],201);
    }

    /**
     * Show the specified resource.
     */
    public function show(Subject $subject)
    {
        return response()->json(['success'=>'subject details','subject'=>$subject]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(SubjectRequest $request, Subject $subject)
    {
        $subject->update($request->validated());
        return response()->json(['success'=>'subject updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return response()->json(['success'=>'subject deleted successfully'],201);
    }
}
