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
    
      

   
    public function create(Request $request)
    {
        
        return view('unitRegister');
     }

    public function store(Request $request)
    {
          $model = new Unit();
          $model->name = $request->name;
          $model->active = $request->active;
          $model->save();
         return view('unitRegister');
    }

    public function destroy($id)
    {
        $model = Unit::find($id);
        $units = Unit::where('unit_id', $model->id)->get();
        $model->delete();
        return 'unidade apagada';
    }
}
