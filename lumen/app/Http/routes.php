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

/******************BIENVENIDOS SECTION******************/
$app->get('/', ['as' => 'home', function () {
	return view('home', ['title' => 'Bienvenidos']);
}]);

/******************ACERCA SECTION******************/
$app->get('/acerca', ['as' => 'acerca', function () {
	return view('acerca', ['title' => 'Acerca']);
}]);

/******************CATALOGO SECTION******************/
$app->get('/catalogo', ['as' => 'catalogo', function () {
	return view('catalogo.catalogo', ['title' => 'Catálogo']);
}]);

$app->get('/catalogo/equipos', ['as' => 'equipos', function () {
	$path = array("catálogo","equipos");
	return view('catalogo.equipos', ['title' => 'Equipos', 'path' => $path]);
}]);

$app->get('/catalogo/consumibles', ['as' => 'consumibles', function () {
	return view('catalogo.consumibles', ['title' => 'Consumibles', 'path' => 'Catálogo -> Consumibles']);
}]);

/******************TECNICAS SECTION******************/
$app->get('/tecnicas', ['as' => 'tecnicas', function () {
	return view('tecnicas', ['title' => 'Técnicas']);
}]);

/******************SUCURSALES SECTION******************/
$app->get('/sucursales', ['as' => 'sucursales', function () {
	return view('sucursales', ['title' => 'Sucursales']);
}]);

/******************CONTACTO SECTION******************/
$app->get('/contacto', ['as' => 'contacto', function () {
	return view('contacto', ['title' => 'Contacto']);
}]);

// $app->post('/enviar', ['as' => 'enviar', 'uses' => 'MailController@getFrom']);

$app->post('/enviar', ['as' => 'enviar', function () {
	return view('catalogo.catalogo', ['title' => 'Catálogo']);
}]);

//$app->post('/enviar', 'UserController@showProfile');




