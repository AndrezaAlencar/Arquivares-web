<?php

namespace App\Http\Controllers;

use App\Models\file_tag;
use App\Http\Requests\Storefile_tagRequest;
use App\Http\Requests\Updatefile_tagRequest;

class FileTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storefile_tagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storefile_tagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\file_tag  $file_tag
     * @return \Illuminate\Http\Response
     */
    public function show(file_tag $file_tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\file_tag  $file_tag
     * @return \Illuminate\Http\Response
     */
    public function edit(file_tag $file_tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatefile_tagRequest  $request
     * @param  \App\Models\file_tag  $file_tag
     * @return \Illuminate\Http\Response
     */
    public function update(Updatefile_tagRequest $request, file_tag $file_tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\file_tag  $file_tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(file_tag $file_tag)
    {
        //
    }
}
