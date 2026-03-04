<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;

class TipoController extends Controller
{
    public function index(){
        $tipos=Tipo::all();

        return response()->json($tipos);
    }

    public function store(Request $request){
        $tipo=new Tipo();
        $tipo->nombre=$request->nombre;
        $tipo->save();
        return response()->json($tipo);
    }

    public function show($id){
        $tipo=Tipo::find($id);
        return response()->json($tipo);
    }

    public function destroy($id){
        $tipo=Tipo::find($id);
        $tipo->delete();
        return response()->json(['message' => 'Tipo eliminado correctamente']);
    }

    public function update(Request $request,$id){
        $tipo=Tipo::find($id);
        $tipo->nombre=$request->nombre;
        $tipo->save();
        return response()->json($tipo);
    }
}
