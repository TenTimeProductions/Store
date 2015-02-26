<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Users;

class DashboardController extends Controller {

    public function index(){

        $user = Users::find(1);
        $page = 'Dashboard';

        return view('dashboard.pages.dashboard', compact('user', 'page'));
	}

    public function account(){

        $user = Users::find(1);
        $page = 'Dashboard';
        return view('dashboard.pages.account', compact('user', 'page'));
    }

    public function account_edit(){
        $user = Users::find(1);
        $page = 'Dashboard';
        return view('dashboard.pages.edit', compact('user', 'page'));
    }

    public function team(){

        $user = Users::find(1);
        $page = 'Dashboard';
        return view('dashboard.pages.team', compact('user', 'page'));
    }

}
