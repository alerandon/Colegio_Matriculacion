<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    //return view('welcome');

    if (Auth::check()) {

        $user = Auth::user();

        if ($user->esAdmin()) {

            return redirect()->route('admin.index');

        } else if ($user->esProf() && $user->hayProf() ) {

            return redirect()->route('prof.index');

        } else {

            Auth::logout();
            return redirect()->route('login')->with('danger', 'Este usuario no tiene un profesor creado');

        }

    } else {

        return redirect()->route('login');
    
    }

});

//------------------------------------------Auth Routes--------------------------------------------//
//-------------------------------------------------------------------------------------------------//

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');



//-------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------//


//-------------------------------------------------------------------------------------------------//
//-----------------------------------------Administrador-------------------------------------------//
//-------------------------------------------------------------------------------------------------//

Route::get('/admin', 'AdminController@index')->name('admin.index');

//Admin: Años_escolares Routes

Route::post('/admin/años_escolares', 'AñosEscolaresController@store')->name('admin.años_escolares.store');
Route::get('/admin/años_escolares','AñosEscolaresController@index')->name('admin.años_escolares.index');
Route::get('/admin/años_escolares/create','AñosEscolaresController@create')->name('admin.años_escolares.create');
Route::patch('/admin/años_escolares/{id}', 'AñosEscolaresController@update')->name('admin.años_escolares.update');
Route::get('/admin/años_escolares/{id}', 'AñosEscolaresController@show')->name('admin.años_escolares.show');
Route::delete('/admin/años_escolares/{id}', 'AñosEscolaresController@destroy')->name('admin.años_escolares.destroy');
Route::get('admin/años_escolares/{id}/edit', 'AñosEscolaresController@edit')->name('admin.años_escolares.edit');


//Admin: Alumnos Routes

Route::post('/admin/alumnos', 'AlumnosController@store')->name('admin.alumnos.store');
Route::get('/admin/alumnos','AlumnosController@index')->name('admin.alumnos.index');
Route::get('/admin/alumnos/create','AlumnosController@create')->name('admin.alumnos.create');
Route::patch('/admin/alumnos/{id}', 'AlumnosController@update')->name('admin.alumnos.update');
Route::get('/admin/alumnos/{id}', 'AlumnosController@show')->name('admin.alumnos.show');
Route::delete('/admin/alumnos/{id}', 'AlumnosController@destroy')->name('admin.alumnos.destroy');
Route::get('/admin/alumnos/{id}/edit', 'AlumnosController@edit')->name('admin.alumnos.edit');


//Admin: Profesores Routes

Route::post('/admin/profesores', 'ProfesoresController@store')->name('admin.profesores.store');
Route::get('/admin/profesores','ProfesoresController@index')->name('admin.profesores.index');
Route::get('/admin/profesores/create','ProfesoresController@create')->name('admin.profesores.create');
Route::patch('/admin/profesores/{id}', 'ProfesoresController@update')->name('admin.profesores.update');
Route::get('/admin/profesores/{id}', 'ProfesoresController@show')->name('admin.profesores.show');
Route::delete('/admin/profesores/{id}', 'ProfesoresController@destroy')->name('admin.profesores.destroy');
Route::get('/admin/profesores/{id}/edit', 'ProfesoresController@edit')->name('admin.profesores.edit');


//Admin: Materias Routes

Route::post('/admin/materias', 'MateriasController@store')->name('admin.materias.store');
Route::get('/admin/materias','MateriasController@index')->name('admin.materias.index');
Route::get('/admin/materias/create','MateriasController@create')->name('admin.materias.create');
Route::patch('/admin/materias/{id}', 'MateriasController@update')->name('admin.materias.update');
Route::get('/admin/materias/{id}', 'MateriasController@show')->name('admin.materias.show');
Route::delete('/admin/materias/{id}', 'MateriasController@destroy')->name('admin.materias.destroy');
Route::get('/admin/materias/{id}/edit', 'MateriasController@edit')->name('admin.materias.edit');

//Admin: Representantes Routes

Route::post('/admin/representantes', 'RepresentantesController@store')->name('admin.representantes.store');
Route::get('/admin/representantes','RepresentantesController@index')->name('admin.representantes.index');
Route::get('/admin/representantes/create','RepresentantesController@create')->name('admin.representantes.create');
Route::patch('/admin/representantes/{id}', 'RepresentantesController@update')->name('admin.representantes.update');
Route::get('/admin/representantes/{id}', 'RepresentantesController@show')->name('admin.representantes.show');
Route::delete('/admin/representantes/{id}', 'RepresentantesController@destroy')->name('admin.representantes.destroy');
Route::get('/admin/representantes/{id}/edit', 'RepresentantesController@edit')->name('admin.representantes.edit');

//Admin: Usuarios Routes

Route::post('/admin/usuarios', 'UserController@store')->name('admin.usuarios.store');
Route::get('/admin/usuarios','UserController@index')->name('admin.usuarios.index');
Route::get('/admin/usuarios/create','UserController@create')->name('admin.usuarios.create');
Route::patch('/admin/usuarios/{id}', 'UserController@update')->name('admin.usuarios.update');
Route::get('/admin/usuarios/{id}', 'UserController@show')->name('admin.usuarios.show');
Route::delete('/admin/usuarios/{id}', 'UserController@destroy')->name('admin.usuarios.destroy');
Route::get('/admin/usuarios/{id}/edit', 'UserController@edit')->name('admin.usuarios.edit');

//Admin: Ver Notas Routes

Route::post('/admin/ver_notas', 'VerNotasController@store')->name('admin.ver_notas.store');
Route::get('/admin/ver_notas','VerNotasController@index')->name('admin.ver_notas.index');



//-----------------------------------------------------------------------------------------------//
//---------------------------------------- Profesores -------------------------------------------//
//-----------------------------------------------------------------------------------------------//

Route::get('/prof', 'ProfController@index')->name('prof.index');

//Prof: Clases impartidas Routes

Route::post('/prof/clases_impartidas', 'ClasesImpartidasController@store')->name('prof.clases_impartidas.store');
Route::get('/prof/clases_impartidas','ClasesImpartidasController@index')->name('prof.clases_impartidas.index');
Route::get('/prof/clases_impartidas/create','ClasesImpartidasController@create')->name('prof.clases_impartidas.create');
Route::patch('/prof/clases_impartidas/{id}', 'ClasesImpartidasController@update')->name('prof.clases_impartidas.update');
Route::get('/prof/clases_impartidas/{id}', 'ClasesImpartidasController@show')->name('prof.clases_impartidas.show');
Route::delete('/prof/clases_impartidas/{id}', 'ClasesImpartidasController@destroy')->name('prof.clases_impartidas.destroy');
Route::get('/prof/clases_impartidas/{id}/edit', 'ClasesImpartidasController@edit')->name('prof.clases_impartidas.edit');

//Prof: Listas de alumnos Routes

Route::post('/prof/listas_alumnos', 'ListasAlumnosController@store')->name('prof.listas_alumnos.store');
Route::get('/prof/listas_alumnos','ListasAlumnosController@index')->name('prof.listas_alumnos.index');
Route::get('/prof/listas_alumnos/create','ListasAlumnosController@create')->name('prof.listas_alumnos.create');
Route::patch('/prof/listas_alumnos/{id}', 'ListasAlumnosController@update')->name('prof.listas_alumnos.update');
Route::get('/prof/listas_alumnos/{id}', 'ListasAlumnosController@show')->name('prof.listas_alumnos.show');
Route::delete('/prof/listas_alumnos/{id}', 'ListasAlumnosController@destroy')->name('prof.listas_alumnos.destroy');
Route::get('/prof/listas_alumnos/{id}/edit', 'ListasAlumnosController@edit')->name('prof.listas_alumnos.edit');

//Prof: Notas académicas Routes

Route::post('/prof/notas', 'NotasController@store')->name('prof.notas.store');
Route::get('/prof/notas','NotasController@index')->name('prof.notas.index');
Route::get('/prof/notas/create','NotasController@create')->name('prof.notas.create');
Route::patch('/prof/notas/{id}', 'NotasController@update')->name('prof.notas.update');
Route::get('/prof/notas/{id}', 'NotasController@show')->name('prof.notas.show');
Route::delete('/prof/notas/{id}', 'NotasController@destroy')->name('prof.notas.destroy');
Route::get('/prof/notas/{id}/edit', 'NotasController@edit')->name('prof.notas.edit');