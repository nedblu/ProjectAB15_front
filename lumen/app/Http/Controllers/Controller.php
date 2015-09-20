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
    public function _getSlider()
    {

    	$slides = DB::table('banners')->select('id','title','image','uri')->where('published',1)->get();

    	return $slides;
    }

    public function getColorsOfProduct( $_array )
    {

      if( !is_array ( $_array ))
          $_array = explode(",", $_array);

      if( count($_array) > 1) {

          $count = 0;

          $colors = DB::table( 'colors' )->select('name','image')->where( 'code', strtoupper ( $_array[0] ) );

          foreach($_array as $item){

              if($count > 0){

                  $colors_union = DB::table( 'colors' )->select('name','image')->where( 'code', strtoupper ( $item ) );

                  $colors = $colors->unionAll( $colors_union );

              }

              $count++;

          }

          $results = $colors->orderBy('name', 'asc')->get();

          return $results;

      }

      else {

          $results = DB::table( 'colors' )->select('name','image')->where( 'code', $_array )->get();

          return $results;
      }

    }

}

                                    
