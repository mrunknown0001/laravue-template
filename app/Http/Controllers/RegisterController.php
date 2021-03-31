<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function register(Request $requests)
    {
    	$requests->validate([
    		'name' => 'required',
    		'email' => 'required|unique:users',
    		'password' => 'required|confirmed'
    	]);

    	$user = new User();

    	$user->name = $requests->name;
    	$user->email = $requests->email;
    	$user->password = bcrypt($requests->password);

    	if($user->save()) {
    		return true;
    	}
    	return false;
    }
}
