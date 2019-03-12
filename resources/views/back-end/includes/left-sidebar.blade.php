<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Professors</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="{{route('back.profile')}}"><img src="http://via.placeholder.com/80x80" alt="User"></a></div>
                            <div class="detail">
                                <h4>Pro. Charlotte</h4>
                                <small>UI UX Designer</small>
                            </div>
                        </div>
                    </li>
                    <li class="header">MAIN</li>
                    <li class="active open"><a href="{{route('back.home')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Students</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('student.index')}}">All Students</a></li>
                            <li><a href="{{route('back.add-students')}}">Add Students</a></li>
                            <li><a href="{{route('back.students-profile')}}">Students Profile</a></li>
                            <li><a href="{{route('back.students-invoice')}}">Students Invoice</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Dossiers</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('folder.index')}}">Tous les Dossiers</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-alt"></i><span>Professors</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('back.professors')}}">All Professors</a></li>
                            <li><a href="{{route('back.add-professors')}}">Add Professors</a></li>
                            <li><a href="{{route('back.add-staff')}}">Add Staff</a></li>
                            <li><a href="{{route('back.profile')}}">Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('back.parents')}}"><i class="zmdi zmdi-account"></i><span>Parents</span> </a></li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('back.sign-in')}}">Sign In</a> </li>
                            <li><a href="{{route('back.sign-up')}}">Sign Up</a> </li>
                            <li><a href="{{route('back.forgot-password')}}">Forgot Password</a> </li>
                            <li><a href="{{route('back.404')}}">Page 404</a> </li>
                            <li><a href="{{route('back.500')}}">Page 500</a> </li>
                            <li><a href="{{route('back.page-offline')}}">Page Offline</a> </li>
                            <li><a href="{{route('back.locked')}}">Locked Screen</a> </li>
                        </ul>
                    </li>
                    <li class="header">UNIVERSITY</li>
                    <li><a href="{{route('back.events')}}"><i class="zmdi zmdi-calendar-check"></i><span>Events</span> </a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Departments</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('back.departments')}}">All Departments</a></li>
                            <li><a href="{{route('back.add-departments')}}">Add Departments</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Entités</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('school.index')}}">Toutes les entités</a></li>
                            <li><a href="{{route('school.create')}}">Ajouter une entité</a></li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Filière</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('training.index')}}">Toutes les filières</a></li>
                            <li><a href="{{route('training.create')}}">Ajouter une filière</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Options</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('option.index')}}">Toutes les options</a></li>
                            <li><a href="{{route('option.create')}}">Ajouter une option</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('back.library')}}"><i class="zmdi zmdi-book"></i><span>Library</span> </a></li>
                    <li><a href="{{route('back.classroom')}}"><i class="zmdi zmdi-device-hub"></i><span>Class</span> </a></li>
                    <li><a href="{{route('back.noticeboard')}}"><i class="zmdi zmdi-alert-circle"></i><span>Noticeboard</span> </a></li>
                    <li><a href="{{route('back.centres')}}"><i class="zmdi zmdi-pin"></i><span>University Centres</span></a></li>
                    <li class="header">EXTRA COMPONENTS</li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{route('back.blog-dashboard')}}">Blog Dashboard</a></li>
                            <li><a href="{{route('back.blog-post')}}">New Post</a></li>
                            <li><a href="{{route('back.blog-list')}}">Blog List</a></li>
                            <li><a href="{{route('back.blog-grid')}}">Blog Grid</a></li>
                            <li><a href="{{route('back.blog-details')}}">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('back.file-dashboard')}}">All File</a></li>
                            <li><a href="{{route('back.file-documents')}}" >Documents</a></li>
                            <li><a href="{{route('back.file-media')}}">Media</a></li>
                            <li><a href="{{route('back.file-images')}}">Images</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('back.mail-inbox')}}">Inbox</a></li>
                            <li><a href="{{route('back.chat')}}">Chat</a></li>
                            <li><a href="{{route('back.contact')}}">Contact list</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('back.widgets-app')}}">Apps Widgetse</a></li>
                            <li><a href="{{route('back.widgets-data')}}">Data Widgetse</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span> </a>
                        <ul class="ml-menu">
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
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('back.ui_kit')}}">UI KIT</a></li>
                            <li><a href="{{route('back.alerts')}}">Alerts</a></li>
                            <li><a href="{{route('back.collapse')}}">Collapse</a></li>
                            <li><a href="{{route('back.colors')}}">Colors</a></li>
                            <li><a href="{{route('back.dialogs')}}">Dialogs</a></li>
                            <li><a href="{{route('back.icons')}}">Icons</a></li>
                            <li><a href="{{route('back.list-group')}}">List Group</a></li>
                            <li><a href="{{route('back.media-object')}}">Media Object</a></li>
                            <li><a href="{{route('back.modals')}}">Modals</a></li>
                            <li><a href="{{route('back.notifications')}}">Notifications</a></li>
                            <li><a href="{{route('back.progressbars')}}">Progress Bars</a></li>
                            <li><a href="{{route('back.range-sliders')}}">Range Sliders</a></li>
                            <li><a href="{{route('back.sortable-nestable')}}">Sortable & Nestable</a></li>
                            <li><a href="{{route('back.tabs')}}">Tabs</a></li>
                            <li><a href="{{route('back.waves')}}">Waves</a></li>
                        </ul>
                    </li>
                    <li class="header">Extra</li>
                    <li>
                        <div class="progress-container progress-primary m-t-10">
                            <span class="progress-badge">Traffic this Month</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                    <span class="progress-value">67%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Server Load</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="{{route('back.profile')}}"><img src="http://via.placeholder.com/80x80" alt="User"></a></div>
                            <div class="detail">
                                <h4>Pro. Charlotte</h4>
                                <small>UI UX Designer</small>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                                <div class="col-4 p-r-0">
                                    <h5 class="m-b-5">13</h5>
                                    <small>Exp</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">33</h5>
                                    <small>Awards</small>
                                </div>
                                <div class="col-4 p-l-0">
                                    <h5 class="m-b-5">237</h5>
                                    <small>Class</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Location: </small>
                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        <hr>
                        <small class="text-muted">Email address: </small>
                        <p>Charlotte@example.com</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ 202-555-0191</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div>Photoshop</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">89% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Illustrator</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Art & Design</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">78% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>HTML</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>CSS</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
