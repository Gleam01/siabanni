<div id="navbar">
    <div class="container">
        <nav class="navbar navbar-toggleable-sm navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarMenu" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('front.home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('front.courses')}}">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('front.event')}}">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('front.teachers')}}">Teachers</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="pageMenuLink"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('front.blog')}}">Blog</a>
                            <a class="dropdown-item" href="{{route('front.blog-detail')}}">Blog Detail</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="pageMenuLink1"
                           data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('front.about')}}">About Us</a>
                            <a class="dropdown-item" href="{{route('front.faq')}}">FAQs</a>
                            <a class="dropdown-item" href="{{route('front.galary')}}">Galary</a>
                            <a class="dropdown-item" href="{{route('front.price')}}">Price list</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('front.contact')}}">Contact Us</a></li>
                </ul>
                <form class="form-inline input-group hidden-md-down m-b-0">
                    <div class="input-group m-b-0"><span class="input-group-addon"> <i
                            class="zmdi zmdi-search"></i> </span>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>
