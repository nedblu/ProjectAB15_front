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
$app->get('/', ['as' => 'home', function () {
	return view('home', ['title' => 'Bienvenidos']);
}]);

$app->get('/acerca', ['as' => 'acerca', function () {
	return view('acerca', ['title' => 'Acerca']);
}]);

/******************CATALOGO SECTION******************/
$app->get('/catalogo', ['as' => 'catalogo', function () {
	return view('catalogo', ['title' => 'Catálogo']);
}]);




/******************TECNICAS SECTION******************/
$app->get('/tecnicas', ['as' => 'tecnicas', function () {
	return view('tecnicas', ['title' => 'Técnicas']);
}]);


$app->get('/sucursales', ['as' => 'sucursales', function () {
	return view('sucursales', ['title' => 'Sucursales']);
}]);

$app->get('/contacto', ['as' => 'contacto', function () {
	return view('contacto', ['title' => 'Contacto']);
}]);

