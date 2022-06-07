<?php

namespace App\Http\Controllers;

use App\Models\FolderLevel;
use App\Http\Requests\StoreFolderLevelRequest;
use App\Http\Requests\UpdateFolderLevelRequest;

class FolderLevelController extends Controller
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
     * @param  \App\Http\Requests\StoreFolderLevelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFolderLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FolderLevel  $folderLevel
     * @return \Illuminate\Http\Response
     */
    public function show(FolderLevel $folderLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FolderLevel  $folderLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(FolderLevel $folderLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFolderLevelRequest  $request
     * @param  \App\Models\FolderLevel  $folderLevel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFolderLevelRequest $request, FolderLevel $folderLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FolderLevel  $folderLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FolderLevel $folderLevel)
    {
        //
    }
}
