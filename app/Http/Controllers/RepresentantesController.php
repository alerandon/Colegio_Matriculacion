<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\representantes;
use App\alumnos;

class RepresentantesController extends Controller
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
        $representantes = representantes::all();
        
        return view('admin.representantes.index', compact('representantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select = alumnos::pluck('nombres', 'cod_alumno')->prepend('~Escoge al alumno~', '');

        return view('admin.representantes.create', compact('select'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['cod_representante' => 'required', 'cod_alumno' => 'required', 'cedula_identidad' => 'required', 'nombres' => 'required', 'apellidos' => 'required', 'fecha_nacimiento' => 'required', 'lugar_nacimiento' => 'required', 'correo' => 'required',]);
        representantes::create($request->all());
        return redirect()->route('admin.representantes.index')->with('success','Representante asignado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $representantes = representantes::find($id);
        return view('admin.representantes.show', compact('representantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $select = alumnos::pluck('nombres', 'cod_alumno')->prepend('~Escoge al alumno~', '');

        $representantes = representantes::find($id);
        return view('admin.representantes.edit', compact('representantes', 'select'));
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
            'cod_representante' => 'required',
            'cod_alumno' => 'required', 'cedula_identidad' => 'required', 'nombres' => 'required', 'apellidos' => 'required', 'fecha_nacimiento' => 'required', 'lugar_nacimiento' => 'required', 'correo' => 'required',
        ]);
        representantes::find($id)->update($request->all());
        return redirect()->route('admin.representantes.index')->with('success','Registro actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        representantes::find($id)->delete();
        return redirect()->route('admin.representantes.index')->with('success','Se borro exitosamente');
    }
}
