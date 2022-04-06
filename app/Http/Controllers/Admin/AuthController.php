<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function index(){
    return view("admin.auth.login");
  }

  public function login(Request $req){
    $valid = $req->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    if(auth('admin')->attempt($valid)) {
      return redirect(route('admin.contacts.index'));
    }

    return redirect(route('admin.login'))->withErrors(['email' => 'Admin не найден']);
  }

  public function logout(){
    auth('admin')->logout();

    return redirect(route('home'));
  }
}
