<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Categoria;
use App\Models\Descarga;
use App\Models\Direccion;
use App\Models\Requisito;
use App\Models\Servicio;
use App\Models\TipoPersona;
use App\Models\Tramite;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\TraitString;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     


    public function tramitesNuevos()
    {
        $tramitesNuevos = Tramite::where('nuevo',true)->get();

        return $tramitesNuevos;

    }





    public function tramiteBytramite($id)
    {

        $tramite = Tramite::find($id);
        $requisitos = Requisito::where('id_tramite',$id)->get();
        $descargables = Descarga::where('id_tramite',$id)->get();
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

        return view('cliente.datos')->with('tramite',$tramite)->with('requisitos',$requisitos)
            ->with('tipoPersonas',$tipoPersonas)->with('var',$var)->with('var2',$var2)->with('var3',$var3)->with('descargables',$descargables);


    }



    public function serviciosForepro()
    {

        return view('cliente.datos3');

    }


    

    public function servicioByServicio($id)
    {
        $descargables = Descarga::where('id_tramite',$id)->get();
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

        return view('cliente.datos2')->with('servicio',$servicio)->with('requisitos',$requisitos)
            ->with('tipoPersonas',$tipoPersonas)->with('var',$var)->with('var2',$var2)->with('var3',$var3)->with('descargables',$descargables);

    }


    public function byPalabra($palabra){
        $tramites = Tramite::where('nombre','LIKE',"%$palabra%")->get();
        return  $tramites;
    }

    public function byArea($id){
        $categorias = Categoria::where('id_area',$id)->get();
        $tramites = Tramite::all();
        $tramitesList = array();
        foreach ($categorias as  $categoria) {
        foreach ($tramites as  $tramite) {
            if($tramite->id_categoria == $categoria->id){
                array_push($tramitesList,$tramite);
            }
            }
        }
        return  $tramitesList;
    }

    public function index()
    {
        $requisitos = Requisito::all();

        $tramites = Tramite::all();
        return view('tramite.index')->with('tramites',$tramites)->with('requisitos',$requisitos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $direcciones = Direccion::all();
        $areas = Area::all();
        $categorias = Categoria::all();

        return view('tramite.create')->with('direccions',$direcciones)->with('areas',$areas)->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tramite= new Tramite();
        $tramite->nombre = $request->get('nombre');
        $tramite->sobre = $request->get('sobre');
        $tramite->areaRes = $request->get('areaRes');
        $tramite->inicio = $request->get('inicio');
        $tramite->horario = $request->get('horario');
        $tramite->pago = $request->get('pago');
        $tramite->duracion = $request->get('duracion');
        $tramite->termino = $request->get('termino');
        $tramite->id_categoria = $request->get('id_categoria');
        $tramite->save();
        return redirect('/tramites');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tramite = Tramite::find($id);
        return view('tramite.edit')->with('tramite',$tramite);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tramite = Tramite::find($id);
        $tramite->nombre = $request->get('nombre');
        $tramite->sobre = $request->get('sobre');
        $tramite->areaRes = $request->get('areaRes');
        $tramite->inicio = $request->get('inicio');
        $tramite->horario = $request->get('horario');
        $tramite->pago = $request->get('pago');
        $tramite->duracion = $request->get('duracion');
        $tramite->termino = $request->get('termino');
        $tramite->nuevo = $request->get('nuevo');

        $tramite->save();
        return redirect('/tramites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tramite = Tramite::find($id);
        $tramite->delete();
        return redirect('/tramites');
    }
}
