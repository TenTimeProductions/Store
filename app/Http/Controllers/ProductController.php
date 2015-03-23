<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Users;
use App\Products;
use App\Menu;

class ProductController extends Controller {

    public function index(){
        return view('front.pages.item');
       // return view('front.pages.product');
	}

    public function menu(){

        $group = Menu::orderBy('id', 'desc')
            ->groupBy('categoria')
            ->get();
        dd($group);
        //return view('front.pages.item', compact('group'));
        // return view('front.pages.product');
    }

    public function detail($id){
        $product = Products::find($id);
        return view('front.pages.detail', compact('product'));
    }

}
