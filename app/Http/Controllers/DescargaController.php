<?php

namespace App\Http\Controllers;

use App\Models\Descarga;
use Illuminate\Http\Request;
use App\Models\Requisito;
use App\Models\Servicio;
use App\Models\TipoPersona;
use App\Models\Tramite;

class DescargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function descargablebyTramiteCreate($id){
        $tramite = Tramite::find($id);
        return view('descargable.create')->with('tramite',$tramite);
    }



     public function descargablebyTramite($id){
        $descargables = Descarga::where('id_tramite',$id)->get();
        return view('descargable.descargable')->with('descargables',$descargables)->with('idTramite',$id);
    }



    public function index()
    {
        return view('descargable.descargable');
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
        $descargable = new Descarga();
        $descargable->id_tramite=$request->get('id_tramite');
        $descargable->id_servicio=$request->get('id_servicio');
         $archivo=$request->file('nombre');
         $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
         $descargable->nombre=$archivo->getClientOriginalName();
         $descargable->save();

         return redirect ("/tramites/$descargable->id_tramite/descargablebyTramite");

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
        $descargable=Descarga::find($id);

        $descargable->delete();

        return redirect ("/tramites/$descargable->id_tramite/descargablebyTramite");
    }
}
