<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ListaNotas;
use App\notas;
use App\alumnos;

class VerNotasController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('EsAdmin');

    }

    public function index(Request $request) {

        $select1 = alumnos::pluck('nombres', 'cod_alumno')->prepend('~Escoge al alumno~', '');

        $select2 = notas::pluck('curso', 'curso')->prepend('~Escoge el curso~', '');

        $notas = notas::alumno($request->get('cod_alumno'))->curso($request->get('curso'))->orderBy('id', 'DESC')->paginate();

        //$notas = notas::all();
        
        //dd($notas);

        return view('admin.ver_notas.index', compact('select1', 'select2', 'notas'));

    }

    public function store(Request $request) {

        $data = DB::table('notas')->where('cod_alumno', $_REQUEST['cod_alumno'])->where('curso', $_REQUEST['curso'])->orderBy('id', 'DESC')->get();

        $dest = DB::table('representantes')->select('correo')->where('cod_alumno', $_REQUEST['cod_alumno'])->first();

        $key = 0;

        if ($dest == null) {
            return redirect()->route('admin.ver_notas.index')->with('danger', 'Debe añadir al representante del estudiante primero');
        }

        //dd($dest);

        Mail::send('admin.ver_notas.correo', ['data' => $data, 'key' => $key], function($msj) use ($dest) {
           
            $msj->subject("Notas del alumno");
            $msj->to($dest->correo, "Colegio Valle Abierto");
            
        });

        return redirect()->route('admin.ver_notas.index')->with('success','Se envio el correo exitosamente!');

    }

}
