<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proteina;

class ProteinaController extends Controller
{
    public function index(){
        $proteina=Proteina::all();
        return response()->json($proteina);
    }

    public function store(Request $request){
        $proteina=new Proteina();
        $proteina->marca=$request->marca;
        $proteina->peso=$request->peso;
        $proteina->precio=$request->precio;
        $proteina->tipo_id=$request->tipo_id;
        $proteina->save();
        return response()->json($proteina);
    }

    public function show($id){
        $proteinas=Proteina::find($id);
        return response()->json($proteinas);
    }

    public function destroy($id){
        $proteinas=Proteina::find($id);
        $proteinas->delete();
        return response()->json('Proteina eliminada');
    }

    public function update(Request $request,$id){
        $proteinas=Proteina::find($id);
        $proteinas->marca=$request->marca;
        $proteinas->peso=$request->peso;
        $proteinas->precio=$request->precio;
        $proteinas->tipo_id=$request->tipo_id;
        $proteinas->save();
        return response()->json($proteinas);
    }
}
