<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;

class HumanController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *  @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = ['name'=>'index', 'payload'=>Human::all()];
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     *  @param \Illuminate\Http\Request $request
     *  @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = ['name'=>'store', 'payload'=> $request->all()];
        return $result;
    }

    /**
     * Display the specified resource.
     * 
     *  @param \App\Models\Human $human
     *  @return \Illuminate\Http\Response
     */
    public function show(Human $id)
    {
        $result = ['name'=>'show', 'payload'=> $id];
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * 
     * 
     * 
     * 
     */
    public function edit(Human $human)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Human $human
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Human $id)
    {
        $result = ['name'=>'update', 'payload'=> $request->all()];
        return $result;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Human $id)
    {
        $result = ['name'=>'destroy', 'payload' => $id];
        return $result;
    }
}
