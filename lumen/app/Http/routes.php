<?php

/*
|--------------------------------------------------------------------------
| Extra Functions
|--------------------------------------------------------------------------
|
| Here put all functions that you need to pass in routes
|
*/

/**
*	Method to get slider contect, for calling in routes use _getSlider()
*	@return array
**/
function _getSlider(){

	$slides = DB::table('banners')->select('id','title','image','uri')->where('published',1)->get();

	return $slides;

}

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
	
	$banners = _getSlider();

	return view('home', ['title' => 'Bienvenidos','banners' => $banners]);
}]);

/******************ACERCA SECTION******************/
$app->get('/acerca', ['as' => 'acerca', function () {
	
	$banners = _getSlider();

	return view('acerca', ['title' => 'Acerca','banners' => $banners]);
}]);

/******************CATALOGO SECTION******************/
$app->get('/catalogo', ['as' => 'catalogo', function () {
	
	$banners = _getSlider();
	
	return view('catalogo.catalogo', ['title' => 'Catálogo','banners' => $banners]);
}]);

	/****************EQUIPOS****************/
$app->get('/catalogo/equipos', ['as' => 'equipos', function () {
	
	$banners = _getSlider();
	
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	$path = array("catálogo","equipos");
	return view('catalogo.equipos', ['title' => 'Equipos', 'path' => $path, 'data' => $data->EQUIPOS,'banners' => $banners]);
}]);

$app->get('/catalogo/equipos/impresoras', ['as' => 'impresoras', function () {
	
	$banners = _getSlider();
	
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Impresoras', 'data' => $data->EQUIPOS->IMPRESORAS,'banners' => $banners]);
}]);

$app->get('/catalogo/equipos/planchas', ['as' => 'planchas', function () {
	
	$banners = _getSlider();
	
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Planchas', 'data' => $data->EQUIPOS->PLANCHAS,'banners' => $banners]);
}]);

$app->get('/catalogo/equipos/vynil', ['as' => 'vynil', function () {
	
	$banners = _getSlider();
	
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Vynil', 'data' => $data->EQUIPOS->VYNIL,'banners' => $banners]);
}]);

	/****************CONSUMIBLES****************/
$app->get('/catalogo/consumibles', ['as' => 'consumibles', function () {
	
	$banners = _getSlider();
	
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	$path = array("catálogo","equipos");
	return view('catalogo.consumibles', ['title' => 'Consumibles', 'path' => $path, 'data' => $data->CONSUMIBLES,'banners' => $banners]);
}]);

$app->get('/catalogo/consumibles/tintas', ['as' => 'tintas', function () {
	
	$banners = _getSlider();

	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Tintas', 'data' => $data->CONSUMIBLES->TINTAS,'banners' => $banners]);
}]);

$app->get('/catalogo/consumibles/papeles', ['as' => 'papeles', function () {
	
	$banners = _getSlider();

	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Papeles', 'data' => $data->CONSUMIBLES->PAPELES,'banners' => $banners]);
}]);

$app->get('/catalogo/consumibles/rollos', ['as' => 'rollos', function () {
	
	$banners = _getSlider();
	
	$json = file_get_contents('cat.json');
	$data = json_decode($json);
	return view('catalogo.item', ['title' => 'Rollos', 'data' => $data->CONSUMIBLES->ROLLOS,'banners' => $banners]);
}]);



/******************TECNICAS SECTION******************/
$app->get('/tecnicas', ['as' => 'tecnicas', function () {
	
	$banners = _getSlider();
	
	return view('tecnicas', ['title' => 'Técnicas','banners' => $banners]);
}]);

/******************SUCURSALES SECTION******************/
$app->get('/sucursales', ['as' => 'sucursales', function () {
	
	$banners = _getSlider();
	
	return view('sucursales', ['title' => 'Sucursales','banners' => $banners]);
}]);

/******************CONTACTO SECTION******************/
$app->get('/contacto', ['as' => 'contacto', function () {
	
	$banners = _getSlider();
	
	return view('contacto', ['title' => 'Contacto','banners' => $banners]);
}]);

$app->post('/enviar',['uses' => 'MailController@getForm', 'as' => 'enviar']);

$app->get('/aviso', ['as' => 'aviso', function () {
	
	return view('aviso', ['title' => 'Aviso de Privacidad']);

}]);

//Return the Contacto view with array.
//The array structure is:  
//	If the validation fails:	$array['type' => '0'] == FAILS 		:	$array['errors' => '$errors']	 
//	If the validation success:	$array['type' => '1'] == SUCCESS 	:	$array['sucess' => '$successMessage']
$app->get('/contacto/{array}', ['as' => 'failOrSuccess'], function ($array) {
	
	if ($array['type'] == 0){
		return view('contacto', ['title' => 'Contacto', 'errors' => $array['errors']]);
	}else{
		return view('contacto', ['title' => 'Contacto', 'success' => $array['success']]);
	}
});