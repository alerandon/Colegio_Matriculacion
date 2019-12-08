<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumnos;

class AlumnosController extends Controller
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
        $alumnos = alumnos::all();

        return view('admin.alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['cod_alumno' => 'required', 'cedula_identidad' => 'required', 'nombres' => 'required', 'apellidos' => 'required', 'fecha_nacimiento' => 'required', 'lugar_nacimiento' => 'required',]);
        alumnos::create($request->all());
        return redirect()->route('admin.alumnos.index')->with('success','Alumno asignado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos = alumnos::find($id);
        return view('admin.alumnos.show', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos = alumnos::find($id);

        return view('admin.alumnos.edit', compact('alumnos'));
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
            'cod_alumno' => 'required', 'cedula_identidad' => 'required', 'nombres' => 'required', 'apellidos' => 'required', 'fecha_nacimiento' => 'required', 'lugar_nacimiento' => 'required',
        ]);
        alumnos::find($id)->update($request->all());
        return redirect()->route('admin.alumnos.index')->with('success','Registro actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alumnos::find($id)->delete();
        return redirect()->route('admin.alumnos.index')->with('success','Se borro exitosamente');
    }
}
