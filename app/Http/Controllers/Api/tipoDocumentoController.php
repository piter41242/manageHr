<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipodocumento;
use Illuminate\Support\Facades\Validator;

class tipoDocumentoController extends Controller
{
    public function index(){
        $tipodocumento=Tipodocumento::all();
       
        $data=[
            "tipodocumento" => $tipodocumento,
            "status" => 200
        ];
        return response()->json($data,200);
    

    }
    public function store(Request $request){
        $data=[
            "mesaje " => "este modulo no permite crear, solo el administrador de base de datos lo puede hacer",
            "status" => 400
        ];
        return response()->json([$data],400);
        
    }
    public function show($id){
        $tipodocumento=Tipodocumento::find($id);
        if(!$tipohoras){
            $data=[
                "mensage" => " No se encontro Tipo Documento",
                "status" => 201
            ];
            return response()->json([$data],201);
        }
        $data=[
            "tipodocumento" => $tipohoras,
            "status" => 200
        ];
        return response()->json([$data],200);

    }
    public function destroy($id){
        $data=[
            "mesaje " => "este modulo no permite eliminar, solo el administrador de base de datos lo puede hacer",
            "status" => 400
        ];
        return response()->json([$data],400);
    }
    public function update(Request $request,$id){
        $data=[
            "mesaje " => "este modulo no permite Actualizar, solo el administrador de base de datos lo puede hacer",
            "status" => 400
        ];
        return response()->json([$data],400);
        
    }
    public function updatePartial(Request $request,$id){
        $data=[
            "mesaje " => "este modulo no permite actualizar, solo el administrador de base de datos lo puede hacer",
            "status" => 400
        ];
        return response()->json([$data],400);
    }
}
