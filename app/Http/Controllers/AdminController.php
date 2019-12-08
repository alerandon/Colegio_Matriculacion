<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware('EsAdmin');

    }
    
    public function index(Request $request) {

        $c1 = DB::table('años_escolares')->count();
        $c2 = DB::table('alumnos')->count();
        $c3 = DB::table('materias')->count();
        $c4 = DB::table('users')->count();
        $c5 = DB::table('representantes')->count();
        $c6 = DB::table('profesores')->count();

        //dd($c1);

        return view('admin.index', compact('c1', 'c2', 'c3', 'c4', 'c5', 'c6') );

    }

}
