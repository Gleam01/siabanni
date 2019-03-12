<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackViewController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('admin');
    }

    public function index()
    {
      return view('back-end.index');
    }

    public function students()
    {
      return view('back-end.students');
    }

    public function add_students()
    {
      return view('back-end.add-students');
    }

    public function students_profile()
    {
      return view('back-end.students-profile');
    }

    public function students_invoice()
    {
      return view('back-end.students-invoice');
    }

    public function professors()
    {
      return view('back-end.professors');
    }

    public function add_staff()
    {
      return view('back-end.add-staff');
    }

    public function add_professors()
    {
      return view('back-end.add-professors');
    }

    public function sign_in()
    {
      return view('back-end.sign-in');
    }

    public function sign_up()
    {
      return view('back-end.sign-up');
    }

    public function forgot_password()
    {
      return view('back-end.forgot-password');
    }

    public function four_oh_four()
    {
      return view('back-end.404');
    }

    public function server_error()
    {
      return view('back-end.500');
    }

    public function page_offline()
    {
      return view('back-end.page-offline');
    }

    public function locked()
    {
      return view('back-end.locked');
    }

    public function events()
    {
      return view('back-end.events');
    }

    public function departments()
    {
      return view('back-end.departments');
    }

    public function add_departments()
    {
      return view('back-end.add-departments');
    }

    public function courses()
    {
      return view('back-end.courses');
    }

    public function add_courses()
    {
      return view('back-end.add-courses');
    }

    public function courses_info()
    {
      return view('back-end.courses-info');
    }

    public function library()
    {
      return view('back-end.library');
    }

    public function classroom()
    {
      return view('back-end.classroom');
    }

    public function noticeboard()
    {
      return view('back-end.noticeboard');
    }

    public function centres()
    {
      return view('back-end.centres');
    }

    public function blog_dashboard()
    {
      return view('back-end.blog-dashboard');
    }

    public function blog_post()
    {
      return view('back-end.blog-post');
    }

    public function blog_list()
    {
      return view('back-end.blog-list');
    }

    public function blog_grid()
    {
      return view('back-end.blog-grid');
    }

    public function blog_details()
    {
      return view('back-end.blog-details');
    }

    public function file_dashboard()
    {
      return view('back-end.file-dashboard');
    }

    public function file_documents()
    {
      return view('back-end.file-documents');
    }

    public function file_media()
    {
      return view('back-end.file-media');
    }

    public function file_images()
    {
      return view('back-end.file-images');
    }

    public function mail_inbox()
    {
      return view('back-end.mail-inbox');
    }

    public function chat()
    {
      return view('back-end.chat');
    }

    public function contact()
    {
      return view('back-end.contact');
    }

    public function widgets_app()
    {
      return view('back-end.widgets-app');
    }

    public function widgets_data()
    {
      return view('back-end.widgets-data');
    }

    public function blank()
    {
      return view('back-end.blank');
    }

    public function dashboard_rtl()
    {
      return view('back-end.dashboard-rtl');
    }

    public function index2()
    {
      return view('back-end.index2');
    }

    public function image_gallery()
    {
      return view('back-end.image-gallery');
    }

    public function timeline()
    {
      return view('back-end.timeline');
    }

    public function invoice()
    {
      return view('back-end.invoice');
    }

    public function ui_kit()
    {
      return view('back-end.ui_kit');
    }

    public function alerts()
    {
      return view('back-end.alerts');
    }

    public function collapse()
    {
      return view('back-end.collapse');
    }

    public function colors()
    {
      return view('back-end.colors');
    }

    public function dialogs()
    {
      return view('back-end.dialogs');
    }

    public function icons()
    {
      return view('back-end.icons');
    }

    public function list_group()
    {
      return view('back-end.list-group');
    }

    public function media_object()
    {
      return view('back-end.media-object');
    }

    public function modals()
    {
      return view('back-end.modals');
    }

    public function notifications()
    {
      return view('back-end.notifications');
    }

    public function progressbars()
    {
      return view('back-end.progressbars');
    }

    public function range_sliders()
    {
      return view('back-end.range-sliders');
    }

    public function sortable_nestable()
    {
      return view('back-end.sortable-nestable');
    }

    public function tabs()
    {
      return view('back-end.tabs');
    }

    public function waves()
    {
      return view('back-end.waves');
    }

    public function profile()
    {
      return view('back-end.profile');
    }

    public function parents()
    {
      return view('back-end.parents');
    }

    public function search_results()
    {
      return view('back-end.search-results');
    }
}
