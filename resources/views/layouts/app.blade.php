<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!--Meta-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--In Browser-->
        <title>Project Box</title>
        <link rel="icon" href="../public/images/favicon.ico" type="image/png" sizes="16x16">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
        <!--Style-->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        <!--Font Awesome Icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    </head>
    <body>
      <div class="navigation">
        <div class="nav-left-1">
          <img class="nav-logo" src="../public/images/logo-white.png" alt="">
        </div>
        <div class="nav-left-2">
          <h1 style="display: inline-block;" class="invert-color">Project Box</h1>
        </div>
        <div class="nav-right">
          <ul>
            <a href="{{ action("PagesController@index") }}"><li>Home</li></a>
            <a href="{{ action("PagesController@feed") }}"><li>Feed</li></a>
            <a href="{{ action("PagesController@briefs") }}"><li>Briefs</li></a>
            <a href="{{ action("PagesController@profile") }}"><li>Profile</li></a>
          </ul>
        </div>
      </div>
      <div class="hero" style="background-image: url({{$img}});">
        <div class="hero-textbox">
          <h1 class="invert-color">{{$title}}</h1>
          <p class="invert-color">{{$subtitle}}</p>
        </div>
      </div>
        @yield('content')
        @include('includes.inc-footer')
    </body>
</html>
