@extends('layouts.app')

@include('includes.inc-errors')

@section('content')
<!--Start Profile Page-->
<div class="container-split">
  <!--SideBar Area-->
  <div class="container-split-sidebar">
    <!--Login Box-->
    <div class="box-large">
      <div class="box-topbar">
        <div class="topbar-collapse-split-left">
          <h2 class="invert-color">Login</h2>
        </div>
        <div class="topbar-collapse-split-right">
          <i class="fas fa-plus-circle fa-1x collapse-open login-open"></i>
          <i class="fas fa-minus-circle fa-1x collapse-close login-close"></i>
        </div>
      </div>
      <div class="box-textarea login-hide-show">
        @include('includes.inc-form-login')
      </div>
    </div>
    <!--Sign Up Box-->
    <div class="box-large">
      <div class="box-topbar">
        <div class="topbar-collapse-split-left">
          <h2 class="invert-color">Sign Up</h2>
        </div>
        <div class="topbar-collapse-split-right">
          <i class="fas fa-plus-circle fa-1x collapse-open signup-open"></i>
          <i class="fas fa-minus-circle fa-1x collapse-close signup-close"></i>
        </div>
      </div>
      <div class="box-textarea signup-hide-show">
        @include('includes.inc-form-signup')
      </div>
    </div>
  </div>
  <!--Main Content-->
  <div class="container-split-main">
    <!--Profile Box-->
      @include('includes.inc-profile')
    <!--Posts Feed Loop-->
    @include('includes.inc-post')
  </div>
</div>
<!--End Profile Page-->
@endsection
