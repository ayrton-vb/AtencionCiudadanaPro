<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Direccion;
use App\Models\Tramite;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */




    public function categoriasByArea($id)
    {
        $direccionsi = Direccion::find($id);
        $areasByDireccion = Area::where('id_direccion',$id)->get();
        $direcciones = Direccion::all();
        $areasList = array(0);
        foreach ($direcciones as  $direccion) {
            $var = Area::where('id_direccion',$direccion->id)->get();
            $count = count($var);
            if(! $count){
                array_push($areasList,0);
            }
            else{
                array_push($areasList,$count);
            }
        }


        return view('cliente.categorias')->with('id',$id)->with('direccionsi', $direccionsi)->with('areasList',$areasList)->with('areasByDireccion',$areasByDireccion);
    }

    public function index()
    {
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
