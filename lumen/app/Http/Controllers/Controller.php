<?php namespace App\Http\Controllers;

use DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    
    /**
    * Method to get all images for slider, for calling it in controllers use: $this->_getSlider();
    *
    * @return array
    */
    public function _getSlider(){

    	$slides = DB::table('banners')->select('id','title','image','uri')->where('published',1)->get();

    	return $slides;
    }
}
