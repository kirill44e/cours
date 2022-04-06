<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
  public function showLoginForm(){
    return view("auth.login");
  }

  public function showRegisterForm(){
    return view("auth.register");
  }

  public function register(AuthRequest $req){

    $user = User::create([
      'name' => $req->input('name'),
      'email' => $req->input('email'),
      'password' => bcrypt($req->input('password')),
    ]);

    if($user) {
      auth('web')->login($user);
    }
    return redirect(route('user'));
  }

  public function logout(){
    auth('web')->logout();

    return redirect(route('home'));
  }

  public function login(Request $req){
    $valid = $req->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    if(auth('web')->attempt($valid)) {
      return redirect(route('user'));
    }

    return redirect(route('login'))->withErrors(['email' => 'Пользователь не найден либо данные введены неверно']);
  }
}
