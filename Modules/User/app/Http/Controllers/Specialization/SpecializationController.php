<?php

namespace Modules\User\Http\Controllers\Specialization;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Models\Specialization\Specialization;
use Modules\User\Http\Requests\Specialization\SpecializationRequest;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('user::index');
        $specializations = Specialization::all();
        return response()->json(['success'=>'Specializations retrieved successfully'],200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(SpecializationRequest $request)
    {
        $specialization = Specialization::create($request->validated());
        return response()->json(['success'=>'Specialization stored successfully'],201);
    }

    /**
     * Show the specified resource.
     */
    public function show(Specialization $specialization)
    {
        return response()->json(['success'=>'Specialization details','Specialization'=>$specialization]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(SpecializationRequest $request, Specialization $specialization)
    {
        $specialization->update($request->validated());
        return response()->json(['success'=>'Specialization updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialization $specialization)
    {
        $specialization->delete();
        return response()->json(['success'=>'Specialization deleted successfully'],201);
    }
}

