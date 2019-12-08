<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\clases_impartidas;
use App\profesores;
use App\años_escolares;
use App\materias;

class ClasesImpartidasController extends Controller
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
        $select1 = años_escolares::pluck('año_inicio', 'cod_año_escolar')->prepend('~Escoge el año de inicio~', '');  

        $prof_user = DB::table('profesores')->select('cod_profesor')->where('email', Auth::user()->email)->first();
        $prof = json_decode( json_encode($prof_user), true);

        $clases_impartidas = clases_impartidas::añoescolar($request->get('cod_año_escolar'))->where('cod_profesor', $prof)->orderBy('id', 'DESC')->paginate();
       
        // $clases_impartidas = clases_impartidas::all();
        
        return view('prof.clases_impartidas.index', compact('select1', 'clases_impartidas'));
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

        $select1 = años_escolares::pluck('año_inicio', 'cod_año_escolar')->prepend('~Escoge el año de inicio~', '');

        $select2 = materias::pluck('materia', 'cod_materia')->prepend('~Escoge la materia~', '');

        $select3 = materias::pluck('año_curso', 'año_curso')->prepend('~Escoge el curso~', '');

        $select4 = materias::pluck('materia', 'materia')->prepend('~Escoge la materia de la clase~', '');

        return view('prof.clases_impartidas.create', compact('select1', 'select2', 'select3', 'select4', 'prof'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['cod_clase' => 'required', 'cod_profesor' => 'required',
        'cod_año_escolar' => 'required', 'cod_materia' => 'required', 'curso' => 'required', 'clase' => 'required',]);
        clases_impartidas::create($request->all());
        return redirect()->route('prof.clases_impartidas.index')->with('success','Clase asignada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clases_impartidas = clases_impartidas::find($id);
        return view('prof.clases_impartidas.show', compact('clases_impartidas'));
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

        $select1 = años_escolares::pluck('año_inicio', 'cod_año_escolar')->prepend('~Escoge el año de inicio~', '');

        $select2 = materias::pluck('materia', 'cod_materia')->prepend('~Escoge la materia~', '');

        $select3 = materias::pluck('año_curso', 'año_curso')->prepend('~Escoge el curso~', '');

        $select4 = materias::pluck('materia', 'materia')->prepend('~Escoge la materia de la clase~', '');

        $clases_impartidas = clases_impartidas::find($id);
        return view('prof.clases_impartidas.edit', compact('clases_impartidas', 'select1', 'select2', 'select3', 'select4', 'prof'));
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
            'cod_clase' => 'required',
            'cod_profesor' => 'required',
            'cod_año_escolar' => 'required', 'cod_materia' => 'required',
            'clase' => 'required',
            'curso' => 'required',
        ]);
        clases_impartidas::find($id)->update($request->all());
        return redirect()->route('prof.clases_impartidas.index')->with('success','Registro actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        clases_impartidas::find($id)->delete();
        return redirect()->route('prof.clases_impartidas.index')->with('success','Se borro exitosamente');
    }
}
