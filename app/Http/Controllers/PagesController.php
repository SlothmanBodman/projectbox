<?php

namespace projectbox-old\Http\Controllers;

use Illuminate\Http\Request;
//fuctions returning page views
class PagesController extends Controller
{
    public function index(){
      $title = 'Welcome to Project Box';
      $subtitle = 'Your one stop destination for design projects and inspiration!';
      $img = '../public/images/hero-home.png';
      return view('pages.index', compact('title','subtitle', 'img'));
    }

    public function feed(){
      $title = 'Newsfeed';
      $subtitle = 'Inspire yourself with projects by other designers!';
      $img = '../public/images/hero-feed.png';
      return view('pages.feed', compact('title','subtitle', 'img'));
    }

    public function briefs(){
      $title = ' Project Briefs';
      $subtitle = 'Discover monthly, weekly, and randomly generated briefs to fuel your designs!';
      $img = '../public/images/hero-briefs.png';
      return view('pages.briefs', compact('title','subtitle', 'img'));
    }

    public function profile(){
      $title = 'Your Profile';
      $subtitle = 'Login or Sign Up to share your projects with the world!';
      $img = '../public/images/hero-profile.png';
      return view('pages.profile', compact('title','subtitle', 'img'));
    }


}
