<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Http\Requests\DocumentRequest;


class DocumentController extends Controller
{
    public function index(Request $request){
        $models = Document::with('folder_level')->get();
        return response()->json($models, 200);
    }

    public function store(Request $request){
        $model = new Document();
        $model->name = $request->name;
        $model->type = $request->type;
        $model->id_category = $request ->id_category;
        $model->id_sector = $request->sector;
        $model->save();
        return response()->json($model, 201);
    }

    public function show(Request $request, $id){
        $model = Document::find($id);
        return $model;
    }

    public function update(Request $request, $id){
        $model = Document::find($id);
        $model->fill($request->all());
        $model->save();
        return $model;
    }

    
    public function destroy(Request $request,$id){
        $model = Document::find($id);
        $model->delete();
        return null;
    }
}
