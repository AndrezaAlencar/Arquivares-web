<?php

namespace App\Http\Controllers;

use App\Models\doc_attachment;
use App\Http\Requests\Storedoc_attachmentRequest;
use App\Http\Requests\Updatedoc_attachmentRequest;

class DocAttachmentController extends Controller
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
     * @param  \App\Http\Requests\Storedoc_attachmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedoc_attachmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doc_attachment  $doc_attachment
     * @return \Illuminate\Http\Response
     */
    public function show(doc_attachment $doc_attachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doc_attachment  $doc_attachment
     * @return \Illuminate\Http\Response
     */
    public function edit(doc_attachment $doc_attachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedoc_attachmentRequest  $request
     * @param  \App\Models\doc_attachment  $doc_attachment
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedoc_attachmentRequest $request, doc_attachment $doc_attachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doc_attachment  $doc_attachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(doc_attachment $doc_attachment)
    {
        //
    }
}
