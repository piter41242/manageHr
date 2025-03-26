<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estadocivil;
use Illuminate\Support\Facades\Validator;

class estadoCivilController extends Controller
{
    public function index(){
        $estadoCivil=Estadocivil::all();
       
        $data=[
            "estadocivil" => $estadoCivil,
            "status" => 200
        ];

        try{

            $data=[
                "estadocivil" => $estadoCivil,
                "status" => 200
            ];

            return response()->json([$data],200);


        } catch (\Exception $e) {
            return response()->json([
                "mensaje" => "Error al crear el estadoCivil",
                "error" => $e->getMessage(),
                "status" => 500
            ], 500);
            return response()->json([$data],500);
        }
       

    }
    public function store(Request $request){
        $data=[
            "mesaje " => "este modulo no permite crear, solo el administrador de base de datos lo puede hacer",
            "status" => 400
        ];
        return response()->json([$data],400);
        
    }
    public function show($id){
        $estadoCivil=Estadocivil::find($id);
        if(!$estadoCivil){
            $data=[
                "mensage" => " No se encontro Estado Civil",
                "status" => 201
            ];
            return response()->json([$data],201);
        }
        $data=[
            "estadocivil" => $estadoCivil,
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
