<?php

namespace App\Http\Controllers;

use App\Models\Requisito;
use App\Models\Servicio;
use App\Models\TipoPersona;
use App\Models\Tramite;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //
    public function PDF($id){

        $tramite = Tramite::find($id);
        $requisitos = Requisito::where('id_tramite',$id)->get();
        $tipoPersonas = TipoPersona::all();

        $var = array();

        foreach ($tipoPersonas as $tipoPersona){
            $var3 = 0;
            foreach ($requisitos as $requisito){
                if($requisito->id_tipoPersona == $tipoPersona->id
                    and $requisito->id_tramite == $tramite->id)
                {
                    $var3 = $var3 + 1;
                    if($var3 < 2){
                        array_push($var,$tipoPersona);
                    }
                }
            }
        };
        $var2 = count($var);


        $pdf = \PDF::loadView('prueba',compact('tramite','requisitos','tipoPersonas',
            'var','var2','var3'));

        return $pdf->stream('prueba.pdf');
    }

    public function pf($id){

        $servicio = Servicio::find($id);
        $requisitos = Requisito::where('id_servicio',$id)->get();
        $tipoPersonas = TipoPersona::all();

        $var = array();

        foreach ($tipoPersonas as $tipoPersona){
            $var3 = 0;
            foreach ($requisitos as $requisito){
                if($requisito->id_tipoPersona == $tipoPersona->id
                    and $requisito->id_servicio == $servicio->id)
                {
                    $var3 = $var3 + 1;
                    if($var3 < 2){
                        array_push($var,$tipoPersona);
                    }
                }
            }
        };
        $var2 = count($var);


        $pdf = \PDF::loadView('prueba2',compact('servicio','requisitos','tipoPersonas',
            'var','var2','var3'));

        return $pdf->stream('prueba.pdf');
    }

}
