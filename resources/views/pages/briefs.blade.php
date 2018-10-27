@extends('layouts.app')

@section('content')
  <div class="container">
    <!--Weekly Brief-->
    <div class="box-large">
      <div class="box-topbar">
        <h1 class="invert-color">Weekly Brief</h1>
      </div>
      <div class="box-textarea">
        <p>Designer</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
          in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
          officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <!--Weekly Brief-->
    <div class="box-large">
      <div class="box-topbar">
        <h1 class="invert-color">Monthly Brief</h1>
      </div>
      <div class="box-textarea">
        <p>Designer</p>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
          in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
          officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <!--Random Brief-->
    <div class="box-large">
      <div class="box-topbar">
        <h1 class="invert-color">Quick Project</h1>
      </div>
      <div class="box-textarea">
        <p>Need a quick project? click the generate project button for a random design brief!</p>
        <button style="margin-top: 5px;" type="button" name="button" action="generate.js">Generate Project</button>
      </div>
    </div>
  </div>
@endsection
