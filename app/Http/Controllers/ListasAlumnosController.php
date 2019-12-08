<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\listas_alumnos;
use App\clases_impartidas;
use App\alumnos;
use App\profesores;

class ListasAlumnosController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('EsProf');
        $this->middleware('HayProf');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $select1 = clases_impartidas::pluck('cod_clase', 'cod_clase')->prepend('~Escoge la clase~', '');
        
        $prof_user = DB::table('profesores')->select('cod_profesor')->where('email', Auth::user()->email)->first();
        $prof = json_decode( json_encode($prof_user), true);
        //dd($prof);

        $listas_alumnos = listas_alumnos::clases($request->get('cod_clase'))->where('cod_profesor', $prof)->orderBy('id', 'DESC')->paginate();

        //$listas_alumnos = listas_alumnos::all();
        
        return view('prof.listas_alumnos.index', compact('select1', 'listas_alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prof_user = DB::table('profesores')->select('cod_profesor')->where('email', Auth::user()->email)->first();
        $prof = $prof_user->cod_profesor;

        $select1 = clases_impartidas::where('cod_profesor', $prof)->pluck('cod_clase', 'cod_clase')->prepend('~Escoge la clase~', '');

        $select2 = alumnos::pluck('cod_alumno', 'cod_alumno')->prepend('~Escoge el codigo del alumno~', '');

        $select3 = clases_impartidas::where('cod_profesor', $prof)->pluck('curso', 'curso')->prepend('~Escoge el curso~', '');

        $select4 = clases_impartidas::where('cod_profesor', $prof)->pluck('clase', 'clase')->prepend('~Escoge la clase correspondiente~', '');

        $select5 = alumnos::pluck('cedula_identidad', 'cedula_identidad')->prepend('~Escoge la cedula~', '');

        $select6 = alumnos::pluck('nombres', 'nombres')->prepend('~Escoge el nombre~', '');

        $select7 = alumnos::pluck('apellidos', 'apellidos')->prepend('~Escoge el apellido~', '');

        return view('prof.listas_alumnos.create', compact('select1', 'select2', 'select3', 'select4', 'select5', 'select6', 'select7', 'prof'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['cod_lista' => 'required', 'cod_clase' => 'required', 'cod_profesor' => 'required', 'cod_alumno' => 'required', 'cedula_identidad' => 'required', 'nombres' => 'required', 'apellidos' => 'required',]);
        listas_alumnos::create($request->all());
        return redirect()->route('prof.listas_alumnos.index')->with('success','Alumno registrado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listas_alumnos = listas_alumnos::find($id);
        return view('prof.listas_alumnos.show', compact('listas_alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prof_user = DB::table('profesores')->select('cod_profesor')->where('email', Auth::user()->email)->first();
        $prof = $prof_user->cod_profesor;

        $select1 = clases_impartidas::where('cod_profesor', $prof)->pluck('cod_clase', 'cod_clase')->prepend('~Escoge la clase~', '');

        $select2 = alumnos::pluck('nombres', 'cod_alumno')->prepend('~Escoge el alumno~', '');

        $select3 = clases_impartidas::where('cod_profesor', $prof)->pluck('curso', 'curso')->prepend('~Escoge el curso~', '');

        $select4 = clases_impartidas::where('cod_profesor', $prof)->pluck('clase', 'clase')->prepend('~Escoge la clase correspondiente~', '');

        $select5 = alumnos::pluck('cedula_identidad', 'cedula_identidad')->prepend('~Escoge la cedula~', '');

        $select6 = alumnos::pluck('nombres', 'nombres')->prepend('~Escoge el nombre~', '');

        $select7 = alumnos::pluck('apellidos', 'apellidos')->prepend('~Escoge el apellido~', '');

        $listas_alumnos = listas_alumnos::find($id);
        return view('prof.listas_alumnos.edit', compact('listas_alumnos', 'select1', 'select2', 'select3', 'select4', 'select5', 'select6', 'select7', 'prof'));
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
            'cod_lista' => 'required',
            'cod_profesor' => 'required',
            'cod_clase' => 'required',
            'cod_alumno' => 'required',
            'cedula_identidad' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
        ]);
        listas_alumnos::find($id)->update($request->all());
        return redirect()->route('prof.listas_alumnos.index')->with('success','Registro actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        listas_alumnos::find($id)->delete();
        return redirect()->route('prof.listas_alumnos.index')->with('success','Se borro exitosamente');
    }
}
