@extends('layouts.app')

@section('content')
<!--Start Home Page-->
<div class="container">
  <!--About Section-->
  <div class="box-large">
    <div class="box-topbar">
        <h1 class="invert-color">About Project Box</h1>
    </div>
    <div class="box-textarea">
      <p>Project Box is a design focused social network. We bring you a range
        of monthly and weekly project briefs so you are never lacking inspiration!
      Create a profile to share your work with a friendly community of creative
      designers and recive feedback to help improve your design skills!</p>
      <br>
      <p>Continue reading to find out how to get started!</p>
    </div>
  </div>
  <!--Getting Started Section-->
  <div class="box-large">
    <div class="box-topbar">
        <h1 class="invert-color">Getting Started</h1>
    </div>
    <div class="box-textarea">
      <p>Follow these three simple steps to get started with Project Box</p>
    <br>
        <!--Icon One-->
        <div class="started-icon">
          <i class="fas fa-user-circle fa-2x icon-bg fa-started-icon"></i>
        </div>
          <div class="started-text">
            <p>Visit the profile page to sign up and login.</p>
          </div>
    <br>
        <!--Icon Two-->
        <div class="started-icon">
          <i class="fas fa-pencil-alt fa-2x icon-bg fa-started-icon"></i>
        </div>
          <div class="started-text">
            <p>Choose a project from the briefs page and let your creativity flow.</p>
          </div>
    <br>
    <!--Icon Three-->
        <div class="started-icon">
          <i class="fas fa-globe-americas fa-2x icon-bg fa-started-icon"></i>
        </div>
          <div class="started-text">
            <p>Head to the newsfeed page to share your completed projects with the world!</p>
          </div>
    </div>
  </div>
  <!--Top Projects Section-->
  <div class="box-large">
    <div class="box-topbar">
        <h1 class="invert-color">Top Of The Box</h1>
    </div>
    <div class="box-textarea">
        <div class="box-split-two" style="margin: 10px auto;">
            <div class="box-split-2-section-1">
              @include('includes.inc-top-project')
            </div>
            <div class="box-split-2-section-2">
              @include('includes.inc-top-project')
            </div>
        </div>
    </div>
  </div>
</div>
<!--End Home Page-->
@endsection
