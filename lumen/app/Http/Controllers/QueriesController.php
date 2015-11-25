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

            if($data) {

                foreach ($data as $dat) {
                    $dat->parent_id = $parent->name; 
                }

                $mainCategories[] = $data;
            }
        }

        return view('catalogo.catalogo', ['title' => 'Catalogo', 'mainCategories' => $mainCategories]);
    }

    /**
    *   Method to get the Items related to the second level root categoty
    *   @param $category_id
    *   @return array
    **/
    public function getItems($category_id){

        if (DB::table('products')->where('category_id',$category_id)->count() > 0)
        {
        
            /*********** BREADCRUMBS -START- **********/
            $subcategory = DB::table('categories')->where('id',$category_id)->get();
            $parent = DB::table('categories')->where('id',$subcategory[0]->parent_id)->get();
            $breadcrumb = array(
                0 => array( 'name' => $parent[0]->name, 'link' => route('reqCatalogo').'#' . str_slug($parent[0]->name)),
                1 => array( 'name' => $subcategory[0]->name, 'link' => route('productos', ['category' => $subcategory[0]->id]))
            );
            /********** BREADCRUMBS -END- ***********/

            //$this->getBreadcrumbs($category_id);


            $products = DB::table('products')->where('category_id',$category_id)->get();

            $title = DB::table('categories')->where('id',$category_id)->get();
        
            $title = $title[0]->name;
            
            foreach ($products as $product) {
                $parentName = DB::table('categories')->where('id',$product->parent_id)->get();
                $product->parent_id = $parentName[0]->name;
            }

            return view('catalogo.productos', ['title' => $title, 'products' => $products,'breadcrumb' => $breadcrumb]);

        }
        else
        {
            return redirect()->route('reqCatalogo');
        }

       
    }

    /**
    *   Method to get all details from specific Item 
    *   @param $product_id
    *   @param $breadcrumMiss
    *   @return array
    **/
    public function getItem($parent_slug, $category_slug, $product_id) {

        $product = DB::table('products')->where('id', $product_id)->get();

        $slug_validation = DB::table('categories')->where('id',$product[0]->parent_id)->where('slug',$category_slug)->count();

        if($slug_validation > 0)
        {
            // $description = DB::table('descriptions')->where('id', $product[0]->description_id)->get();
            // $product[0]->description_id = $description[0]->body;

            $parentName = DB::table('categories')->where('id', $product[0]->parent_id)->get();
            $product[0]->parent_id = $parentName[0]->name;

            if ($product[0]->colors) {
                $color_list = DB::table('product_colors')->select('colors_ar')->where('product_id', $product_id)->get();
                $colors = $this->getColorsOfProduct($color_list[0]->colors_ar);
            }

            if ($product[0]->ink) {
                $ink = DB::table('product_inks')->where('product_id', $product_id)->get();
                $product[0]->ink = $ink[0]->inks_ar;
            }

            if ($product[0]->equipment) {
                $equipment = DB::table('product_equips')->where('product_id', $product_id)->get();
                $product[0]->equipment = $equipment[0]->equip_ar;
            }

            if ($product[0]->colors) {
                return view('catalogo.item', ['title' => $product[0]->name, 'product' => $product, 'colors' => $colors]);
            }else{
                return view('catalogo.item', ['title' => $product[0]->name, 'product' => $product]);
            }

        }
        else {
            return redirect()->route('reqCatalogo');
        }

    }

    public function getTechniques(){
        $techniques = DB::table('techniques')->get();
        $banners = $this->_getSlider();
        return view('tecnicas', ['title' => "Técnicas de impresión", 'techniques' => $techniques, 'banners' => $banners]);
    }

}
                                    
