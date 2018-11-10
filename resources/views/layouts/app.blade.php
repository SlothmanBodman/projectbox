<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!--Meta-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--In Browser General-->
        <title>Project Box</title>
        <link rel="icon" href="../public/images/favicon.ico" type="image/png" sizes="16x16">
        <!--jQuery-->
        <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
        <!--Style-->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        <!--Font Awesome Icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <!--Scripts-->
          <!--Mobile Responsive Scripts-->
          <script type="text/javascript" src="{{ URL::asset('../resources/js/mobile-nav-display.js') }}"></script>
          <!--Mobile Navigation Control-->
          <script type="text/javascript" src="{{ URL::asset('../resources/js/mobile-nav-control.js') }}"></script>
          <!--Sidebar Collapse Control-->
          <script type="text/javascript" src="{{ URL::asset('../resources/js/sidebar-collapse-control.js') }}"></script>
    </head>
    <body>
      <div class="navigation">
        <div class="nav-left-1">
          <img class="nav-logo" src="../public/images/logo-white.png" alt="">
        </div>
        <div class="nav-left-2">
          <h1 style="display: inline-block;" class="invert-color small-text">Project Box</h1>
        </div>
        <div class="nav-right nav-des">
          <ul>
            <a href="{{ action("PagesController@index") }}"><li>Home</li></a>
            <a href="{{ action("PagesController@feed") }}"><li>Feed</li></a>
            <a href="{{ action("PagesController@briefs") }}"><li>Briefs</li></a>
            <a href="{{ action("PagesController@profile") }}"><li>Profile</li></a>
          </ul>
        </div>
        <div class="nav-right nav-mob">
          <i class="fas fa-bars fa-2x fa-menu-open"></i>
          <i class="fas fa-times fa-2x fa-menu-close"></i>
        </div>
      </div>
      <div class="mobile-nav-menu">
        <div class="mobile-nav-menu-inner">
          <div class="">
            <a href="{{ action("PagesController@index") }}"><h1>Home</h1></a>
              <br>
            <a href="{{ action("PagesController@feed") }}"><h1>Feed</h1></a>
              <br>
            <a href="{{ action("PagesController@briefs") }}"><h1>Briefs</h1></a>
              <br>
            <a href="{{ action("PagesController@profile") }}"><h1>Profile</h1></a>
          </div>
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
