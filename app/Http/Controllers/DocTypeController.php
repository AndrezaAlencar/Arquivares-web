<?php

namespace App\Http\Controllers;

use App\Models\doc_type;
use App\Http\Requests\Storedoc_typeRequest;
use App\Http\Requests\Updatedoc_typeRequest;

class DocTypeController extends Controller
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
     * @param  \App\Http\Requests\Storedoc_typeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedoc_typeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doc_type  $doc_type
     * @return \Illuminate\Http\Response
     */
    public function show(doc_type $doc_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doc_type  $doc_type
     * @return \Illuminate\Http\Response
     */
    public function edit(doc_type $doc_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedoc_typeRequest  $request
     * @param  \App\Models\doc_type  $doc_type
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedoc_typeRequest $request, doc_type $doc_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doc_type  $doc_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(doc_type $doc_type)
    {
        //
    }
}
