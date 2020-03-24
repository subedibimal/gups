<div class="col-lg-3 col-md-3 col-sm-12 pt-5" >
    <div class="aboutquick" >
        <h4 class="pt-3" >Quick Links</h4>
        <a href="{{route('frontend.chairman_message')}}"><i class="fas fa-arrow-right"></i>Chairman Message</a>
        <a href="{{route('frontend.md_message')}}"><i class="fas fa-arrow-right"></i>Managing Director's Message</a>
        <a href="{{url('front/program')}}"><i class="fas fa-arrow-right"></i>Program</a>
        <a href="{{url('front/admission')}}"><i class="fas fa-arrow-right"></i>Admission</a>
        <a href="{{url('front/facility')}}"><i class="fas fa-arrow-right"></i>Facilities</a>
        <a href="{{url('front/scholarship')}}"><i class="fas fa-arrow-right"></i>Scholarship</a>
        <a href="{{url('front/gallery_category')}}"><i class="fas fa-arrow-right"></i>Gallery</a>
        <a href="{{url('front/aboutus')}}"><i class="fas fa-arrow-right"></i>About Us</a>
        <a href="{{url('front/contactus')}}"><i class="fas fa-arrow-right"></i>Contact Us</a>

    </div>
    <div class="notice mt-5" >
        <h4>Contact Info</h4>
        <span>{{get_school_info('site_name')}}</span>
        <span>{{get_school_info('address')}}</span>
        <span class="pt-3" >{{get_school_info('mobile')}} | {{get_school_info('phone')}}</span>
        <span>{{get_school_info('email')}}</span>
        <h6 class="pt-4" >{{get_school_info('working_days')}} : {{get_school_info('working_time')}}</h6>
        <h4 class="pt-3" >Social Links</h4>
        <a href="{{get_school_info('facebook_link')}}"><i class="fab fa-facebook-f"></i></a>
        <a href="{{get_school_info('google_link')}}"><i class="fab fa-google-plus-g"></i></a>
        <a href="{{get_school_info('instagram_link')}}"><i class="fab fa-instagram"></i></a>
        <a href="{{get_school_info('skype_link')}}"><i class="fab fa-skype"></i></a>
    </div>
</div>