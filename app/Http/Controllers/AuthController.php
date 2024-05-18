<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function loginPage(){
        return view('auth.login');
    }

    public function registerPage(){
        return view('auth.register');
    }

    public function register(Request $request){
        $isValid = $request->validate(["name" => "required|string", "email"=>"required|email", "password"=>"required|string", "privilage"=>"required|string"]);
        User::create(["name"=>$isValid["name"], "email"=>$isValid["email"], "password"=>Hash::make($isValid["password"]), "privilege"=>$isValid["privilage"]]);
        return redirect('/login');
    }

    public function login(Request $request){
        $isValid = $request->validate(["email"=>"required|email", "password"=>"required|string"]);
        $auth = Auth::attempt(["email"=>$request->email, "password"=>$request->password]);
        if($auth){
            return redirect('/');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }


}
