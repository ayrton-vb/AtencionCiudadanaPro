<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Categoria;
use App\Models\Direccion;
use App\Models\Requisito;
use App\Models\Servicio;
use App\Models\TipoPersona;
use App\Models\Tramite;
use App\Models\Visitadescarga;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //

    public function pf2($id){

        $direcciones = Direccion::find($id);

        $areas = Area::where('id_direccion',$id)->get();

        $categorias = Categoria::all();
        $categorias2 =  array();

        $tramites = Tramite::all();

        $servicios = Servicio::all();

        $requisitos = Requisito::all();

        $tipoPersonas = TipoPersona::all();

        $tramitesTipoPersona = array();

        $var = array();
        $var3 = 0;
        $var2 = 0;


        $pdf = \PDF::loadView('prueba3',compact('direcciones','areas','categorias','tramites',
            'requisitos','tipoPersonas','servicios'));

        return $pdf->stream('prueba.pdf');
    }



    public function pfFore(){

       

        $pdf = \PDF::loadView('prueba3');

        return $pdf->stream('prueba.pdfFore');
    }

    
    public function PDF($id){

        $visitaDescar = new Visitadescarga();
        $visitaDescar->id_tramite = $id;
        $visitaDescar->save();

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
        $visitaDescar = new Visitadescarga();
        $visitaDescar->id_servicio = $id;
        $visitaDescar->save();

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
