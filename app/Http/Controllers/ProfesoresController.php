<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profesores;
use App\User;

class ProfesoresController extends Controller
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
        $profesores = profesores::all();
        return view('admin.profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $select = user::pluck('email', 'email')->prepend('~Escoge tu correo de usuario~', '');

        return view('admin.profesores.create', compact('select'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $this->validate($request,['cod_profesor' => 'required', 'cedula_identidad' => 'required', 'nombres' => 'required', 'apellidos' => 'required', 'fecha_nacimiento' => 'required', 'lugar_nacimiento' => 'required',]);

        $profesores = profesores::create($request->all());

        $profesores->users()->attach(User::latest()->first());

        return redirect()->route('admin.profesores.index')->with('success','Profesor asignado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesores = profesores::find($id);
        return view('admin.profesores.show', compact('profesores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $select = user::pluck('email', 'email')->prepend('~Escoge tu correo de usuario~', '');

        $profesores = profesores::find($id);
        return view('admin.profesores.edit', compact('select','profesores'));
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
            'cod_profesor' => 'required', 'cedula_identidad' => 'required', 'nombres' => 'required', 'apellidos' => 'required', 'fecha_nacimiento' => 'required', 'lugar_nacimiento' => 'required',
        ]);
        profesores::find($id)->update($request->all());
        return redirect()->route('admin.profesores.index')->with('success','Registro actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesores = profesores::find($id);
        $profesores->users()->detach();
        $profesores->delete();
        
        return redirect()->route('admin.profesores.index')->with('success','Se borro exitosamente');
    }
}
