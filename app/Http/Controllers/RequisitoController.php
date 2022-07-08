<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Requisito;
use App\Models\TipoPersona;
use App\Models\Tramite;
use Illuminate\Http\Request;

class RequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function requisitobyTramiteCreate($id){
        $tramite = Tramite::find($id);
        $tipoPersonas = TipoPersona::all();
        return view('requisito.create')->with('tramite',$tramite)->with('tipoPersonas',$tipoPersonas);
    }

    public function requisitobyTramite($id){
        $requisitos = Requisito::where('id_tramite',$id)->get();
        return  view('requisito.tramite')->with('requisitos',$requisitos)->with('idTramite',$id);
    }

    public function index()
    {
        $tramites = Tramite::all();
        $requisitos = Requisito::all();
        return view('requisito.index')->with('requisitos',$requisitos)->with('tramites',$tramites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requisito= new Requisito();
        $requisito->dato = $request->get('dato');
        $requisito->id_tramite = $request->get('id_tramite');
        $requisito->id_tipoPersona = $request->get('id_tipoPersona');
        $id = $request->get('id_tramite');
        $requisito->save();
        return redirect('tramites/'.$id.'/requisitobyTramite');
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
