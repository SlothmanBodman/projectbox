@extends('layouts.app')

@section('content')
<!--Start Profile Page-->
<div class="container-split">
  <!--SideBar Area-->
  <div class="container-split-sidebar">
    <!--Login Box-->
    <div class="box-large">
      <div class="box-topbar">
        <h2 class="invert-color">Login</h2>
      </div>
      <div class="box-textarea">
        @include('includes.inc-form-login')
      </div>
    </div>
    <!--Sign Up Box-->
    <div class="box-large">
      <div class="box-topbar">
        <h2 class="invert-color">Sign Up</h2>
      </div>
      <div class="box-textarea">
        @include('includes.inc-form-signup')
      </div>
    </div>
  </div>
  <!--Main Content-->
  <div class="container-split-main">
    <!--Posts Feed Loop-->
    @include('includes.inc-post')
  </div>
</div>
<!--End Profile Page-->
@endsection
