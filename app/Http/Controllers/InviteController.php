<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Users;

class InviteController extends Controller {

    public function invite($username){
        $seller = Users::where('username', $username)->first();

        return view('front.pages.invite', compact('seller'));
	}

}
