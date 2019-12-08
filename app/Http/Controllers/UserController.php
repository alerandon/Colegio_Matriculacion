<?php

namespace App\Http\Controllers;

use App\user;
use App\role;
use App\profesores;
use App\clases_impartidas;
use App\listas_alumnos;
use App\notas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;


class UserController extends Controller
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
        $user = user::all();
        return view('admin.usuarios.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name' => 'required|string', 'email' => 'required|string|email|unique:users', 'password' => 'required|min:4|string',]);
        
        $user = user::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),

        ]);

        $user->roles()->attach(Role::where('name', 'user')->first());
        
        return redirect()->route('admin.usuarios.index')->with('success','Usuario asignado exitosamente! Ahora añade al profesor que le corresponde al usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = user::find($id);
        return view('admin.usuarios.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::find($id);
        return view('admin.usuarios.edit', compact('user'));
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

        $this->validate($request,['name' => 'required|string', 'email' => 'required|string|email', 'password' => 'required|min:4|string',]);

        user::find($id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),

        ]);

        return redirect()->route('admin.usuarios.index')->with('success','Registro actualizado con exito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id);

        $user->roles()->detach();
        $user->delete();
        
        return redirect()->route('admin.usuarios.index')->with('success','Se borro exitosamente');
    }
}
