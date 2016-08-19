<?php
use App\Modulo;
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

Route::get('modulos/create',function(){

	return[

'modulos' => 'create'
	]; 

});

/* Ruta tipo Post diferente a la anterior */




Route::get('modulos/{modulo}/{slug?}', function($modulo, $slug = null){

	dd($modulo,$slug);

})->where('modulo','[0-9]+');
Route::auth();

Route::get('/home', 'HomeController@index');
