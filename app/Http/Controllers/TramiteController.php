<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Categoria;
use App\Models\Direccion;
use App\Models\Requisito;
use App\Models\Tramite;
use Illuminate\Http\Request;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function byArea($id){

        $categorias= Tramite::where('id_categoria',$id)->get();
        return  $categorias;
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
        $tramite->id_categoria = $request->get('id_categoria');
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
