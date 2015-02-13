<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Users;

class DashboardController extends Controller {

    public function index(){

        return view('dashboard.base.content');
	}

    public function account(){

        $user = Users::find(2);
        //dd($user);
        return view('dashboard.pages.account', compact('user'));
    }

    public function contact(){

        return view('dashboard.pages.account');
    }

}
