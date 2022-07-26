<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Categoria;
use App\Models\Direccion;
use App\Models\Requisito;
use App\Models\Servicio;
use App\Models\Tramite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisitos = Requisito::all();

        $servicios = Servicio::all();

        return view('servicio.index')->with('servicios',$servicios)->with('requisitos',$requisitos);
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

        return view('servicio.create')->with('direccions',$direcciones)->with('areas',$areas)->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio= new Servicio();
        $servicio->nombre = $request->get('nombre');
        $servicio->sobre = $request->get('sobre');
        $servicio->areaRes = $request->get('areaRes');
        $servicio->inicio = $request->get('inicio');
        $servicio->horario = $request->get('horario');
        $servicio->pago = $request->get('pago');
        $servicio->duracion = $request->get('duracion');
        $servicio->termino = $request->get('termino');
        $servicio->id_categoria = $request->get('id_categoria');
        $servicio->save();
        return redirect('/servicios');
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
        $servicio = Servicio::find($id);
        return view('servicio.edit')->with('servicio',$servicio);
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
        $servicio = Servicio::find($id);
        $servicio->nombre = $request->get('nombre');
        $servicio->sobre = $request->get('sobre');
        $servicio->areaRes = $request->get('areaRes');
        $servicio->inicio = $request->get('inicio');
        $servicio->horario = $request->get('horario');
        $servicio->pago = $request->get('pago');
        $servicio->duracion = $request->get('duracion');
        $servicio->termino = $request->get('termino');
        $servicio->id_categoria = $request->get('id_categoria');
        $servicio->save();
        return redirect('/servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio = Servicio::find($id);
        $servicio->delete();
        return redirect('/servicios');
    }
}
