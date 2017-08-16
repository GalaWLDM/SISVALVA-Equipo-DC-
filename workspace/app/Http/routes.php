<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});


Route::resource('modelNames', 'ModelNameController');

Route::get('modelNames/{id}/delete', [
    'as' => 'modelNames.delete',
    'uses' => 'ModelNameController@destroy',
]);


Route::resource('usuarios', 'UsuarioController');

Route::get('usuarios/{id}/delete', [
    'as' => 'usuarios.delete',
    'uses' => 'UsuarioController@destroy',
]);


Route::resource('usuarios', 'UsuarioController');

Route::get('usuarios/{id}/delete', [
    'as' => 'usuarios.delete',
    'uses' => 'UsuarioController@destroy',
]);
