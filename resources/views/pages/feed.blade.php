@extends('layouts.app')

@section('content')
<!--Start Newsfeed Page-->
<div class="container-split">
  <div class="container-split-sidebar">
    <div class="box-large">
      <div class="box-topbar">
        <h2 class="invert-color">Filter Posts</h2>
      </div>
      <div class="box-textarea">
        @include('includes.inc-form-filter')
      </div>
    </div>
  </div>
  <div class="container-split-main">
    <div class="box-large">
      <div class="box-topbar">
        <h1 class="invert-color">New Post</h1>
      </div>
      <div class="box-textarea">
        @include('includes.inc-form-upload')
      </div>
    </div>
    @include('includes.inc-post')
  </div>
</div>
<!--End Newsfeed Page-->
@endsection
