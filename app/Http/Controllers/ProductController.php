<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Users;

class ProductController extends Controller {

    public function index(){
        return view('front.pages.item');
       // return view('front.pages.product');
	}

}
