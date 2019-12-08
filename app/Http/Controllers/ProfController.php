<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('EsProf');
        $this->middleware('HayProf');

    }
    
    public function index(Request $request) {

        $prof_user = DB::table('profesores')->select('cod_profesor')->where('email', Auth::user()->email)->first();
        $prof = json_decode( json_encode($prof_user), true);

        $p1 = DB::table('clases_impartidas')->where('cod_profesor', $prof)->count();
        $p2 = DB::table('listas_alumnos')->where('cod_profesor', $prof)->count();
        $p3 = DB::table('notas')->where('cod_profesor', $prof)->count();

        //$dest = DB::table('profesores')->where('email', $_REQUEST['email'] )->get();
        //dd($dest);

        return view('prof.index', compact('p1', 'p2', 'p3') );

    }

}
