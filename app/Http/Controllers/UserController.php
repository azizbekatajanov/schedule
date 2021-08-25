<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('signin');
    }
//    public function signup(SignUpRequest $request)
//    {
//        $user = User::create([
//            'username'=>$request->username,
//            'fullname'=>$request-fullname,
//            'email'=>$request->email,
//            'password'=>Hash::make($request->password),
//        ]);
//        Auth::login($user);
//        return redirect('homepage');
//    }

    public function signin(SignInRequest $request)
    {
      $creditionals = $request->only('username', 'password');
        if (Auth::attempt($creditionals)){
        return redirect()->route('homepage')->with('success', 'Вход выполнен');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('homepage');
    }
}
