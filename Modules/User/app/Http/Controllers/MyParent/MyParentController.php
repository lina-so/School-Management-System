<?php

namespace Modules\User\Http\Controllers\MyParent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\User\Models\MyParents\MyParents;
use Modules\User\Http\Requests\MyParent\MyParentRequest;

class MyParentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('user::index');
        $all_parents = MyParents::all();
        return response()->json(['success'=>'all_parents retrieved successfully'],200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(MyParentRequest $request)
    {
        $parents = MyParents::create($request->validated());
        return response()->json(['success'=>'parents stored successfully'],201);
    }

    /**
     * Show the specified resource.
     */
    public function show(MyParents $parents)
    {
        return response()->json(['success'=>'parents details','parents'=>$parents]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(MyParentRequest $request, parents $parents)
    {
        $parents->update($request->validated());
        return response()->json(['success'=>'parents updated successfully'],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyParents $parents)
    {
        $parents->delete();
        return response()->json(['success'=>'parents deleted successfully'],201);
    }
}
