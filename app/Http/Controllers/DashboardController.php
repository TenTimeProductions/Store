<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Users;

class DashboardController extends Controller {

    public function index(){
       // $uri = Request::path();
        //dd($uri);
        //$url = Request::url();
        $user = Users::find(1);
        $page = 'Dashboard';

        return view('dashboard.pages.dashboard', compact('user', 'page'));
	}

    public function account(){

        $user = Users::find(1);
        $page = 'Conta';
        return view('dashboard.pages.account', compact('user', 'page'));
    }

    public function account_edit(){
        $user = Users::find(1);
        $page = 'Editar conta';
        return view('dashboard.pages.edit', compact('user', 'page'));
    }

    public function team(){

        $user = Users::find(1);
        $page = 'Equipa';
        return view('dashboard.pages.team', compact('user', 'page'));
    }



    public function share(){

        $user = Users::find(1);
        $page = 'Equipa';
        return view('dashboard.pages.share', compact('user', 'page'));
    }
}
