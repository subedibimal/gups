<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/admin/dashboard')}}" class="brand-link">
        <img src="{{url('/').Storage::url(get_school_info('logo'))}}" alt="{{get_school_info('site_name')}}"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{get_school_info('short_name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name ?? 'Admin'}}</a>
            </div>

        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('/admin/dashboard')}}" class="nav-link active">
                        <i class="fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>

                {{--<li class="nav-item has-treeview">--}}
                {{--<a href="#" class="nav-link">--}}
                {{--<i class="fas fa-box-open"></i>--}}
                {{--<p>--}}
                {{--Subject--}}
                {{--<i class="fas fa-angle-left right"></i>--}}
                {{--</p>--}}
                {{--</a>--}}
                {{--<ul class="nav nav-treeview">--}}
                {{--<li class="nav-item">--}}
                {{--<a href="{{route('course.create')}}" class="nav-link">--}}
                {{--<i class="far fa-circle nav-icon"></i>--}}
                {{--<p>Add New</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a href="{{route('course.create')}}" class="nav-link">--}}
                {{--<i class="far fa-circle nav-icon"></i>--}}
                {{--<p>View All</p>--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-item has-treeview">--}}
                {{--<a href="#" class="nav-link">--}}
                {{--<i class="fas fa-list-alt"></i>--}}
                {{--<p>--}}
                {{--Subject Description--}}
                {{--<i class="fas fa-angle-left right"></i>--}}
                {{--</p>--}}
                {{--</a>--}}
                {{--<ul class="nav nav-treeview">--}}
                {{--<li class="nav-item">--}}
                {{--<a href="{{route('course_description.create')}}" class="nav-link">--}}
                {{--<i class="far fa-circle nav-icon"></i>--}}
                {{--<p>Add New</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a href="{{route('course_description.index')}}" class="nav-link">--}}
                {{--<i class="far fa-circle nav-icon"></i>--}}
                {{--<p>View All</p>--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--</ul>--}}
                {{--</li>--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list"></i>
                        <p>
                            Semester
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('semester.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('semester.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-newspaper"></i>
                        <p>
                            News And Event
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('news_and_events.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('news_and_events.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('news_and_events.pending')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trash</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fab fa-buffer"></i>
                        <p>
                            What We Offer
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('whatWeOffer.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('whatWeOffer.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('whatWeOffer.pending')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trash</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="far fa-envelope"></i>
                        <p>
                            Notice
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('notice.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('notice.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View All</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('notices.pending')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trash</p>
                            </a>
                        </li>

                    </ul>
                </li>
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-envelope"></i>
                                        <p>
                                            Blog
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{route('blog.create')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Add New</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('blog.index')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>View All</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('blogs.pending')}}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Trash</p>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                <li class="nav-item">
                    <a href="{{route('gallery.index')}}" class="nav-link">
                        <i class="fas fa-images"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('information.index')}}" class="nav-link">
                        <i class="fas fa-info-circle"></i>
                        <p>
                            Information
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('get.aboutus.create')}}" class="nav-link">
                        <i class="fas fa-address-card"></i>
                        <p>
                            About Us
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('get.life_at_gups.create')}}" class="nav-link">
                    <i class="fas fa-heartbeat"></i>
                        <p>
                            Life at GUPS
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('enquiry.index')}}" class="nav-link">
                        <i class="fas fa-question-circle"></i>
                        <p>
                            Enquiry
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/admissionform')}}" class="nav-link">
                        <i class="fas fa-list"></i>
                        <p>
                            Admission Form List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('admin/vacancy')}}" class="nav-link">
                        <i class="fas fa-circle-notch"></i>
                        <p>
                            Vacancy
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('get.footer_description.create')}}" class="nav-link">
                    <i class="fas fa-pencil-alt"></i>
                        <p>
                            Footer Description
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('setting.index')}}" class="nav-link">
                        <i class="fas fa-wrench"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cogs"></i>
                        <p>
                            Home Page Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('slider.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('apply_admission.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Apply For Admission
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('fourblock.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Three Blocks
                                </p>
                            </a>
                        </li>
                    </ul>
                    <
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
