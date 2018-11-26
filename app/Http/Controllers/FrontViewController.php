<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontViewController extends Controller
{
  public function index()
  {
    return view('front-end.index');
  }

  public function courses()
  {
    return view('front-end.courses');
  }

  public function event()
  {
    return view('front-end.event');
  }

  public function teachers()
  {
    return view('front-end.teachers');
  }

  public function teacher_detail()
  {
    return view('front-end.teacher-detail');
  }

  public function blog()
  {
    return view('front-end.blog');
  }

  public function blog_details()
  {
    return view('front-end.blog-detail');
  }

  public function about()
  {
    return view('front-end.about');
  }

  public function faq()
  {
    return view('front-end.faq');
  }

  public function galary()
  {
    return view('front-end.galary');
  }

  public function price()
  {
    return view('front-end.price-list');
  }

  public function contact()
  {
    return view('front-end.contact');
  }
}
