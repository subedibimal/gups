@extends('layouts.backend')
@section('title',' Admission Form | Show')
@section('head')
    <style>
        #form
{
  width: 100%;
  background:none;
  height: auto;
}
#form h2
{
  color: #000

}
.form i
{
  font-size: 10px;
  font-style: normal;
}
.academicrecord label
{
  font-size: 11px!important

}
.post-ad-form {
    padding: 40px;
    padding-bottom: 100px
}
.post-ad-form form label {
    font-size: 14px;
    text-transform: capitalize;
    margin-bottom: 8px;
    color: #000;
    margin-top: 10px;
    display: block;
    font-weight: 400;
    float: left;
    width: 16%;
    margin-right: 4%;
}
.block-letter input {
  float: left;
}
.post-ad-form form label span {
  color:red;
}
.post-ad-form input[type="text"] {
    padding: 5px 10px 5px 10px;
    width: 100%;
    margin-bottom: 25px;
    outline: none;
    color: #555;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
.post-ad-form textarea {
    height: 180px;
    outline: none;
    resize: none;
  padding: 10px 10px 10px 10px;
    width: 70%;
    margin-bottom: 25px;
    outline: none;
    color: #555;
}
.post-ad-form form select {
    background-color: #fff;
    padding: 5px;
    width: 30%;
    margin-bottom: 25px;
    position: relative;
    top: 5px
}
.post-ad-form input[type="submit"] {
    background: #0099e5;
    color: white;
    -webkit-appearance: none;
    border: none;
    text-transform: uppercase;
    position: relative;
    padding: 10px 50px;
    font-size: 20px;
    letter-spacing: 0.1em;
    font-weight: 300;
    -webkit-transition: all 333ms ease-in-out;
    -moz-transition: all 333ms ease-in-out;
    -o-transition: all 333ms ease-in-out;
    -ms-transition: all 333ms ease-in-out;
    transition: all 333ms ease-in-out;
    margin-top: 20px;
  float: right;
}

legend
{
  font-weight: bold;
  color: #333;
}

img
{
  max-width: 100%;
}

pre
{
  width: 95%;
  height: 8em;
  font-family: monospace;
  font-size: 0.9em;
  padding: 1px 2px;
  margin: 0 0 1em auto;
  border: 1px inset #666;
  background-color: #eee;
  overflow: auto;
}


.personal-details label {
    font-size: 15px;
    text-transform: capitalize;
    margin-bottom: 8px;
    color: #000;
    display: block;
    font-weight: 400;
    margin-right: 4%;
}
.form-box {
  width: 20px;
  height: 20px;
  border-radius: 0px;
}
.activities {
  display: flex;
  overflow: auto;
} 
@media (max-width: 576px) {
  .activities {
    display: block;
    margin-left: 0px;
  }
  .head-c {
    width: 300px;
  }
}
@media (max-width: 320px){
  .head-c {
    width: 262px;
  }
}
.activities span{
  display:flex; 
  margin-left: 20px;
}
.block-input input {
  width: 40px!important;
}
.btn-harry
{
  padding: 8px 20px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  margin-bottom: 60px;
  background: #50AFE4;
  color: #fff;
  margin-top: 20px;
}
#checkout input[type="text"]
{
  width: 100%!important;
  margin-bottom: 0px!important
}
#checkout h2{
    padding: 60px;
    text-transform: uppercase;
    font-weight: bold;
}
table.timetable_sub {
    width:100%;
    margin:0 auto;
}
.timetable_sub thead {
    background: #004284;
}
.timetable_sub th {
    background: #0099E5;
    color: #fff !important;
    text-transform: capitalize;
    font-size: 13px;
    border-right: 2px solid #fff;
}
.timetable_sub th, .timetable_sub td {
    text-align: left;
    padding: 7px;
    font-size: 14px;
    color: #212121;
}
td.invert-image img {
    width:100px;
    margin: 0 auto;
}
         /* #form
        {
            height: auto;
            width: 100%;
            background: none;
        } 
        #form h2
        {
            color: #000

        }
      .form i
        {
            font-size: 10px;
            font-style: normal;
        }
           .academicrecord label
        {
            font-size: 11px!important

        }
        .post-ad-form {
            padding: 40px;
            padding-bottom: 100px
        }
        .post-ad-form form label {
            font-size: 14px;
            text-transform: capitalize;
            margin-bottom: 8px;
            color: #000;
            margin-top: 10px;
            display: block;
            font-weight: 400;
            float: left;
            width: 16%;
            text-align: right;
            margin-right: 4%;
        }
        .post-ad-form form label span {
            color:red;
        }
        .post-ad-form input[type="text"] {
            padding: 5px 10px 5px 10px;
            width: 45%;
            margin-bottom: 25px;
            outline: none;
            color: #555;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -o-transition: 0.5s all;
            -ms-transition: 0.5s all;
            float: left;
        }
        .post-ad-form textarea {
            height: 180px;
            outline: none;
            resize: none;
            padding: 10px 10px 10px 10px;
            width: 70%;
            margin-bottom: 25px;
            outline: none;
            color: #555;
        }
        .post-ad-form form select {
            background-color: #fff;
            padding: 5px;
            width: 30%;
            margin-bottom: 25px;
            position: relative;
            top: 5px
        }
        .post-ad-form input[type="submit"] {
            background: #0099e5;
            color: white;
            -webkit-appearance: none;
            border: none;
            text-transform: uppercase;
            position: relative;
            padding: 10px 50px;
            font-size: 20px;
            letter-spacing: 0.1em;
            font-weight: 300;
            -webkit-transition: all 333ms ease-in-out;
            -moz-transition: all 333ms ease-in-out;
            -o-transition: all 333ms ease-in-out;
            -ms-transition: all 333ms ease-in-out;
            transition: all 333ms ease-in-out;
            margin-top: 20px;
            float: right;
        }

        legend
        {
            font-weight: bold;
            color: #333;
        }

        img
        {
            max-width: 100%;
        }

        pre
        {
            width: 95%;
            height: 8em;
            font-family: monospace;
            font-size: 0.9em;
            padding: 1px 2px;
            margin: 0 0 1em auto;
            border: 1px inset #666;
            background-color: #eee;
            overflow: auto;
        }


        .personal-details label {
            font-size: 15px;
            text-transform: capitalize;
            margin-bottom: 8px;
            color: #000;
            margin-top: 10px;
            display: block;
            font-weight: 400;
            float: left;
            width: 16%;
            text-align: right;
            margin-right: 4%;
        }
        .btn-harry
        {
            padding: 8px 20px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            background: #50AFE4;
            color: #fff;
            margin-top: 20px;
        }
        #checkout input[type="text"]
        {
            width: 100%!important;
            margin-bottom: 0px!important
        }
        #checkout h2{
            padding: 60px;
            text-transform: uppercase;
            font-weight: bold;
        }
        table.timetable_sub {
            width:100%;
            margin:0 auto;
        }
        .timetable_sub thead {
            background: #004284;
        }
        .timetable_sub th {
            background: #0099E5;
            color: #fff !important;
            text-transform: capitalize;
            font-size: 13px;
            border-right: 2px solid #fff;
        }
        .timetable_sub th, .timetable_sub td {
            text-align: center;
            padding: 7px;
            font-size: 14px;
            color: #212121;
        }
        td.invert-image img {
            width:100px;
            margin: 0 auto;
        } */
        /*Form*/
    </style>
    @endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Admission Form | Show</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/admissionform')}}">Admission Form</a></li>
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   

    <!-- <section class="content"> -->
    <section id="form" class="img-fluid">
    <div class="form">

<div class="submit-ad main-grid-border">
  <div class="container bg-white my-4 p-0">
    <h2 class="text-center pt-5 pb-2" style="color: #0099E5;">Details from the form:</h2>
    <div class="wen"></div>
    <form method="post" action="{{route('frontend.admissionform_store')}}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="post-ad-form">
      <div class="personal-details">
    <div class="form">
              <h5 class="head-a">General Information</h5>
                <label class="w-100">Name of the Student<i>(In Block Letter)</i><span>*</span></label>
                 <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <label>First Name<span>*</span></label>
                <input type="text" class="first_name" name="first_name" value="{{ucfirst($admission->first_name)}}" placeholder="">
                <div class="clearfix"></div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label>Middle Name</label>
                <input type="text" class="middle_name" name="middle_name" value="{{$admission->middle_name}}" placeholder="">
                <div class="clearfix"></div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <label>Last Name<span>*</span></label>
                <input type="text" class="last_name" name="last_name" value="{{ucfirst($admission->last_name)}}" placeholder="">
                <div class="clearfix"></div>
                
                </div>
                 </div>
                 <!-- <div class="block-input">
                 <div class="block-letter"> -->
                <div class="clearfix"></div>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-12">
                    <label>Date of Birth : B.S</label>
                <input type="text" class="name" name="dob_bs" value="{{$admission->dob_bs}}" placeholder="dd/mm/yyyy">
                <!-- <input type="text" class="name" name="dob_bs" placeholder=""> -->

                <!-- <input type="text" class="name ml-3" name="dob_bs" placeholder="">
                <input type="text" class="name" name="dob_bs" placeholder=""> -->

                <!-- <input type="text" class="name ml-3" name="dob_bs" placeholder=""> -->
                <!-- <input type="text" class="name" name="dob_bs" placeholder="">
                <input type="text" class="name" name="dob_bs" placeholder="">
                <input type="text" class="name" name="dob_bs" placeholder=""> -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12">
                    <label>A.D</label>
                <input type="text" class="name" name="dob_ad" value="{{$admission->dob_ad}}" placeholder="dd/mm/yyyy">
                <!-- <input type="text" class="name" name="dob_ad" placeholder=""> -->

                <!-- <input type="text" class="name ml-3" name="dob_ad" placeholder=""> -->
                <!-- <input type="text" class="name" name="dob_ad" placeholder=""> -->

                <!-- <input type="text" class="name ml-3" name="dob_ad" placeholder=""> -->
                <!-- <input type="text" class="name" name="dob_ad" placeholder="">
                <input type="text" class="name" name="dob_ad" placeholder="">
                <input type="text" class="name" name="dob_ad" placeholder=""> -->
                  </div>
                </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Gender<span>*</span></label>
                <input type="text" class="gender" name="gender" value="{{$admission->gender}}" placeholder="">
                <div class="clearfix"></div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                                    <label>Nationality<span>*</span></label>
                <input type="text" class="nationality" name="nationality" value="{{$admission->nationality}}" placeholder="">
                <div class="clearfix"></div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                                    <label>Religion<span>*</span></label>
                <input type="text" class="religion" name="religion" value="{{$admission->religion}}" placeholder="">
                <div class="clearfix"></div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <label>Blood Group<span>*</span></label>
                <input type="text" class="religion" name="blood_group" value="{{$admission->blood_group}}" placeholder="">
                <div class="clearfix"></div>
                  </div>
                </div>

                <label>Father's/Mother's Name<span>*</span></label>
                <input type="text" class="name" name="parent_name" value="{{$admission->parent_name}}" placeholder="">
                <div class="clearfix"></div>
                <label>Present Address<span>*</span></label>
                <input type="text" class="name" name="address" value="{{$admission->address}}" placeholder="">
                <label>Contact No.<span>*</span></label>
                <div class="row" >
                  <div class="col-md-4" >
                    <input type="text" class="Home" name="home_no" value="{{$admission->home_no}}" placeholder="Home">
                  </div>
                  <div class="col-md-4" >
                    <input type="text" class="mobile" name="mobile_no" value="{{$admission->mobile_no}}" placeholder="Father">
                  </div>
                  <div class="col-md-4" >
                    <input type="text" class="office" name="office_no" value="{{$admission->office_no}}" placeholder="Mother">
                  </div>
                </div>

               <div class="my-4">
                  <h5 class="head-b">Academics</h5>
                    <label>Admission Seeking For(Grade/Stream):<span>*</span></label>
                    <input type="text" class="Qualification" name="admission_seeking_level" value="{{$admission->admission_seeking_level}}" placeholder="">
                    <label>Admission Seeking As(Day/Boarder):<span>*</span></label>
                    <input type="text" class="Qualification" name="admission_seeking_as" value="{{$admission->admission_seeking_as}}" placeholder="">
                    <label>Bus Stop(if necessary):<span>*</span></label>
                    <input type="text" class="Qualification" name="bus_stop" value="{{$admission->bus_stop}}" placeholder="">
                    <label>Previous School's Name and Adress:<span>*</span></label>
                    <input type="text" class="Qualification" name="school" value="{{$admission->school}}" placeholder="">
                    <label>Name of the Board(in any other than Nepal Board):<span>*</span></label>
                    <input type="text" class="Qualification" name="board_1" value="{{$admission->board_1}}" placeholder="">
                    <label>Reason(s) for leaving previous school:<span>*</span></label>
                    <input type="text" class="Qualification" name="reason" value="{{$admission->reason}}" placeholder="">
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
                              <td><input type="text" class="Qualification" name="full_marks_1" value="{{$admission->full_marks_1}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="obtained_marks_1" value="{{$admission->obtained_marks_1}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="remarks_1" value="{{$admission->remarks_1}}" placeholder=""></td>
                            </tr>
                            <tr class="rem1">
                              <td>Compulsory Math</td>
                              <td><input type="text" class="Qualification" name="full_marks_2" value="{{$admission->full_marks_2}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="obtained_marks_2" value="{{$admission->obtained_marks_2}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="remarks_2" value="{{$admission->remarks_2}}" placeholder=""></td>
                            </tr>
                            <tr class="rem1">
                              <td>Science</td>
                              <td><input type="text" class="Qualification" name="full_marks_3" value="{{$admission->full_marks_3}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="obtained_marks_3" value="{{$admission->obtained_marks_3}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="remarks_3" value="{{$admission->office_no}}" placeholder=""></td>
                            </tr>
                            <tr class="rem1">
                              <td>Nepali</td>
                              <td><input type="text" class="Qualification" name="full_marks_4" value="{{$admission->full_marks_4}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="obtained_marks_4" value="{{$admission->obtained_marks_4}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="remarks_4" value="{{$admission->office_no}}" placeholder=""></td>
                            </tr>
                            <tr class="rem1">
                              <td>Total Mark with Percentage</td>
                              <td><input type="text" class="Qualification" name="total_marks" value="{{$admission->total_marks}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="total_obtained_marks" value="{{$admission->total_obtained_marks}}" placeholder=""></td>
                              <td><input type="text" class="Qualification" name="percent" value="{{$admission->percent}}" placeholder=""></td>
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

                <span><input type="checkbox" name="extra_curricular" value="{{$admission->extra_curricular}}" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" value="{{$admission->extra_curricular}}" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" value="{{$admission->extra_curricular}}" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" value="{{$admission->extra_curricular}}" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" value="{{$admission->extra_curricular}}" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" value="{{$admission->extra_curricular}}" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" value="{{$admission->extra_curricular}}" class="form-box">
                <label for=""> Football</label></span>
                 <span><input type="checkbox" name="extra_curricular" value="{{$admission->extra_curricular}}" class="form-box">
                <label for=""> Football</label></span>
                </div>
              </div>
             </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

       <!--  <section id="form" class="img-fluid" >
            <div class="form" >
                <h2 class="text-center pt-5" >Form</h2>
                <hr>
                <div class="submit-ad main-grid-border">
                    <div class="container">
                        <form method="post" action="{{route('frontend.admissionform_store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="post-ad-form">
                                <div class="personal-details">
                                    <h3>Applicant Details :</h3>
                                    <label>Your Full Name <i>(In Block Letter)</i><span>*</span></label>
                                    <input type="text" class="name" name="full_name" value="{{ucfirst($admission->full_name)}}" placeholder=""disabled>
                                    <div class="clearfix"></div>
                                    <label>Student's Email Address<span>*</span></label>
                                    <input type="email" class="email" name="email" value="{{$admission->email}}" placeholder="" disabled>
                                    <div class="clearfix"></div>
                                    <label>Gender<span>*</span></label>
                                    <input type="radio" name="gender" value="Male" placeholder="" @if(ucfirst($admission->gender)=="Male") checked @endif disabled>Male
                                    <input type="radio" name="gender" value="Female" placeholder="" @if(ucfirst($admission->gender)=="Female") checked @endif disabled>Female
                                    <div class="clearfix"></div>
                                    <label>Date of Birth<span>*</span></label>
                                    <input type="text" id="datepicker1" class="form-control datepicker" name="dob" value="{{$admission->dob}}" placeholder=""disabled>
                                    <div class="clearfix"></div>
                                    <label>Nationality<span>*</span></label>
                                    <input type="text" class="nationality" name="nationality" value="{{ucfirst($admission->nationality)}}" placeholder=""disabled>
                                    <div class="clearfix"></div>
                                    <label>Religion<span>*</span></label>
                                    <input type="text" class="religion" name="religion" value="{{ucfirst($admission->religion)}}" placeholder=""disabled>
                                    <div class="clearfix"></div>
                                    <label>Student's Mailing Address<span>*</span></label>
                                    <div class="row" >
                                        <div class="col-md-4" >
                                            <input type="text" class="province" name="province" value="{{$admission->province}}" placeholder="Province"disabled>
                                        </div>
                                        <div class="col-md-4" >
                                            <input type="text" class="zone" name="zone" value="{{ucfirst($admission->zone)}}" placeholder="zone"disabled>
                                        </div>
                                        <div class="col-md-4" >
                                            <input type="text" class="district" name="district" value="{{ucfirst($admission->district)}}" placeholder="district"disabled>
                                        </div>
                                    </div>
                                    <label>Village Municipality/Municipality/Metro<span>*</span></label>
                                    <div class="row" >
                                        <div class="col-md-4" >
                                            <input type="text" class="municipality" name="municipality" value="{{ucfirst($admission->municipality)}}" placeholder="Village Municipality/Municipality/Metro"disabled>
                                        </div>
                                        <div class="col-md-4" >
                                            <input type="text" class="ward" name="ward" value="{{$admission->ward}}" placeholder="ward"disabled>
                                        </div>
                                        <div class="col-md-4" >
                                            <input type="text" class="village" name="village" value="{{ucfirst($admission->village)}}" placeholder="Village/Tole"disabled>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <label>Father's/Mother's Name<span>*</span></label>
                                    <input type="text" class="name" name="parent_name" value="{{ucfirst($admission->parent_name)}}" placeholder=""disabled>
                                    <div class="clearfix"></div>
                                    <label>Qualification<span>*</span></label>
                                    <input type="text" class="Qualification" name="qualification" value="{{ucfirst($admission->qualification)}}" placeholder=""disabled>
                                    <div class="clearfix"></div>
                                    <label>Contact No.<span>*</span></label>
                                    <div class="row" >
                                        <div class="col-md-4" >
                                            <input type="text" class="Home" name="home_no" value="{{$admission->home_no}}" placeholder="Home"disabled>
                                        </div>
                                        <div class="col-md-4" >
                                            <input type="text" class="mobile" name="mobile_no" value="{{$admission->mobile_no}}" placeholder="Mobile No."disabled>
                                        </div>
                                        <div class="col-md-4" >
                                            <input type="text" class="office"  name="office_no" value="{{$admission->office_no}}" placeholder="office"disabled>
                                        </div>
                                    </div>
                                    <h3>Academic Record :</h3>
                                    <div class="row" >
                                        <div class="col-md-6 academicrecord" >
                                            <label>AFU Entrance Symbol No:<span>*</span></label>
                                            <input type="text" class="Qualification" name="afu_symbol_no" value="{{$admission->afu_symbol_no}}" placeholder=""disabled>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-6 academicrecord" >
                                            <label>Submission ID No:<span>*</span></label>
                                            <input type="text" class="Qualification" name="submission_no" value="{{$admission->submission_no}}" placeholder=""disabled>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-6 academicrecord" >
                                            <label>AFU Entrance Score:<span>*</span></label>
                                            <input type="text" class="Qualification" name="afu_entrance_score" value="{{$admission->afu_entrance_score}}" placeholder=""disabled>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-6 academicrecord" >
                                            <label>Merit No:<span>*</span></label>
                                            <input type="text" class="Qualification" name="merit_no" value="{{$admission->merit_no}}" placeholder=""disabled>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-6 academicrecord" >
                                            <label>Admission Seeking For Level<span>*</span></label>
                                            <input type="text" class="Qualification" name="admission_seeking_level" value="{{ucfirst($admission->admission_seeking_level)}}" placeholder=""disabled>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-6 academicrecord" >
                                            <label>Semester<span>*</span></label>
                                            <input type="text" class="Qualification" name="semester" value="{{ucfirst($admission->semester)}}" placeholder=""disabled>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="row" >
                                        <div class="col-md-6 academicrecord" >
                                            <label>District<span>*</span></label>
                                            <input type="text" class="Qualification" name="district" value="{{ucfirst($admission->district)}}" placeholder=""disabled>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-6 academicrecord" >
                                            <label>School<span>*</span></label>
                                            <input type="text" class="Qualification" name="school" value="{{ucfirst($admission->school)}}" placeholder=""disabled>
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
                                                            <td><input type="text" class="Qualification" name="level_1" value="{{$admission->level_1}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="board_1" value="{{$admission->board_1}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="institution_details_1" value="{{$admission->institution_details_1}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="passed_year_1" value="{{$admission->passed_year_1}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="percent_grade_1" value="{{$admission->percent_grade_1}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="remarks_1" value="{{ucfirst($admission->remarks_1 ?? null)}}" placeholder=""disabled></td>
                                                        </tr>
                                                        <tr class="rem1">
                                                            <td><input type="text" class="Qualification" name="level_2" value="{{$admission->level_2 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="board_2" value="{{$admission->board_2 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="institution_details_2" value="{{$admission->institution_details_2 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="passed_year_2" value="{{$admission->passed_year_2 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="percent_grade_2" value="{{$admission->percent_grade_2 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="remarks_2" value="{{$admission->remarks_2 ?? null}}" placeholder=""disabled></td>
                                                        </tr>
                                                        <tr class="rem1">
                                                            <td><input type="text" class="Qualification" name="level_3" value="{{$admission->level_3 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="board_3" value="{{$admission->board_3 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="institution_details_3" value="{{$admission->institution_details_3 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="passed_year_3" value="{{$admission->passed_year_3 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="percent_grade_3" value="{{$admission->percent_grade_3 ?? null}}" placeholder=""disabled></td>
                                                            <td><input type="text" class="Qualification" name="remarks_3" value="{{$admission->remarks_3 ?? null}}" placeholder=""disabled></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>-->
    </section> 
    <!-- {{--</div>--}}
@endsection -->
