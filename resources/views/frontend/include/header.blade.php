<header class="header_area" >
    <div class="top_menu row m-0">
        <div class="container">
            <div class="float-left">
                <ul class="list header_social">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="float-right" id="dnbtn">
                <a class="dn_btn" href="tel:01-66371231"><img src="{{asset('frontend/images/tele.jpg')}}">01-66579812</a>
                <a class="dn_btn" href="mailto:support@colorlib.com"><img  src="{{asset('frontend/images/mail.png')}}">gorkhaschool@gmail.com</a>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('images/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/front/aboutus')}}">About us</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Information<i class="fas fa-caret-down pl-1"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{('/front/program')}}">Activities</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Academic Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{('/front/admission/')}}">Admission</a>
                                <li class="nav-item"><a class="nav-link" href="{{('/front/vacancy')}}">Career</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">General Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{('/front/chairman_message')}}">Message From Chairman</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{('/front/md_message')}}">Message From Principle</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/front/scholarship')}}">Scholarship</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/front/blog')}}">Student Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/front/calender')}}">Calender</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/front/viewallevents')}}">News & Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/front/admission')}}">Admission</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/front/gallery_category')}}">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/front/contactus')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
