@extends('layouts.frontend')
@section('title',' Admission Form')
@section('head')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.min.css" rel="stylesheet"/>
    @endsection
@section('content')
    <div class="banner-area banner-bg" style="background: url(../frontend/images/banner.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2 class="text-center">ADMISSION FORM</h2>
                        <ul class="page-title-link">
                            <li><a href="{{url('/front')}}">Home</a><i class="fa fa-angle-double-right"
                                                                       aria-hidden="true"></i><a
                                    href="{{url('/front/admission_form')}}">Admission Form</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner -->
<section id="form" class="img-fluid" >
    <div class="form" >
        <h2 class="text-center pt-5" >Form</h2>
        <hr>
        <div class="submit-ad main-grid-border">
            <div class="container">
                <form method="post" action="{{url('front/admission/admissionform')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="post-ad-form">
                        <div class="personal-details">
                            <h3>Applicant Details :</h3>
                            <label>Your Full Name <i>(In Block Letter)</i><span>*</span></label>
                            <input type="text" class="name" name="full_name" value="{{old('full_name')}}" placeholder=""required>
                            <div class="clearfix"></div>
                            <label>Student's Email Address<span>*</span></label>
                            <input type="email" class="email" name="email" value="{{old('email')}}" placeholder=""required>
                            <div class="clearfix"></div>
                            <label>Gender<span>*</span></label>
                            <input type="radio" name="gender" value="Male" placeholder="" @if((old('gender'))=="Male") checked @endif required>Male
                            <input type="radio" name="gender" value="Female" placeholder="" @if(old('gender')=="Female") checked @endif required>Female
                            <div class="clearfix"></div>
                            <label>Date of Birth<span>*</span></label>
                            <input type="text" id="datepicker1" class="form-control datepicker" name="dob" value="{{old('dob')}}"
                                   autocomplete="off" placeholder=""required>
                            <div class="clearfix"></div>
                            <label>Nationality<span>*</span></label>
                            <input type="text" class="nationality" name="nationality" value="{{old('nationality')}}" placeholder=""required>
                            <div class="clearfix"></div>
                            <label>Religion<span>*</span></label>
                            <input type="text" class="religion" name="religion" value="{{old('religion')}}" placeholder=""required>
                            <div class="clearfix"></div>
                            <label>Student's Mailing Address<span>*</span></label>
                            <div class="row" >
                                <div class="col-md-4" >
                                    <input type="text" class="province" name="province" value="{{old('province')}}" placeholder="Province"required>
                                </div>
                                <div class="col-md-4" >
                                    <input type="text" class="zone" name="zone" value="{{old('zone')}}" placeholder="zone"required>
                                </div>
                                <div class="col-md-4" >
                                    <input type="text" class="district" name="district" value="{{old('district')}}" placeholder="district"required>
                                </div>
                            </div>
                            <label>Village Municipality/Municipality/Metro<span>*</span></label>
                            <div class="row" >
                                <div class="col-md-4" >
                                    <input type="text" class="municipality" name="municipality" value="{{old('municipality')}}" placeholder="Village Municipality/Municipality/Metro"required>
                                </div>
                                <div class="col-md-4" >
                                    <input type="text" class="ward" name="ward" value="{{old('ward')}}" placeholder="ward"required>
                                </div>
                                <div class="col-md-4" >
                                    <input type="text" class="village" name="village" value="{{old('village')}}" placeholder="Village/Tole"required>
                                </div>
                            </div>
                            <div class="clearfix"></div>
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
                            <h3>Academic Record :</h3>
                            <div class="row" >
                                <div class="col-md-6 academicrecord" >
                                    <label>AFU Entrance Symbol No:<span>*</span></label>
                                    <input type="text" class="Qualification" name="afu_symbol_no" value="{{old('afu_symbol_no')}}" placeholder=""required>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-6 academicrecord" >
                                    <label>Submission ID No:<span>*</span></label>
                                    <input type="text" class="Qualification" name="submission_no" value="{{old('submission_no')}}" placeholder=""required>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-6 academicrecord" >
                                    <label>AFU Entrance Score:<span>*</span></label>
                                    <input type="text" class="Qualification" name="afu_entrance_score" value="{{old('afu_entrance_score')}}" placeholder=""required>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-6 academicrecord" >
                                    <label>Merit No:<span>*</span></label>
                                    <input type="text" class="Qualification" name="merit_no" value="{{old('merit_no')}}" placeholder=""required>
                                    <div class="clearfix"></div>
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
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <button type="submit" class="btn btn-harry ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
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
