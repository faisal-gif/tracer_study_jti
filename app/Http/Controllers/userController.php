<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function create(Request $request)
    {
            User::create([
            'id' => $request->input('userName'),
            'name' => $request->input('name'),
            'email' => $request->input('userName'),
            'password' =>  md5($request->input('password')),
            'roles' => $request->input('roles')
        ]);
        return redirect()->back();
        
        
    }
}
