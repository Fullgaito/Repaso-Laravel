<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\creatine;

class creatineController extends Controller
{
    public function index()
    {
        $creatines = creatine::all();
        return response()->json($creatines);
    }

    public function store(request $request){
        $creatine=new creatine();
        $creatine->name=$request->name;
        $creatine->price=$request->price;
        $creatine->type=$request->type;
        $creatine->grams=$request->grams;
        $creatine->description=$request->description;
        $creatine->save();
        return response()->json($creatine);
    }

    public function show($id){
        $creatine=creatine::find($id);
        return response()->json($creatine);
    }

    public function destroy($id){
        $creatine=creatine::find($id);
        $creatine->delete();
        return response()->json(['message' => 'Creatina eliminada correctamente']);
    }

    public function update(request $request,$id){
        $creatine=creatine::find($id);
        $creatine->name=$request->name;
        $creatine->price=$request->price;
        $creatine->type=$request->type;
        $creatine->grams=$request->grams;
        $creatine->description=$request->description;
        $creatine->save();
        return response()->json($creatine);
    }
}
