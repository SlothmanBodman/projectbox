<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function newUser(Request $request)
  {
    $this->validate($request, [
      'username'=>'required',
      'email'=>'required',
      'password'=>'required',
      'conf-password'=>'required'
    ]);
    //create user
    $user = new User;
    $user->username = $request->input('username');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
  }
}
