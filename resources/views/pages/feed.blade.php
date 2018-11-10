@extends('layouts.app')

@section('content')
<!--Start Newsfeed Page-->
<div class="container-split">
  <div class="container-split-sidebar">
    <div class="box-large">
      <div class="box-topbar">
        <div class="topbar-collapse-split-left">
          <h2 class="invert-color">Filter Posts</h2>
        </div>
        <div class="topbar-collapse-split-right">
          <i class="fas fa-plus-circle fa-1x collapse-open filter-open"></i>
          <i class="fas fa-minus-circle fa-1x collapse-close filter-close"></i>
        </div>
      </div>
      <div class="box-textarea filter-hide-show">
        @include('includes.inc-form-filter')
      </div>
    </div>
  </div>
  <div class="container-split-main">
    <div class="box-large">
      <div class="box-topbar">
        <h1 class="invert-color">New Post</i></h1>
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
