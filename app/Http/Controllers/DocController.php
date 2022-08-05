<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use App\Http\Controllers;
use App\Http\Requests\Doc as RequestsDoc;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function store(RequestsDoc $request){
            
        $model = new Doc();
      $model->name=$request->name;
      $model->type=$request->type;
      $model->save();
      return response()->json($model, 201);
    }
}
