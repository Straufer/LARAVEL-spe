<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'isi email bang',
                'password.required' => 'jgn lupa password juga bang'
            ]
        );
        
        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infoLogin)){
            if(Auth::User()->roles == 'Admin'){
                return redirect('app/admin');
            }elseif (Auth::User()->roles == 'User'){
                return redirect('app/user');
            }
        }else{
            return redirect('')->withErrors('email dan password tidak boleh kosong')->withInput();
        }

        function logout(){
            Auth::logout();
            return redirect('');
        }

    }

}
