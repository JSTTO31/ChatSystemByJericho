<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request){
        $user = null;
        if($request->query('student_id')){
            $user = User::find($request->query('student_id'));
        }

        $users = User::all();
        return view('home', ['users' => $users, 'user' => $user]);
    }

}
