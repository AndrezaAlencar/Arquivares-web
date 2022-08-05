<?php

namespace App\Http\Controllers;

use App\Models\permissions_profile;
use App\Http\Requests\Storepermissions_profileRequest;
use App\Http\Requests\Updatepermissions_profileRequest;

class PermissionsProfileController extends Controller
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
     * @param  \App\Http\Requests\Storepermissions_profileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepermissions_profileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\permissions_profile  $permissions_profile
     * @return \Illuminate\Http\Response
     */
    public function show(permissions_profile $permissions_profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\permissions_profile  $permissions_profile
     * @return \Illuminate\Http\Response
     */
    public function edit(permissions_profile $permissions_profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepermissions_profileRequest  $request
     * @param  \App\Models\permissions_profile  $permissions_profile
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepermissions_profileRequest $request, permissions_profile $permissions_profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\permissions_profile  $permissions_profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(permissions_profile $permissions_profile)
    {
        //
    }
}
