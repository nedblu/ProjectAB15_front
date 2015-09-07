<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirect;
use DB;

class QueriesController extends Controller {

    /**
    *   Method to get the root categories and the second level categories
    *   @return array
    **/
    public function getCatalogo(){
        $parents = DB::table('categories')->where('parent_id',0)->get();

        $mainCategories = array();
        foreach ($parents as $parent) {
            $data = DB::table('categories')->where('parent_id',$parent->id)->get();
            foreach ($data as $dat) {
                $dat->parent_id = $parent->name; 
            }
            $mainCategories[] = $data;
        }

        return view('catalogo.catalogo', ['title' => 'Catalogo', 'mainCategories' => $mainCategories]);
    }

    //depends of the parameter sent from the catalogo view
    public function getItems($category_id){
        $products = DB::table('products')->where('category_id',$category_id)->get();
        $title = DB::table('categories')->where('id',$category_id)->get();
        $title = $title[0]->name;
        foreach ($products as $product) {
            $parentName = DB::table('categories')->where('id',$product->parent_id)->get();
            $parentName = $parentName[0]->name;
            $product->parent_id = $parentName;
        }

        return view('catalogo.productos', ['title' => $title, 'products' => $products]);
    }

    public function getItem($product_id){
        $product = DB::table('products')->where('id',$product_id)->get();
        if ($product[0]->colors == '1') {
            $colors = DB::table('product_colors')->where('product_id', $product_id)->get();
            echo '<pre> PRODUCTO:::::::::::::::';
            var_dump($product);
            echo '<br>';
            echo '<br>COLORES:::::::::::::::::';
            var_dump($colors);
            //Missing the other stuff because the new Daichon's method added
        }
        

    }

}
                                    
