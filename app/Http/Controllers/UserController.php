<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::all();

    	return view('admin.users.index',['users' => $users]);
    }
}
