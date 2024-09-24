<?php

namespace Modules\School\Http\Controllers\Unit;

use Illuminate\Http\Request;
use Modules\School\Models\Unit;
use App\Http\Controllers\Controller;
use Modules\School\Http\Requests\Unit\UnitRequest;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('school::index');
        $units = Unit::all();
        return response()->json(['success'=>'units retrieved successfully'],200);
    }



     /**
     * Store a newly created resource in storage.
     */
    public function store(UnitRequest $request)
    {
        $unit = Unit::create($request->validated());
        return response()->json(['success'=>'unit stored successfully'],201);
    }

    /**
     * Show the specified resource.
     */
    public function show(Unit $unit)
    {
        return response()->json(['success'=>'unit details','unit'=>$unit]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UnitRequest $request, Unit $unit)
    {
        $unit->update($request->validated());
        return response()->json(['success'=>'unit updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        return response()->json(['success'=>'unit deleted successfully'],201);
    }
}
