<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Users;

class DashboardController extends Controller {

    public function index(){

        return view('dashboard.pages.dashboard');
	}

    public function account(){

        $user = Users::find(1);
       // dd($user);
        return view('dashboard.pages.account', compact('user'));
    }

    public function account_edit(){

        $user = Users::find(1);
        // dd($user);
        return view('dashboard.pages.edit', compact('user'));
    }

    public function team(){

        return view('dashboard.pages.team');
    }

}
