<?php

namespace App\Http\Controllers;

use App\Models\unit;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit as XmlUnit;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $models = Unit::where('active', true)->get();
         
        return view('unit',['models'=>$models]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('unitRegister');
    }

   
    public function create(Request $request)
    {
        $model = new Unit();
        $model->name = $request->name;
        $model->active = $request->active;
        $model->save();
        return view('unitRegister');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(unit $unit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateunitRequest  $request
     * @param  \App\Models\unit  $unit
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(unit $unit)
    {
        //
    }
}
