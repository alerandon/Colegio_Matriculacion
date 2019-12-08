<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\notas;
use App\alumnos;
use App\clases_impartidas;
use App\listas_alumnos;

class NotasController extends Controller
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

        $notas = notas::clases($request->get('cod_clase'))->where('cod_profesor', $prof)->orderBy('id', 'DESC')->paginate();

        //$notas = notas::all();
        
        return view('prof.notas.index', compact('select1', 'notas'));
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

        $select_al = listas_alumnos::where('cod_profesor', $prof)->pluck('cod_alumno', 'cod_alumno')->prepend('~Escoge el código de alumno~', '');

        $select_cla = listas_alumnos::where('cod_profesor', $prof)->pluck('cod_clase', 'cod_clase')->prepend('~Escoge el código de la clase~', '');

        $select_cel = listas_alumnos::where('cod_profesor', $prof)->pluck('cedula_identidad', 'cedula_identidad')->prepend('~Escoge la cedula~', '');

        $select_nom = listas_alumnos::where('cod_profesor', $prof)->pluck('nombres', 'nombres')->prepend('~Escoge los nombres~', '');

        $select_ape = listas_alumnos::where('cod_profesor', $prof)->pluck('apellidos', 'apellidos')->prepend('~Escoge los apellidos~', '');

        $select_clas = listas_alumnos::where('cod_profesor', $prof)->pluck('clase', 'clase')->prepend('~Escoge la clase~', '');

        $select_cur = clases_impartidas::where('cod_profesor', $prof)->pluck('curso', 'curso')->prepend('~Escoge el curso~', '');

        $select1 = ['',];
        $select2 = ['',];
        $select3 = ['',];
        
        for ($i=1; $i <= 20; $i++) {
            $select1[] = $i;
            $select2[] = $i;
            $select3[] = $i;
        }

        return view('prof.notas.create', compact('select_al', 'select_cla', 'select_cel', 'select_nom', 'select_ape', 'select_clas', 'select_cur', 'select1', 'select2', 'select3', 'prof'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['cod_nota' => 'required', 'cod_alumno' => 'required', 'cod_profesor' => 'required', 'cedula_identidad' => 'required', 'nombres' => 'required', 'apellidos' => 'required', 'cod_clase' => 'required',
        'clase' => 'required', 'curso' => 'required', 'lapso_1' => 'required', 'lapso_2' => 'required', 'lapso_3' => 'required', 'final' => 'required',]);
        notas::create($request->all());

        return redirect()->route('prof.notas.index')->with('success','Nota asignada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notas = notas::find($id);
        return view('prof.notas.show', compact('notas'));
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

        $select_al = listas_alumnos::where('cod_profesor', $prof)->pluck('nombres', 'cod_alumno')->prepend('~Escoge el código de alumno~', '');

        $select_cla = clases_impartidas::where('cod_profesor', $prof)->pluck('cod_clase', 'cod_clase')->prepend('~Escoge el código de la clase~', '');

        $select_cel = listas_alumnos::where('cod_profesor', $prof)->pluck('cedula_identidad', 'cedula_identidad')->prepend('~Escoge la cedula~', '');

        $select_nom = listas_alumnos::where('cod_profesor', $prof)->pluck('nombres', 'nombres')->prepend('~Escoge los nombres~', '');

        $select_ape = listas_alumnos::where('cod_profesor', $prof)->pluck('apellidos', 'apellidos')->prepend('~Escoge los apellidos~', '');

        $select_clas = listas_alumnos::where('cod_profesor', $prof)->pluck('clase', 'clase')->prepend('~Escoge la clase~', '');

        $select_cur = clases_impartidas::where('cod_profesor', $prof)->pluck('curso', 'curso')->prepend('~Escoge el curso~', '');

        $select1 = [];
        $select2 = [];
        $select3 = [];
        
        for ($i=1; $i <= 20; $i++) {
            $select1[] = $i;
            $select2[] = $i;
            $select3[] = $i;
        }

        $notas = notas::find($id);
        
        return view('prof.notas.edit', compact('notas', 'select_al', 'select_cla', 'select_cel', 'select_nom', 'select_ape', 'select_clas', 'select_cur', 'select1', 'select2', 'select3', 'prof'));
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
            'cod_nota' => 'required',
            'cod_profesor' => 'required',
            'cod_alumno' => 'required',
            'cedula_identidad' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'cod_clase' => 'required',
            'clase' => 'required',
            'curso' => 'required',
            'lapso_1' => 'required',
            'lapso_2' => 'required',
            'lapso_3' => 'required',
            'final' => 'required',
        ]);
        notas::find($id)->update($request->all());
        return redirect()->route('prof.notas.index')->with('success','Registro actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        notas::find($id)->delete();
        return redirect()->route('prof.notas.index')->with('success','Se borro exitosamente');
    }
}
