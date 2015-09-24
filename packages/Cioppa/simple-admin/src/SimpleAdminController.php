<?php

namespace Cioppa\SimpleAdmin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SimpleAdminController extends Controller
{
	
    public function index()
    {
	    $user = \Auth::user(); 
	    return $user;
//	    return view('simpleAdmin::admin')->with('users', $users);
    }

}
