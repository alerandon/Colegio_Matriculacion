<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\años_escolares;
use App\clases_impartidas;

class AñosEscolaresController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('EsAdmin');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $años_escolares = años_escolares::all();
        return view('admin.años_escolares.index', compact('años_escolares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.años_escolares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['cod_año_escolar' => 'required', 'año_inicio' => 'required',
        'año_cierre' => 'required',]);
        años_escolares::create($request->all());
        return redirect()->route('admin.años_escolares.index')->with('success','Periodo asignado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $años_escolares = años_escolares::find($id);
        return view('admin.años_escolares.show', compact('años_escolares'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $años_escolares = años_escolares::find($id);
        return view('admin.años_escolares.edit', compact('años_escolares'));
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
        $this->validate($request,[
            'cod_año_escolar' => 'required',
            'año_inicio' => 'required',
            'año_cierre' => 'required',
        ]);
        años_escolares::find($id)->update($request->all());
        return redirect()->route('admin.años_escolares.index')->with('success','Registro actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        años_escolares::find($id)->delete();
        return redirect()->route('admin.años_escolares.index')->with('success','Se borro exitosamente');
       
    }
}
