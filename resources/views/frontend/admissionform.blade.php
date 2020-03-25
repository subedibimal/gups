@extends('layouts.frontend')
@section('title',' Admission Form')
@section('head')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.min.css" rel="stylesheet"/>
    @endsection
@section('content')
    <div id="banner-area banner-bg" style="background: url(../frontend/images/banner.jpg);">
    <div class="banner-area banner-bg"  >
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2 class="text-center">ADMISSION FORM</h2>
                        <ul class="page-title-link">
                            <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right"
                                                                       aria-hidden="true"></i><a
                                    href="{{url('/front/admission')}}">Admission Form</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Banner -->
    <section id="form" class="img-fluid">
    <div class="form">

      <div class="submit-ad main-grid-border">
        <div class="container bg-white my-4 p-0">
          <h2 class="text-center pt-5 pb-2" style="color: #0099E5;">Fill up the Form</h2>
          <div class="wen"></div>
          <form method="post" action="{{url('front/admission/admissionform')}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="post-ad-form">
            <div class="personal-details">
              <h5 class="head-a">General Information</h5>
                <label class="w-100">Name of the Student<i>(In Block Letter)</i><span>*</span></label>
                <div class="block-input">
                 <div class="block-letter">
                    <div>
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">

                </div>

                <div>
                <input type="text" class="name ml-2" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">

                </div>
                <div>
                <input type="text" class="name ml-2" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">
                <input type="text" class="name" name="full_name" value="{{old('full_name')}}"placeholder="">

                </div>
                 </div>
                <div class="clearfix"></div>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-12">
                    <label>Date of Birth : B.S</label>
                <input type="text" class="name" name="dob_bs" placeholder="">
                <input type="text" class="name" name="dob_bs" placeholder="">

                <input type="text" class="name ml-3" name="dob_bs" placeholder="">
                <input type="text" class="name" name="dob_bs" placeholder="">

                <input type="text" class="name ml-3" name="dob_bs" placeholder="">
                <input type="text" class="name" name="dob_bs" placeholder="">
                <input type="text" class="name" name="dob_bs" placeholder="">
                <input type="text" class="name" name="dob_bs" placeholder="">
                  </div>
                  <div class="col-md-6 col-sm-6 col-12">
                    <label>A.D</label>
                <input type="text" class="name" name="dob_ad" placeholder="">
                <input type="text" class="name" name="dob_ad" placeholder="">

                <input type="text" class="name ml-3" name="dob_ad" placeholder="">
                <input type="text" class="name" name="dob_ad" placeholder="">

                <input type="text" class="name ml-3" name="dob_ad" placeholder="">
                <input type="text" class="name" name="dob_ad" placeholder="">
                <input type="text" class="name" name="dob_ad" placeholder="">
                <input type="text" class="name" name="dob_ad" placeholder="">
                  </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Gender<span>*</span></label>
                <input type="text" class="gender" name="gender" placeholder="">
                <div class="clearfix"></div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                                    <label>Nationality<span>*</span></label>
                <input type="text" class="nationality" name="nationality" placeholder="">
                <div class="clearfix"></div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                                    <label>Religion<span>*</span></label>
                <input type="text" class="religion" name="religion" placeholder="">
                <div class="clearfix"></div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Blood Group<span>*</span></label>
                <input type="text" class="religion" name="blood_group" placeholder="">
                <div class="clearfix"></div>
                  </div>
                </div>

                <label>Father's/Mother's Name<span>*</span></label>
                <input type="text" class="name" name="parent_name" value="{{old('parent_name')}}" placeholder="">
                <div class="clearfix"></div>
                <label>Present Address<span>*</span></label>
                <input type="text" class="name" name="address" value="{{old('address')}}" placeholder="">
                <label>Contact No.<span>*</span></label>
                <div class="row" >
                  <div class="col-md-4" >
                    <input type="text" class="Home" name="home_no" value="{{old('home_no')}}" placeholder="Home">
                  </div>
                  <div class="col-md-4" >
                    <input type="text" class="mobile" name="mobile_no" value="{{old('mobile_no')}}" placeholder="Father">
                  </div>
                  <div class="col-md-4" >
                    <input type="text" class="office" name="office_no" value="{{old('office_no')}}" placeholder="Mother">
                  </div>
                </div>

               <div class="my-4">
                  <h5 class="head-b">Academics</h5>
                    <label>Admission Seeking For(Grade/Stream):<span>*</span></label>
                    <input type="text" class="Qualification" name="admission_seeking_level" value="{{old('admission_seeking_level')}}" placeholder="">
                    <label>Admission Seeking As(Day/Boarder):<span>*</span></label>
                    <input type="text" class="Qualification" name="admission_seeking_as" value="{{old('admission_seeking_as')}}" placeholder="">
                    <label>Bus Stop(if necessary):<span>*</span></label>
                    <input type="text" class="Qualification" name="bus_stop" value="{{old('bus_stop')}}" placeholder="">
                    <label>Previous School's Name and Adress:<span>*</span></label>
                    <input type="text" class="Qualification" name="school" value="{{old('school')}}" placeholder="">
                    <label>Name of the Board(in any other than Nepal Board):<span>*</span></label>
                    <input type="text" class="Qualification" name="board_1" value="{{old('board_1')}}" placeholder="">
                    <label>Reason(s) for leaving previous school:<span>*</span></label>
                    <input type="text" class="Qualification" name="reason" value="{{old('reason')}}" placeholder="">
               </div>

              <div class="my-4">
                <section id="checkout" >
                  <div class="container p-0">
                    <div class="checkout">
                      <div class="checkout-right">
                        <table class="timetable_sub table-responsive">
                          <h5 class="head-c">Academic Performance In Previous Grade</h5>
                          <thead>
                            <tr>
                              <th>Subject</th>
                              <th>Full Marks</th>
                              <th>Obtained Marks</th>
                              <th>Remarks</th>
                            </tr>
                          </thead>
                            <tr class="rem1">
                              <td>English</td>
                              <td><input type="text" class="Qualification" name="full_marks_1" value="{{old('full_marks_1')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="obtained_marks_1" value="{{old('obtained_marks_1')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="remarks_1" value="{{old('remarks_1')}}" placeholder=""></td>
                            </tr>
                            <tr class="rem1">
                              <td>Compulsory Math</td>
                              <td><input type="text" class="Qualification" name="full_marks_2" value="{{old('full_marks_2')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="obtained_marks_2" value="{{old('obtained_marks_2')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="remarks_2" value="{{old('remarks_2')}}" placeholder=""></td>
                            </tr>
                            <tr class="rem1">
                              <td>Science</td>
                              <td><input type="text" class="Qualification" name="full_marks_3" value="{{old('full_marks_3')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="obtained_marks_3" value="{{old('obtained_marks_3')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="remarks_3" value="{{old('office_no')}}" placeholder=""></td>
                            </tr>
                            <tr class="rem1">
                              <td>Nepali</td>
                              <td><input type="text" class="Qualification" name="full_marks_4" value="{{old('full_marks_4')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="obtained_marks_4" value="{{old('obtained_marks_4')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="remarks_4" value="{{old('office_no')}}" placeholder=""></td>
                            </tr>
                            <tr class="rem1">
                              <td>Total Mark with Percentage</td>
                              <td><input type="text" class="Qualification" name="total_marks" value="{{old('total_marks')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="total_obtained_marks" value="{{old('total_obtained_marks')}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="percent" value="{{old('percent')}}" placeholder=""></td>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div>
                <h5 class="head-d">Curricular Activities</h5>
                <label>Games/Sports/Hobbies</label>
                <div class="activities">

                <span><input type="checkbox" name="extra_curricular" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" class="form-box">
                <label for=""> Football</label></span>
                </div>
              </div>
             </div>
             <button type="submit" class="btn btn-harry">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- <section id="form" class="img-fluid" >
    <div class="form" >
    <div class="submit-ad main-grid-border">
        <div class="container bg-white my-4 p-0">
          <h2 class="text-center pt-5 pb-2" style="color: #0099E5;">Fill up the Form</h2>
          <div class="wen"></div>
                <form method="post" action="{{url('front/admission/admissionform')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="post-ad-form">
                        <div class="personal-details">
                            <h5>General Information:</h5>
                            <div class="block-input">
                 <div class="block-letter">
                    <div>
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">

                </div>

                <div>
                <input type="text" class="name ml-2" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">

                </div>
                <div>
                <input type="text" class="name ml-2" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">
                <input type="text" class="name" placeholder="">

                </div>
                 </div>
                </div>
                <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                            <label>Gender<span>*</span></label>
                            <input type="radio" name="gender" value="Male" placeholder="" @if((old('gender'))=="Male") checked @endif required>Male
                            <input type="radio" name="gender" value="Female" placeholder="" @if(old('gender')=="Female") checked @endif required>Female
                            <div class="clearfix"></div>
                            </div>
                            <label>Nationality<span>*</span></label>
                            <input type="text" class="nationality" name="nationality" value="{{old('nationality')}}" placeholder=""required>
                            <div class="clearfix"></div>
                            </div>
                            <label>Religion<span>*</span></label>
                            <input type="text" class="religion" name="religion" value="{{old('religion')}}" placeholder=""required>
                            <div class="clearfix"></div>
                            </div>
                            <label>Blood Group<span>*</span></label>
                            <input type="text" class="religion" name="bloodgroup" value="{{old('bloodgroup')}}" placeholder=""required>
                            <div class="clearfix"></div>
</div>
                </div>

                            <label>Father's/Mother's Name<span>*</span></label>
                            <input type="text" class="name" name="parent_name" value="{{old('parent_name')}}" placeholder=""required>
                            <div class="clearfix"></div>
                            <label>Qualification<span>*</span></label>
                            <input type="text" class="Qualification" name="qualification" value="{{old('qualification')}}" placeholder=""required>
                            <div class="clearfix"></div>
                            <label>Contact No.<span>*</span></label>
                            <div class="row" >
                                <div class="col-md-4" >
                                    <input type="text" class="Home" name="home_no" value="{{old('home_no')}}" placeholder="Home"required>
                                </div>
                                <div class="col-md-4" >
                                    <input type="text" class="mobile" name="mobile_no" value="{{old('mobile_no')}}" placeholder="Mobile No."required>
                                </div>
                                <div class="col-md-4" >
                                    <input type="text" class="office"  name="office_no" value="{{old('office_no')}}" placeholder="office"required>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-md-6 academicrecord" >
                                    <label>Admission Seeking For Level<span>*</span></label>
                                    <input type="text" class="Qualification" name="admission_seeking_level" value="{{old('admission_seeking_level')}}" placeholder=""required>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-6 academicrecord" >
                                    <label>Semester<span>*</span></label>
                                    <input type="text" class="Qualification" name="semester" value="{{old('semester')}}" placeholder=""required>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-6 academicrecord" >
                                    <label>District<span>*</span></label>
                                    <input type="text" class="Qualification" name="district" value="{{old('district')}}" placeholder=""required>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-6 academicrecord" >
                                    <label>School<span>*</span></label>
                                    <input type="text" class="Qualification" name="school" value="{{old('school')}}" placeholder=""required>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <h3>Academic Background :</h3>
                            <section id="checkout" >
                                <div class="container">
                                    <div class="checkout">
                                        <div class="checkout-right">
                                            <table class="timetable_sub">
                                                <thead>
                                                <tr>
                                                    <th>Level</th>
                                                    <th>Board of university</th>
                                                    <th>Name of the institution and address</th>
                                                    <th>Passed Year</th>
                                                    <th>Percent with Grade</th>
                                                    <th>Remarks</th>
                                                </tr>
                                                </thead>
                                                <tr class="rem1">
                                                    <td><input type="text" class="Qualification" name="level_1" value="{{old('level_1')}}" placeholder=""required></td>
                                                    <td><input type="text" class="Qualification" name="board_1" value="{{old('board_1')}}" placeholder=""required></td>
                                                    <td><input type="text" class="Qualification" name="institution_details_1" value="{{old('institution_details_1')}}" placeholder=""required></td>
                                                    <td><input type="text" class="Qualification" name="passed_year_1" value="{{old('passed_year_1')}}" placeholder=""required></td>
                                                    <td><input type="text" class="Qualification" name="percent_grade_1" value="{{old('percent_grade_1')}}" placeholder=""required></td>
                                                    <td><input type="text" class="Qualification" name="remarks_1" value="{{old('remarks_1')}}" placeholder=""></td>
                                                </tr>
                                                <tr class="rem1">
                                                    <td><input type="text" class="Qualification" name="level_2" value="{{old('level_2')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="board_2" value="{{old('board_2')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="institution_details_2" value="{{old('institution_details_2')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="passed_year_2" value="{{old('passed_year_2')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="percent_grade_2" value="{{old('percent_grade_2')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="remarks_2" value="{{old('remarks_2')}}" placeholder=""></td>
                                                </tr>
                                                <tr class="rem1">
                                                    <td><input type="text" class="Qualification" name="level_3" value="{{old('level_3')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="board_3" value="{{old('board_3')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="institution_details_3" value="{{old('institution_details_3')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="passed_year_3" value="{{old('passed_year_3')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="percent_grade_3" value="{{old('percent_grade_3')}}" placeholder=""></td>
                                                    <td><input type="text" class="Qualification" name="remarks_3" value="{{old('remarks_3')}}" placeholder=""></td>
                                                    <div>
                <h5 class="head-d">Curricular Activities</h5>
                <label>Games/Sports/Hobbies</label>
                <div class="activities">

                <span><input type="checkbox" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" class="form-box">
                <label for=""> Football</label></span>
                                        </div>
                                    </div>
                        </div>
                        <button type="submit" class="btn btn-harry ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->
    @endsection
@section('script')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/js/bootstrap-timepicker.min.js"></script>

<!-- Bootstrap4 Duallistbox -->
<script>
    $(function () {
        $("#datepicker1").datepicker();
    });
</script>
    @endsection
