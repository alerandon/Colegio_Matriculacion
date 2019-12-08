<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materias;

class MateriasController extends Controller
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
        $materias = materias::all();
        return view('admin.materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['cod_materia' => 'required', 'materia' => 'required',
        'año_curso' => 'required',]);
        materias::create($request->all());
        return redirect()->route('admin.materias.index')->with('success','Materia asignada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materias = materias::find($id);
        return view('admin.materias.show', compact('materias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materias = materias::find($id);
        return view('admin.materias.edit', compact('materias'));
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
            'cod_materia' => 'required',
            'materia' => 'required',
            'año_curso' => 'required',
        ]);
        materias::find($id)->update($request->all());
        return redirect()->route('admin.materias.index')->with('success','Registro actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        materias::find($id)->delete();
        return redirect()->route('admin.materias.index')->with('success','Se borro exitosamente');
    }
}
