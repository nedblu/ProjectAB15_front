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

	/****************EQUIPOS****************/
$app->get('/catalogo/equipos', ['as' => 'equipos', function () {
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	$path = array("catálogo","equipos");
	return view('catalogo.equipos', ['title' => 'Equipos', 'path' => $path, 'data' => $data->EQUIPOS]);
}]);

$app->get('/catalogo/equipos/impresoras', ['as' => 'impresoras', function () {
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Impresoras', 'data' => $data->EQUIPOS->IMPRESORAS]);
}]);

$app->get('/catalogo/equipos/planchas', ['as' => 'planchas', function () {
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Planchas', 'data' => $data->EQUIPOS->PLANCHAS]);
}]);

$app->get('/catalogo/equipos/vynil', ['as' => 'vynil', function () {
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Vynil', 'data' => $data->EQUIPOS->VYNIL]);
}]);

	/****************CONSUMIBLES****************/
$app->get('/catalogo/consumibles', ['as' => 'consumibles', function () {
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	$path = array("catálogo","equipos");
	return view('catalogo.consumibles', ['title' => 'Consumibles', 'path' => $path, 'data' => $data->CONSUMIBLES]);
}]);

$app->get('/catalogo/consumibles/tintas', ['as' => 'tintas', function () {
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Tintas', 'data' => $data->CONSUMIBLES->TINTAS]);
}]);

$app->get('/catalogo/consumibles/papeles', ['as' => 'papeles', function () {
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Papeles', 'data' => $data->CONSUMIBLES->PAPELES]);
}]);

$app->get('/catalogo/consumibles/rollos', ['as' => 'rollos', function () {
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Rollos', 'data' => $data->CONSUMIBLES->ROLLOS]);
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

$app->post('/enviar',['uses' => 'MailController@getForm', 'as' => 'enviar']);

$app->get('/aviso', ['as' => 'aviso', function () {
	return view('aviso', ['title' => 'Aviso de Privacidad']);
}]);

//Return the Contacto view with array.
//The array structure is:  
//	If the validation fails:	$array['type' => '0'] == FAILS 		:	$array['errors' => '$errors']	 
//	If the validation success:	$array['type' => '1'] == SUCCESS 	:	$array['sucess' => '$successMessage']
$app->get('/contacto/{array}', ['as' => 'failOrSuccess'] function ($array) {
	
	if ($array['type'] == 0){
		return view('contacto', ['title' => 'Contacto', 'errors' => $array['errors']]);
	}else{
		return view('contacto', ['title' => 'Contacto', 'success' => $array['success']);
	}
});




