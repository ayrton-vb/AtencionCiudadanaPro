<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Categoria;
use App\Models\Direccion;
use App\Models\Requisito;
use App\Models\Servicio;
use App\Models\TipoPersona;
use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */



    public function tramiteByArea($id)
    {
        return view('cliente.tramite');
    }


    public function categoriasByArea($id)
    {
        $Area = Area::find($id);
        $categorias = Categoria::where('id_area',$id)->get();

        $tramites = Tramite::all();
        $servicios = Servicio::all();

        $var = array();
        $tra = array(0);


        foreach ($categorias as $categoria){
            foreach ($tramites as $tramite){
                if($tramite->id_categoria == $categoria->id)
                {
                    array_push($var,$tramite);
                    array_push($tra,1);
                }

            }
        };

        foreach ($categorias as $categoria){
            foreach ($servicios as $servicio){
                if($servicio->id_categoria == $categoria->id)
                {
                    array_push($var,$servicio);
                    array_push($tra,2);
                }

            }
        };



        return view('cliente.categorias')->with('categorias',$categorias)->with('Area',$Area)->with('var',$var)->with('tra',$tra);
    }


    public function index()
    {
        Cache::flush();


        return view('cliente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
