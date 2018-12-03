<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;

class UserController extends Controller
{

/*New User insert function*/
  public function newuser(Request $request)
  {
    /*Validate User Input*/
    request()->validate([
      'user_name' => 'required|min:2|max:50',
      'user_email' => 'required|email|unique:Users',
      'user_password' => 'required|min:6',
      'conf_password' => 'required|same:user_password'
    ]);
    /*Get Variables from user input*/
    $user_name = $request->user_name;
    $user_email = $request->user_email;
    $user_password = $request->user_password;

    /*hash user password*/
    $user_password_hashed = Hash::make($user_password);

    /*use user model for comunication with db table*/
    $user = new \App\Users;

    /*use webpatser package to generate uuid and insert data into table*/
    $user->user_id = Uuid::generate()->string;
    $user->user_name = $request->input('user_name');
    $user->user_email = $request->input('user_email');
    $user->user_password = $user_password_hashed;
    $user->save();

    return redirect()->action('PagesController@profile');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
