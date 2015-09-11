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
$app->get('/catalogo', ['as' => 'reqCatalogo', 'uses' => 'QueriesController@getCatalogo']);

$app->get('/catalogo/{category}/productos', ['as' => 'productos', 'uses' => 'QueriesController@getItems']);

$app->get('/catalogo/{item}/producto/{title}', ['as' => 'producto', 'uses' => 'QueriesController@getItem']);

/******************TECNICAS SECTION******************/
// $app->get('/tecnicas', ['as' => 'tecnicas', function () {
	
// 	$banners = _getSlider();
	
// 	return view('tecnicas', ['title' => 'Técnicas','banners' => $banners]);
// }]);

$app->get('/tecnicas', ['as' => 'reqTecnicas', 'uses' => 'QueriesController@getTechniques']);

/******************SUCURSALES SECTION******************/
$app->get('/sucursales', ['as' => 'sucursales', function () {
	
	$banners = _getSlider();
	
	return view('sucursales', ['title' => 'Sucursales','banners' => $banners]);
}]);
/******************CONTACTO SECTION******************/
$app->get('/contacto', ['as' => 'contacto', 'uses' => 'MailController@index']);

$app->post('/contacto',['as' => 'contacto_enviar', 'uses' => 'MailController@getForm']);

$app->get('/aviso', ['as' => 'aviso', function () {
	
	return view('aviso', ['title' => 'Aviso de Privacidad']);
}]);

