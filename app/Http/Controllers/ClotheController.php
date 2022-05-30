<?php

namespace App\Http\Controllers;

use App\Models\clothe;
use App\Http\Requests\StoreclotheRequest;
use App\Http\Requests\UpdateclotheRequest;

class ClotheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clothe = clothe::all();
        return view('clothe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclotheRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreclotheRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function show(clothe $clothe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function edit(clothe $clothe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclotheRequest  $request
     * @param  \App\Models\clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateclotheRequest $request, clothe $clothe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function destroy(clothe $clothe)
    {
        //
    }
}
