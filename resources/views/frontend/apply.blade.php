@extends('frontend.components.layouts')
@section('content')
<div class="container">
        <div class="row">
        <style>
                input[type=number]::-webkit-inner-spin-button,
                input[type=number]::-webkit-outer-spin-button {
                    -webkit-appearance: none;
                }
                #stform input[type=email],
                #stform input,
                #stform select,
                #stform textarea {
                    padding: 8px 15px 8px 15px;
                    border: 1px solid #000052;
                    margin-top: 2px;
                    width: 100%;
                    border-radius: 10px;
                    box-sizing: border-box;
                    /* font-family: montserrat; */
                    color: #2C3E50;
                    background-color: #ECEFF1;
                    font-size: 15px !important;
                }
                input,
                select {
                    border: 1px solid #000052 !important;
                    color: #2C3E50;
                    background-color: #ECEFF1;
                }
                .form-control:focus {
                    color: #495057;
                    background-color: #fff;
                    border-color: #000052;
                    outline: 0;
                    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 25%);
                }
                .form-control:focus {
                    border-color: #dc3545;
                    box-shadow: 0 0 0 0.2rem rgb(220 53 69 / 25%);
                }
                .form-group label {
                    font-size: 14px;
                    margin-bottom: 0;
                    position: unset;
                }
                input[type=email] {
                    width: 100%;
                    position: relative;
                    border: 1px solid #000052;
                    padding: 6px;
                    border-radius: 5px;
                }
                label {
                    font-size: 14px;
                }
                .student_info_btn {
                    width: 38%;
                    background: #122f50;
                    font-weight: bold;
                    color: white;
                    border-radius: 10px;
                    border: 0 none;
                    cursor: pointer;
                    padding: 10px 5px;
                    margin: 10px 0px 10px 15px;
                    float: right;
                    font-size: 18px;
                }
                .subscribe-content button{
                    padding: 7px 5px 6px 5px;
                }
                .contact-area input[type=email]{
                    border-radius: 5px;
                }
            </style>
        <div class="col-12 m-auto m-2">
        <div class="card p-2">
        <form id="stform" action="{{route('enroll_course')}}" method="post">
        <div class="row">
        <div class="col-md-12">
        <label for="course_name">COURSE NAME:*</label>
        <select name="course_name" id="course_name" class="form-control" value>
        <option value>{{$course->course_name}}</option>
        </select>
        <span style="color:red;" id="course_name_error"></span>
        </div>
        </div>
        <h4 class="text-center" style="color: #122f50;font-size: 25px;font-weight: bold;margin-top:20px;">Personal Information</h4>
        {{-- <div class="row">
        <div class="col-md-12 mb-3">
        <label for="full_name">FULL NAME:*</label>
        <input type="text" value name="full_name" class="form-control" id="full_name" placeholder="FULL NAME">
        <span style="color:red;" id="full_name_error"></span>
        </div>
        </div> --}}
        <div class="row mb-3">
        <div class="col-md-6">
        <label for="nameE">Name (English): *</label>
        <input class="form-control" value name="nameE" id="nameE" placeholder="Enter Your Full Name" type="Text" ">
        <span style="color:red;" id="nameE"></span>
        </div>
        <div class="col-md-6">
        <label for="nameB">Name (Bangla): *</label>
        <input type="email" name="nameB" value class="form-control" id="nameB" placeholder="আপনার পুরো নাম লিখুন">
        <span style="color:red;" id="nameB"></span>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label for="fatherNameE">Father Name (English): *</label>
        <input class="form-control" value name="fatherNameE" id="fatherNameE" placeholder="Enter Your Father Full Name" type="Text" ">
        <span style="color:red;" id="fatherNameE"></span>
        </div>
        <div class="col-md-6">
        <label for="fatherNameB">Father Name (Bangla): *</label>
        <input type="text" name="fatherNameB" value class="form-control" id="fatherNameB" placeholder="আপনার বাবার পুরো নাম লিখুন">
        <span style="color:red;" id="fatherNameB"></span>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label for="MotherNameE">Mother Name (English): *</label>
        <input class="form-control" value name="MotherNameE" id="MotherNameE" placeholder="Enter Your Mother Full Name" type="Text" ">
        <span style="color:red;" id="MotherNameE"></span>
        </div>
        <div class="col-md-6">
        <label for="MotherNameB">Mother Name (Bangla): *</label>
        <input type="text" name="MotherNameB" value class="form-control" id="MotherNameB" placeholder="আপনার মায়ের পুরো নাম লিখুন">
        <span style="color:red;" id="MotherNameB"></span>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label for="phone">MOBILE NUMBER: *</label>
        <input class="form-control" value name="phone" id="phone" placeholder="EX: 01xxxxxxxxx" type="number" minlength="11" maxlength="11" pattern="[0-9]{11}">
        <span style="color:red;" id="phone_error"></span>
        </div>
        <div class="col-md-6">
            <label for="Gphone">Gurdian MOBILE NUMBER: *</label>
            <input class="form-control" value name="Gphone" id="Gphone" placeholder="EX: 01xxxxxxxxx" type="number" minlength="11" maxlength="11" pattern="[0-9]{11}">
            <span style="color:red;" id="phone_error"></span>
            </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label for="email">Email Address: *</label>
        <input type="email" name="email" value class="form-control" id="email" placeholder="name@example.com">
        <span style="color:red;" id="email_error"></span>
        </div>
        <div class="col-md-6">
            <label for="shift">Shift: *</label>
            <select name="shift" class="form-control" id="shift">
            <option disabled selected value>Select
            Shift
            </option>
            <option value="1">1st Shift</option>
            <option value="2">2nd Shift</option>
            </select>
            <span style="color:red;" id="gender_error"></span>
            </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label for="religion">RELIGION:*</label>
        <select name="religion" id="religion" value class="form-control">
        <option disabled selected value>
        ---Select Religion---
        </option>
        <option value="Islam">Islam</option>
        <option value="Hinduism">Hinduism</option>
        <option value="Buddhism">Buddhism</option>
        <option value="Christianity">Christianity
        </option>
        <option value="Others">Other</option>
        </select>
        <span style="color:red;" id="religion_error"></span>
        </div>
        <div class="col-md-6">
        <label for="gender">Gender: *</label>
        <select name="gender" class="form-control" id="gender">
        <option disabled selected value>Select
        Gender
        </option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
        </select>
        <span style="color:red;" id="gender_error"></span>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label for="birthday">Date of Birth: *</label>
        <input name="birthday" value class="form-control" id="birthday" placeholder="Date of Birth" type="date" />
        <span style="color:red;" id="birthday_error"></span>
        </div>
        <div class="col-md-6">
        <label for="national_id">National ID / Birth Cirtificate *</label>
        <input value name="national_id" class="form-control" id="national_id" placeholder="National ID or Birth Cirtificate" type="number" />
        <span style="color:red;" id="national_id_error"></span>
        </div>
        </div>

        <div class="row mb-3" style="margin-top:50px;">
        <div class="col-12">
        <label for="employment_status">Employment Status:*</label>
        <select id="employment_status" onchange="if (!window.__cfRLUnblockHandlers) return false; employment_status_show()" class="form-control" name="employment_status" id="employment_status" data-cf-modified-109e00ff9346427207673ffd->
        <option disabled selected value>Select Employment Status </option>
        <option value="Student">Student</option>
        <option value="Freelancer">Freelancer</option>
        <option value="Businessman">Businessman
        </option>
        <option value="Entrepreneur">Entrepreneur
        </option>
        <option value="Job_Seeker">Job Seeker</option>
        <option value="Job_Holder">Job Holder</option>
        </select>
        <span style="color:red;" id="employment_status_error"></span>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-12">
        <label for="present_address">Address: *</label>
        <input class="form-control" value name="present_address" class="form-control" id="present_address" placeholder="Address" type="text" />
        <span style="color:red;" id="present_address_error"></span>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label for="present_city">City: *</label>
        <input name="present_city" value class="form-control" id="present_city" placeholder="City" type="text" />
        <span style="color:red;" id="present_city_error"></span>
        </div>
        <div class="col-md-6">
        <label for="present_postal_code">Postal Code:
        *</label>
        <input class="form-control" value name="present_postal_code" id="present_postal_code" placeholder="Postal Code" type="number" maxlength="4" minlength="4" />
        <span style="color:red;" id="present_postal_code_error"></span>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-4">
        <label for="present_division">Division: *</label>
        <select value class="form-control" name="present_division" id="present_division">
        <option disabled selected value>Select Division </option>
        <option value="Barisal">Barisal</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Khulna">Khulna</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Mymensingh">Mymensingh</option>
        </select>
        <span style="color:red;" id="present_division_error"></span>
        </div>
        <div class="col-md-4">
        <label for="present_per_district">District:
        *</label>
        <input type="text" id="present_per_district" value class="form-control" name="present_per_district" placeholder="District" />
        <span style="color:red;" id="present_per_district_error"></span>
        </div>
        <div class="col-md-4">
        <label for="present_sub_district">Sub-District:
        </label>
        <input type="text" class="form-control" name="present_sub_district" id="present_sub_district" value placeholder="Sub-District" />
        <span style="color:red;" id="present_sub_district_error"></span>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label for="lavel_of_education">Level of Education:
        *</label>
        <select id="lavel_of_education" class="form-control" name="lavel_of_education">
        <option disabled selected value>Select
        Level of Education</option>
        <option value="SSC/Dakhil/Equivalent">
        Above PSC</option>
        <option value="SSC/Dakhil/Equivalent">
        SSC/Dakhil/Equivalent</option>
        <option value="HSC/Alim/Equivalent">
        HSC/Alim/Equivalent</option>
        <option value="Diploma">Diploma</option>
        <option value="Bachelor 1st Year">Bachelor's
        1st Year</option>
        <option value="Bachelor 2nd Year">Bachelor's
        2nd Year</option>
        <option value="Bachelor 3rd Year">Bachelor's
        3rd Year</option>
        <option value="Bachelor Final Year">Bachelor's
        Final Year</option>
        <option value="Bachelor/Honours/Equivalent">
        Bachelor's/Honours/Equivalent
        </option>
        <option value="Master Degree">Master's Degree
        </option>
        <option value="PhD">PhD</option>
        </select>
        <span style="color:red;" id="lavel_of_education_error"></span>
        </div>
        <div class="col-md-6">
        <label for="institute_name">Institute/Borad: *</label>
        <input name="institute_name" id="institute_name" id="institute_name" placeholder="Write Institute Name" value class="form-control" type="text" />
        <span style="color:red;" id="institute_name_error"></span>
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label class="subject">Subject: *</label>
        <input name="subject" class="form-control" id="subject" value placeholder="Subject" type="text" />
        <span style="color:red;" id="subject_error"></span>
        </div>
        <div class="col-md-6">
        <label class="passing_year">Passing Year: *</label>
        <input name="passing_year" value class="form-control" id="passing_year" placeholder="Year" minlength="4" type="number" />
        <span style="color:red;" id="passing_year_error"></span>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6">
        <label for="photo"> Upload Your Photo: (Optional) </label>
        <input class="form-control" name="photo" type="file" id="photo">
        <span style="color:red;" id="photo_error"></span>
        </div>
        </div>

        <div class="row mb-3">
                <div class="col-md-12 text-center"><button type="submit" id="seip_student_form_submit" class="student_info_btn text-cencter">Submit</button></div>
        </div>
        </form>
        </div>
        </div>
        </div>
    </div>


        

@endsection