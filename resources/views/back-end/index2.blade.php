﻿<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Oreo Bootstrap4 Admin ::</title>
<link rel="icon" href="{{asset('back-end/favicon.ico')}}" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="{{asset('back-end/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('back-end/plugins/morrisjs/morris.css')}}"/>
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('back-end/css/main.css')}}">
<link rel="stylesheet" href="{{asset('back-end/css/hm-style.css')}}">
<link rel="stylesheet" href="{{asset('back-end/css/color_skins.css')}}">
</head>

<body class="theme-green index2">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('back-end/images/logo.svg')}}" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{route('back.home')}}"><img src="{{asset('back-end/images/logo.svg')}}" width="30" alt="Oreo"><span class="m-l-10">Oreo</span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="hidden-md-down"><a href="{{route('back.events')}}" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <li class="hidden-md-down"><a href="{{route('back.mail-inbox')}}" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="{{route('back.contact')}}" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="body">
                    <ul class="menu list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">30min ago</span></span>
                                        <span class="message">There are many variations of passages</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">31min ago</span></span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella <span class="time">35min ago</span></span>
                                        <span class="message">There are many variations of passages</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="{{asset('back-end/images/xs/avatar5.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <span class="time">35min ago</span></span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum random</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object" src="{{asset('back-end/images/xs/avatar6.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <span class="time">1hr ago</span></span>
                                        <span class="message">There are many variations of passages</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
            </ul>
        </li>
        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
            <div class="notify">
                <span class="heartbit"></span>
                <span class="point"></span>
            </div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="header">Department</li>
                <li class="body">
                    <ul class="menu tasks list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-primary">
                                    <span class="progress-badge">Computer</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-info">
                                    <span class="progress-badge">Medical</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            <span class="progress-value">45%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar10.jpg')}}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar9.jpg')}}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar8.jpg')}}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar7.jpg')}}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar6.jpg')}}" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="progress-container progress-warning">
                                    <span class="progress-badge">Art & Design</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                            <span class="progress-value">29%</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled team-info">
                                        <li class="m-r-15"><small class="text-muted">Team</small></li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar5.jpg')}}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt="Avatar">
                                        </li>
                                        <li>
                                            <img src="{{asset('back-end/images/xs/avatar7.jpg')}}" alt="Avatar">
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer"><a href="javascript:void(0);">View All</a></li>
            </ul>
        </li>
        <li class="hidden-sm-down">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
            </div>
        </li>
        <li class="float-right">
            <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            <a href="{{route('back.sign-in')}}" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
        </li>
    </ul>
</nav>
<div class="menu-container">
    <div class="menu">
        <ul class="pullDown">
            <li><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i></a></li>
            <li><a href="javascript:void(0)">Students</a>
                <ul class="pullDown">
                    <li><a href="{{route('back.students')}}">All Students</a></li>
                    <li><a href="{{route('back.add-students')}}">Add Students</a></li>
                    <li><a href="{{route('back.students-profile')}}">Students Profile</a></li>
                    <li><a href="{{route('back.students-invoice')}}">Students Invoice</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Professors</a>
                <ul class="pullDown">
                    <li><a href="{{route('back.professors')}}">All Professors</a></li>
                    <li><a href="{{route('back.add-professors')}}">Add Professors</a></li>
                    <li><a href="{{route('back.profile')}}">Profile</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Courses</a>
                <ul class="pullDown">
                    <li><a href="{{route('back.courses')}}">All Courses</a></li>
                    <li><a href="{{route('back.add-courses')}}">Add Courses</a></li>
                    <li><a href="{{route('back.courses-info')}}">Courses Info</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Departments</a>
                <ul class="pullDown">
                    <li><a href="{{route('back.departments')}}">All Departments</a></li>
                    <li><a href="{{route('back.add-departments')}}">Add Departments</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Authentication</a>
                <ul class="pullDown">
                    <li><a href="javascript:void(0)">Sign In</a></li>
                    <li><a href="javascript:void(0)">Sign Up</a></li>
                    <li><a href="javascript:void(0)">Forgot Password</a></li>
                    <li><a href="javascript:void(0)">Page 404</a></li>
                    <li><a href="javascript:void(0)">Page 500</a></li>
                    <li><a href="javascript:void(0)">Page Offline</a></li>
                    <li><a href="javascript:void(0)">Locked Screen</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Extra</a>
                <ul class="pullDown">
                    <li><a href="{{route('back.blank')}}">Blank Page</a> </li>
                    <li><a href="{{route('back.dashboard-rtl')}}">RTL Support</a> </li>
                    <li><a href="{{route('back.index2')}}">Horizontal Menu</a> </li>
                    <li><a href="{{route('back.image-gallery')}}">Image Gallery</a> </li>
                    <li><a href="{{route('back.profile')}}">Profile</a></li>
                    <li><a href="{{route('back.timeline')}}">Timeline</a></li>
                    <li><a href="{{route('back.invoice')}}">Invoices</a></li>
                    <li><a href="{{route('back.search-results')}}">Search Results</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">UI Kit</a>
                <ul class="pullDown">
                    <li><span><i class="zmdi zmdi-label"></i> List</span>
                        <ul>
                            <li> <a href="{{route('back.ui_kit')}}" >UI KIT</a> </li>
                            <li> <a href="{{route('back.alerts')}}" >Alerts</a> </li>
                            <li> <a href="{{route('back.collapse')}}" >Collapse</a> </li>
                            <li> <a href="{{route('back.colors')}}" >Colors</a> </li>
                        </ul>
                    </li>
                    <li><span><i class="zmdi zmdi-label"></i> List</span>
                        <ul>
                            <li> <a href="{{route('back.dialogs')}}" >Dialogs</a> </li>
                            <li> <a href="{{route('back.icons')}}" >Icons</a> </li>
                            <li> <a href="{{route('back.list-group')}}" >List Group</a> </li>
                            <li> <a href="{{route('back.media-object')}}" >Media Object</a> </li>
                        </ul>
                    </li>
                    <li><span><i class="zmdi zmdi-label"></i> List</span>
                        <ul>
                            <li> <a href="{{route('back.modals')}}" >Modals</a> </li>
                            <li> <a href="{{route('back.notifications')}}" >Notifications</a></li>
                            <li> <a href="{{route('back.progressbars')}}" >Progress Bars</a></li>
                            <li> <a href="{{route('back.range-sliders')}}" >Range Sliders</a></li>
                        </ul>
                    </li>
                    <li><span><i class="zmdi zmdi-label"></i> List</span>
                        <ul>
                            <li> <a href="{{route('back.sortable-nestable')}}" >Sortable &amp; Nestable</a></li>
                            <li> <a href="{{route('back.tabs')}}" >Tabs</a></li>
                            <li> <a href="{{route('back.waves')}}" >Waves</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"><i class="zmdi zmdi-widgets"></i></a>
                <ul class="pullDown">
                    <li><a href="javascript:void(0)">App Widgets</a></li>
                    <li><a href="javascript:void(0)">Data Widgets</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"><i class="zmdi zmdi-blogger"></i></a>
                <ul class="pullDown">
                    <li><a href="{{route('back.blog-dashboard')}}">Blog Dashboard</a></li>
                    <li><a href="{{route('back.blog-post')}}">New Post</a></li>
                    <li><a href="{{route('back.blog-list')}}">Blog List</a></li>
                    <li><a href="{{route('back.blog-grid')}}">Blog Grid</a></li>
                    <li><a href="{{route('back.blog-details')}}">Blog Single</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"><i class="zmdi zmdi-folder"></i></a>
                <ul class="pullDown">
                    <li><a href="{{route('back.file-dashboard')}}">All File</a></li>
                    <li><a href="{{route('back.file-documents')}}" >Documents</a></li>
                    <li><a href="{{route('back.file-media')}}" >Media</a></li>
                    <li><a href="{{route('back.file-images')}}" >Images</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"><i class="zmdi zmdi-apps"></i></a>
                <ul class="pullDown">
                    <li><a href="javascript:void(0)">Inbox</a> </li>
                    <li><a href="javascript:void(0)">Chat</a> </li>
                    <li><a href="javascript:void(0)">Calendar</a> </li>
                    <li><a href="javascript:void(0)">Contact list</a> </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane slideRight active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                        </li>
                        <li data-theme="green" class="active">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                        </li>
                    </ul>
                </div>
                <div class="card theme-light-dark">
                    <h6>Left Menu</h6>
                    <button class="t-light btn btn-default btn-simple btn-round">Light Menu</button>
                    <button class="t-dark btn btn-default btn-round">Dark Menu</button>
                    <button class="m_img_btn btn btn-primary btn-round btn-block">Sidebar Image</button>
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Report Panel Usage</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox2" type="checkbox" checked="">
                                <label for="checkbox2">Email Redirect</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Notifications</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox" checked="">
                                <label for="checkbox4">Auto Updates</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">Offline</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Information Summary</h6>
                    <div class="row m-b-20">
                        <div class="col-7">
                            <small class="displayblock">MEMORY USAGE</small>
                            <h5 class="m-b-0 h6">512</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#00ced1">8,7,9,5,6,4,6,8</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">
                            <small class="displayblock">CPU USAGE</small>
                            <h5 class="m-b-0 h6">90%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#F15F79">6,5,8,2,6,4,6,4</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">
                            <small class="displayblock">DAILY TRAFFIC</small>
                            <h5 class="m-b-0 h6">25 142</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#78b83e">7,5,8,7,4,2,6,5</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <small class="displayblock">DISK USAGE</small>
                            <h5 class="m-b-0 h6">60.10%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#457fca">7,5,2,5,6,7,6,4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane right_chat stretchLeft" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <div class="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Recent</h6>
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia</span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar5.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson</span>
                                        <span class="message">All the Lorem Ipsum generators on the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella</span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">John</span>
                                        <span class="message">It is a long established fact that a reader</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander</span>
                                        <span class="message">Richard McClintock, a Latin professor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Contacts</h6>
                    <ul class="list-unstyled">
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar10.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar6.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar7.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar8.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar9.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar5.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane slideLeft" id="activity">
            <div class="slim_scroll">
                <div class="card user_activity">
                    <h6>Recent Activity</h6>
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <img class="user rounded-circle" src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Admin Birthday</h5>
                                <small>Jan 21 <a href="javascript:void(0);" class="text-info">Sophia</a>.</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="{{asset('back-end/images/xs/avatar5.jpg')}}" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Add New Contact</h5>
                                <small>30min ago <a href="javascript:void(0);">Alexander</a>.</small>
                                <small><strong>P:</strong> +264-625-2323</small>
                                <small><strong>E:</strong> maryamamiri@gmail.com</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="{{asset('back-end/images/xs/avatar6.jpg')}}" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Code Change</h5>
                                <small>Today <a href="javascript:void(0);">Grayson</a>.</small>
                                <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="{{asset('back-end/images/xs/avatar7.jpg')}}" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">New Email</h5>
                                <small>45min ago <a href="javascript:void(0);" class="text-info">Fidel Tonn</a>.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Recent Attachments</h6>
                    <ul class="list-unstyled activity">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-pdf l-blush"></i>
                                <div class="info">
                                    <h4>info_258.pdf</h4>
                                    <small>2MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>
                                <div class="info">
                                    <h4>newdoc_214.doc</h4>
                                    <small>900KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>
                                <div class="info">
                                    <h4>MG_4145.jpg')}}</h4>
                                    <small>5.6MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>
                                <div class="info">
                                    <h4>MG_4100.jpg')}}</h4>
                                    <small>5MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>
                                <div class="info">
                                    <h4>Reports_end.doc</h4>
                                    <small>780KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-videocam l-turquoise"></i>
                                <div class="info">
                                    <h4>movie2018.MKV</h4>
                                    <small>750MB</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Pro. Team</h2></li>
                <li>
                    <img src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt="Avatar">
                </li>
                <li>
                    <img src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt="Avatar">
                </li>
                <li>
                    <img src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt="Avatar">
                </li>
                <li>
                    <img src="{{asset('back-end/images/xs/avatar6.jpg')}}" alt="Avatar">
                </li>
                <li>
                    <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                </li>
            </ul>
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="{{asset('back-end/images/xs/avatar3.jpg')}}" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="javascript:void(0);">Alexander</a>
                        <span class="datetime">6:12</span>
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="{{asset('back-end/images/xs/avatar2.jpg')}}" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="{{asset('back-end/images/xs/avatar1.jpg')}}" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Horizontal Menu Dashboad
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial1" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#26dad2" readonly>
                        <h6 class="m-t-20">Students Satisfaction</h6>
                        <p class="displayblock m-b-0">47% Average <i class="zmdi zmdi-trending-up"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial2" value="26" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                        <h6 class="m-t-20">New Student</h6>
                        <p class="displayblock m-b-0">13% Average <i class="zmdi zmdi-trending-down"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial3" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                        <h6 class="m-t-20">Medical Treatment</h6>
                        <p class="displayblock m-b-0">75% Average <i class="zmdi zmdi-trending-up"></i></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial4" value="88" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#00adef" readonly>
                        <h6 class="m-t-20">Total Revenue</h6>
                        <p class="displayblock m-b-0">54% Average <i class="zmdi zmdi-trending-up"></i></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card product-report">
                    <div class="header">
                        <h2><strong>Product</strong> Report</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4 col-sm-4 text-center m-b-10">
                                <h3 class="counter m-b-0">516</h3>
                                <small class="text-muted">Treatment</small>
                                <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="6" data-bar-Color="rgb(134, 139, 239)">7,5,3,1,5,9,8,5,2,6,5,4,2,5,8,4,5,6,3,5,7,8</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-center m-b-10">
                                <h3 class="counter m-b-0">481</h3>
                                <small class="text-muted">Surgeries</small>
                                <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="6" data-bar-Color="rgb(25, 161, 183)">2,5,8,4,5,6,3,5,7,8,4,6,7,5,3,1,5,9,8,5,5,4</div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 text-center m-b-10">
                                <h3 class="counter m-b-0">115</h3>
                                <small class="text-muted">Monthly Operations</small>
                                <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="6" data-bar-Color="rgb(254, 191, 15)">6,5,4,3,2,1,9,8,7,8,5,2,2,5,8,4,5,6,7,8,4,6</div>
                            </div>
                        </div>
                        <div id="m_area_chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Inbox</strong> <small>Description text here...</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="inbox-widget list-unstyled clearfix">
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Aaron	Enlightened</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Alvin Doe</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Austin</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Benjamin</p>
                                        <p class="inbox-message">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner"> <a href="javascript:void(0)">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="{{asset('back-end/images/xs/avatar5.jpg')}}" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">Broderick</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
           <div class="col-lg-12 col-md-12">
               <div class="card ">
                   <div class="header">
                        <h2><strong>New</strong> Admission List</h2>
                       <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                   </div>
                   <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th>Media</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Number</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-icon"><img  src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>25</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img  src="{{asset('back-end/images/xs/avatar2.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">KU 00789</span></td>
                                        <td>Cameron</td>
                                        <td>27</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-4569</td>
                                        <td><span class="badge badge-warning">Medical</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img  src="{{asset('back-end/images/xs/avatar3.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">KU 00987</span></td>
                                        <td>Alex</td>
                                        <td>23</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-7412</td>
                                        <td><span class="badge badge-info">M.COM</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img  src="{{asset('back-end/images/xs/avatar4.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">OU 00951</span></td>
                                        <td>James</td>
                                        <td>23</td>
                                        <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>404-447-2589</td>
                                        <td><span class="badge badge-default">MBA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-icon"><img  src="{{asset('back-end/images/xs/avatar1.jpg')}}" alt=""></span></td>
                                        <td><span class="list-name">OU 00953</span></td>
                                        <td>charlie</td>
                                        <td>21</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-9632</td>
                                        <td><span class="badge badge-success">BBA</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="{{asset('back-end/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('back-end/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('back-end/bundles/index.bundle.js')}}"></script> <!-- Jquery Knob, Count To, Sparkline Js -->
<script src="{{asset('back-end/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js -->

<script src="{{asset('back-end/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('back-end/js/pages/charts/jquery-knob.js')}}"></script>
<script src="{{asset('back-end/js/pages/index2.js')}}"></script>
<script>
    /*global $ */
    $(document).ready(function() {
      "use strict";
      $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
      //Checks if li has sub (ul) and adds class for toggle icon - just an UI

      $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');

      $(".menu > ul > li").hover(function(e) {
        if ($(window).width() > 943) {
          $(this).children("ul").stop(true, false).fadeToggle(150);
          e.preventDefault();
        }
      });
      //If width is more than 943px dropdowns are displayed on hover
      $(".menu > ul > li").click(function() {
        if ($(window).width() <= 943) {
          $(this).children("ul").fadeToggle(150);
        }
      });
      //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

      $(".h-bars").click(function(e) {
        $(".menu > ul").toggleClass('show-on-mobile');
        e.preventDefault();
      });
      //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

    });
    </script>
</body>
</html>
