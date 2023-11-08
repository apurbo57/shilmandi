@extends('frontend.components.layouts')
@section('content')


<div class="home_bg_X" style="overflow: hidden; background: url(images/cover_image_for_homepage.webp); background-repeat: no-repeat; background-size: 100% auto; background-position: center; padding: 20px 0 80px 0; position: relative;">
    <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div id="owl-demo" class="owl-carousel owl-theme ">
                @foreach ($sliders as $slider)
                <div class="item"><img class="rounded" src="{{ asset('uploads/slider/'. $slider->image) }}"  style="display: block; width: 100%; height: 300px;" alt="The Last of us"></div>
                @endforeach               
              </div>
          </div>
          <div class="col-md-4">
              <style>
                  .two-profile-wrapper {
                        width: 100%;
                        display: grid;
                        grid-template-columns: 1fr;
                        row-gap: 20px;
                        box-sizing: border-box;
                    }
              .profile-wrapper {
                    width: 100%;
                    display: grid;
                    grid-template-columns: 1fr 2.5fr;
                    column-gap: 15px;
                    align-items: center;
                    background: #F5F4F4;
                    overflow: hidden;
                    border-radius: 14px;
                    box-shadow: 1px 1px 7px -6px #000;
                }
                .profile-image {
                    width: 100%;
                    overflow: hidden;
                }
                .profile-image> img {
                    width: 100%;
                    margin-bottom: -11px;
                }
                .profile-details {
                    width: 100%;
                    overflow: hidden;
                    box-sizing: border-box;
                    padding: 7px;
                }
                span.designation {
                    display: block;
                    font-size: 22px;
                    color: #FF5722;
                    font-weight: bold;
                }
                span.profile-name {
                    font-size: 16px;
                }
                span.read-profile-about> a {
                    display: block;
                    text-decoration: none;
                    color: blue;
                }
              </style>
            <div class="two-profile-wrapper">
							
                    <div class="profile-wrapper">
                        <div class="profile-image">
                        <img src="{{asset('images/kuddos.jpg')}}">
                        </div>
                        <div class="profile-details">
                        <span class="designation">Chairman</span>
                        <span class="profile-name">Abdul Kader</span>
                        <span class="read-profile-about"><a href="#">Read More...</a></span>
                        </div>
                        </div>
                             <div class="profile-wrapper">
                            <div class="profile-image">
                            <img src="{{asset('images/kader.jpg')}}">
                            </div>
                            <div class="profile-details">
                            <span class="designation">Principle</span>
                            <span class="profile-name">Kuddos Ahmed</span>
                            <span class="read-profile-about"><a href="#">Read More...</a></span>
                            </div>
                            </div>
                    </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
         
         $("#owl-demo").owlCarousel({
             slideSpeed : 100,
             paginationSpeed : 1000,
             autoPlay: true,
             items : 1, 
             itemsDesktop : false,
             itemsDesktopSmall : false,
             itemsTablet: false,
             itemsMobile : false
        
         });
        
        });
        </script>
        <div class="container ">
                <div class="row">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <strong><i class="fa fa-warning"></i> News!</strong> <marquee><p style="font-family: Impact, siyamrupali; font-size: 18pt; padding:5px;">Shilmandi Training Institiute Norshingdi শিলমান্দী যুব উন্নয়ন প্রশিক্ষন কেন্দ্র , নরসিংদি। সকল ধরনের কোর্স এখানে করানো হয়। Shilmandi Training Institiute Norshingdi</p></marquee>
                    </div>
                </div>
            </div>
</div>

<div class="container" id="pencilbox_home_slider_down_counter">
<div class="row text-center " style="padding: 0 91px; margin-top: -50px;">
<div class="col-xl-3 col-lg-3 col-md-12 per-call" style="transition: margin-top 1s; margin-bottom: 10px;">
<div class="card per-card" style="background: #F5F4F4; height: 120px; border-radius: 10px; box-shadow: 0px 3px 6px #888888;">
<div class="card-header" style="background: none; border: 0; padding-bottom: 0; padding-top: 15px;">

<p class="per-count"><span class="count_homepage">{{$count->batches}}</span>+</p>
</div>
<div class="card-body" style="padding: 0 25px; font-weight: bold; font-size: 20px;">
Batches
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-12 per-call" style="transition: margin-top 1s;margin-bottom: 10px;">
<div class="card per-card" style="background: #F5F4F4; height: 120px; border-radius: 10px; box-shadow: 0px 3px 6px #888888;">
<div class="card-header" style="background: none; border: 0; padding-bottom: 0; padding-top: 15px;">
<p class="per-count"><span class="count_homepage">{{$count->student}}</span>+</p>
</div>
<div class="card-body" style="padding: 0 25px; font-weight: bold; font-size: 20px;margin-bottom: 10px;">
Student
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-12 per-call" style="transition: margin-top 1s;margin-bottom: 10px;">
<div class="card per-card" style="background: #F5F4F4; height: 120px; border-radius: 10px; box-shadow: 0px 3px 6px #888888;">
<div class="card-header" style="background: none; border: 0; padding-bottom: 0; padding-top: 15px;">
<p class="per-count"><span class="count_homepage">{{$count->jobplacement}}</span>+</p>
</div>
<div class="card-body" style="padding: 0 25px; font-weight: bold; font-size: 20px;">
Job Placement
</div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-12 per-call" style="transition: margin-top 1s;margin-bottom: 10px;">
<div class="card per-card" style="background: #F5F4F4; height: 120px; border-radius: 10px; box-shadow: 0px 3px 6px #888888;">
<div class="card-header" style="background: none; border: 0; padding-bottom: 0; padding-top: 15px;">
<p class="per-count"><span class="count_homepage">{{$count->trainer}}</span>+</p>
</div>
<div class="card-body" style="padding: 0 25px; font-weight: bold; font-size: 20px;">
Skilled Trainer
</div>
</div>
</div>
</div>
</div>

{{-- client area --}}
<style>

#clients {
    padding: 60px 0;
    
}
#clients .clients-wrap {
    border-top: 1px solid #d6eaff;
    border-left: 1px solid #d6eaff;
    margin-bottom: 30px;
}

#clients .client-logo {
    padding: 64px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    border-right: 1px solid #d6eaff;
    border-bottom: 1px solid #d6eaff;
    overflow: hidden;
    background: #fff;
    height: 160px;
}

#clients img {
    transition: all 0.4s ease-in-out;
}

</style>
<section id="clients" class="section-bg">

        <div class="container">
  
          <div class="section-header">
            <h2>Our CLients</h2>
          </div>
  
          <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
  
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460149/abof.png" class="img-fluid" alt="">
              </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460224/cropped-cropped-20170720-lucuLogo-squ2-e1500543540803.png" class="img-fluid" alt="">
              </div>
            </div>
          
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460269/104840a62d46c05d285762857fecb61a.png" class="img-fluid" alt="">
              </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460358/client-4.png" class="img-fluid" alt="">
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section>

    {{-- courses  --}}
       
    <style>
        .pb_course_page_container {
            background-color: #FCFCFC;
        }
        .all_courses_tab {
            padding: 70px 0;
        }
    
        .all_courses_tab ul.nav>li {
            flex-grow: 1;
        }
    
        .all_courses_tab ul.nav li.dropdown .dropdown_menu_wrapper .dropdown-menu {
            top: 97%;
            padding: 4px 5px;
        }
    
        .all_courses_tab ul.nav li.dropdown .dropdown_menu_wrapper .dropdown-menu>div {
            box-shadow: 0px 1px 5px 2px rgb(53 52 52 / 20%);
            width: 100%;
            /* margin: auto; */
        }
    
        .all_courses_tab ul.nav li.dropdown .dropdown_menu_wrapper .dropdown-menu>div>.dropdown-item:hover,
        .all_courses_tab ul.nav li.dropdown .dropdown_menu_wrapper .dropdown-menu>div>.dropdown-item.active,
        .all_courses_tab ul.nav li.dropdown .dropdown_menu_wrapper .dropdown-menu>div>.dropdown-item:active {
            color: #fff !important;
            background-color: #DB1E37 !important;
        }
    
        .all_courses_tab ul.nav li.dropdown a.nav-link.dropdown_button.dropdown_active~.dropdown_menu_wrapper .dropdown-menu {
            display: flex;
            justify-content: center;
        }
    
        .all_courses_tab .dropdown-menu .dropdown-item {
            width: 280px;
            white-space: unset;
            border-bottom: 1px solid rgba(149, 149, 149, 0.2);
        }
    
        .all_course_tab_content h3 {
            font-weight: 600;
            text-transform: uppercase;
        }
    
        .all_course_tab_content p {
            font-size: 14px;
            font-weight: 400;
            margin-left: 0;
        }
    
        .all_courses_tab ul.nav li a.nav-link {
            border-top: 1px solid rgba(149, 149, 149, 0.5);
            border-bottom: 1px solid rgba(149, 149, 149, 0.5);
            border-left: 1px solid rgba(149, 149, 149, 0.5);
            text-align: center;
            padding: 15px 0;
            color: #000 !important;
            background: linear-gradient(to bottom, #fff, #f8f8f8);
            font-size: 16px;
            font-weight: 500;
        }
    
        .all_courses_tab ul.nav li:last-child a.nav-link {
            border-right: 1px solid rgba(149, 149, 149, 0.5);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    
        .all_courses_tab ul.nav li:first-child a.nav-link {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }
    
        .all_courses_tab ul.nav li a.nav-link:hover,
        .all_courses_tab ul.nav li a.nav-link.active {
            background: #DB1E37;
            /* background: linear-gradient(to bottom, #DB1E37, #DB1E37); */
            color: #fff !important;
        }
    
        .all_courses_tab ul#tab_buttons li a.nav-link.dropdown_button i {
            margin-left: 10px;
            font-size: 14px;
            transform: rotate(0deg);
            transition: transform .2s ease-in-out;
        }
    
        .all_courses_tab ul#tab_buttons li a.nav-link.dropdown_button.dropdown_active i {
            transform: rotate(180deg);
            transition: transform .2s ease-in-out;
        }
    
        .wrapper .pb_single_course_box {
            border: 1px solid #A9A9A9;
            border-radius: 10px;
            margin-bottom: 30px;
        }
    
        .pb_single_course_col,
        .pb_single_course_col_old,
        .pb_single_course_col_ongoing,
        .pb_single_course_col_all,
        .pb_single_course_col_colla {
            display: none;
        }
    
        .wrapper .pb_single_course_box img {
            object-fit: contain;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    
        .wrapper .pb_single_course_box .pb_single_course_content {
            padding: 10px;
        }
    
        .wrapper .pb_single_course_box .pb_single_course_content .date_time span {
            font-size: 12px;
            color: #AEAEAE;
        }
    
        .wrapper .pb_single_course_box .pb_single_course_content h6 {
            font-weight: 700;
            padding-top: 12px;
            padding-bottom: 8px;
            height: 60px;
            display: flex;
            align-items: center;
        }
    
        .wrapper .pb_single_course_box .pb_single_course_content .pb_single_course_price {
            color: #DB1E37;
            font-size: 14px;
            font-weight: 700;
        }
    
        .wrapper .pb_single_course_box .pb_single_course_content .pb_single_course_apply_button {
            background-color: #DB1E37;
            padding: 6px 20px;
            color: #fff;
            font-size: 12px;
            border-radius: 6px;
            font-weight: 500;
        }
    
        .all_courses_tab #ViewMore,
        .all_courses_tab .ViewMore {
            display: inline-block;
            background-color: #DB1E37;
            color: #ffffff;
            padding: 5px 30px;
            border-radius: 5px;
        }
    
        .pb_course_page_container section.all_courses_tab .tab-content {
            border-bottom: 2px solid rgba(166, 166, 166, 0.5);
            padding-bottom: 70px;
        }
    
        /* ====== ongoing course section======== */
        .ongoing_course_box {
            border-bottom: 2px solid rgba(166, 166, 166, 0.5);
            padding-bottom: 70px;
        }
    
        .ongoing_course_wrapper {
            border: 1px solid hsl(0, 0%, 53%, 0.3);
            padding: 20px;
            background-color: #fff;
        }
    
        #ongoing_course_tab_item {
            border: 1px solid hsl(0, 0%, 53%, 0.3);
        }
    
        .ongoing_courses_tab_slider .slick-slider .slick-list {
            width: 100%;
        }
    
        .ongoing_courses_tab_slider .slick-slider {
            height: 308px;
        }
    
        .ongoing_courses_tab_slider .slick-slider .slide a {
            background-color: rgb(255, 255, 255);
            color: #000000 !important;
            /* display: block; */
            height: 70px;
            font-size: 16px;
            line-height: 1.3;
            font-weight: 600;
            display: flex;
            flex-direction: column;
        }
    
        .ongoing_courses_tab_slider .slick-slider .slide.slick-current a {
            color: #fff !important;
            background-color: #DB1E37;
        }
    
        .ongoing_courses_tab_slider .slick-slider .slide .ongoing_course_slider_img {
            display: none;
            z-index: 9;
        }
    
        .ongoing_course_slider_time {
            font-size: 10px;
            font-weight: 300;
        }
    
        /* ====== recent completed course section======== */
        .recent_completed_courses {
            padding-top: 70px;
            padding-bottom: 70px;
        }
    
        .recent_completed_courses_wrapper {
            border: 1px solid hsl(0, 0%, 53%, 0.3);
            padding: 15px 20px 20px 20px;
            background-color: #fff;
        }
    
        .r_c_single_course_img {
            width: 22%;
        }
    
        .r_c_single_course_img img {
            width: 100%;
            height: auto;
        }
    
        .r_c_single_course_content {
            width: 78%;
            background-color: #F3F3F3;
            padding: 5px 15px;
            margin-left: 5px;
        }
    
        .r_c_single_course_content .r_c_title {
            color: #000;
            font-weight: 600;
            line-height: 1.2;
            font-size: 16px;
        }
    
        .r_c_single_course_content .r_c_completing_time {
            font-size: 11px;
            color: #707070;
        }
    
        .recent_completed_courses_wrapper .r_c_courses {
            height: 67px;
            margin-top: 5px;
        }
        /* ======responsive======= */
        @media  screen and (max-width: 1199px) {
            .wrapper .pb_single_course_box .pb_single_course_content .pb_single_course_apply_button {
                padding: 6px 15px;
            }
        }
        @media  screen and (max-width: 992px) {
            .r_c_courses {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
    
            .r_c_single_course_img {
                width: 100%;
            }
    
            .r_c_single_course_content {
                width: 100%;
                margin: 0;
            }
    
            .recent_completed_courses_wrapper .slick-slide {
                height: 280px;
            }
            .all_courses_tab ul.nav li a.nav-link {
                padding-left:5px;
                padding-right:5px;
                border: 1px solid rgba(149, 149, 149, 0.5);
                border-radius: 10px;
            }
        }
    
        @media  screen and (max-width: 767px) {
            .recent_completed_courses_wrapper .slick-slide {
                height: 212px;
            }
    
            .ongoing_courses_tab_slider .slick-slider {
                height: 150px;
            }
    
            .ongoing_courses_tab_slider .slick-slider .slide a {
                font-size: 12px;
            }
    
            .r_c_single_course_content .r_c_title {
                font-size: 14px;
            }
        }
    
        @media  screen and (max-width: 480px) {
            .r_c_single_course_content .r_c_title {
                font-size: 12px;
            }
            .wrapper .pb_single_course_box .pb_single_course_content .pb_single_course_price{
                font-size: 13px;
            }
        }
        .course_info_hover{
            cursor: pointer;
            position: relative;
        }
        .course_info{
            display: none;
        }
        .course_info ul li span{
            margin-left: 5px;
        }
        span.course_info_hover:hover .course_info {
            display: block;
            position: absolute;
            width: 250px;
            background: #000;
            color: #fff;
            font-size: 14px;
            padding: 10px;
            z-index: 9;
            margin-left: -200px;
        }
    </style>
    <section class="all_courses_tab">
    <div class="container">
            <div class="section-header">
                    <h2>Courses</h2>
                  </div>
    <div class="row justify-content-center">
    <div class="col-12 col-md-7">
    <div class="all_course_tab_content">
    
    <p class="text-center">
    </p>
    </div>
    </div>
    </div>
    <div class="row">
    <div id="all_course_tabs" class="col-12">
    <div class="row justify-content-center">
    <div class="col-12 col-lg-10">
    
    <ul id="tab_buttons" class="nav" role="tablist">
    {{-- <li class="nav-item dropdown">
    <a class="nav-link dropdown_button" href="#all_courses" role="button"> <span>All Courses</span><i class="fas fa-chevron-down"></i>
    </a>
    <div class="dropdown_menu_wrapper">
    <div class="dropdown-menu" id="allcourse_dropdown_menu">
    <div class="filter-button-group">
    <a class="dropdown-item all_course_filter_btn" id="all_course_filter_all" href="javascript:void(0)">All Courses</a>
    <a class="dropdown-item all_course_filter_btn" id="15" href="javascript:void(0)">Design</a>
    <a class="dropdown-item all_course_filter_btn" id="16" href="javascript:void(0)">Front End Development</a>
    <a class="dropdown-item all_course_filter_btn" id="17" href="javascript:void(0)">IT Security</a>
    <a class="dropdown-item all_course_filter_btn" id="18" href="javascript:void(0)">Management</a>
    <a class="dropdown-item all_course_filter_btn" id="19" href="javascript:void(0)">Mobile Application Development</a>
    <a class="dropdown-item all_course_filter_btn" id="20" href="javascript:void(0)">Web Development</a>
    </div>
    </div>
    </div>
    </li> --}}
    <li class="nav-item"><a class="nav-link " href="#all_courses">All Course</a></li>
    <li class="nav-item"><a class="nav-link active" href="#upcoming_course">Upcoming Courses</a></li>
    <li class="nav-item"><a class="nav-link" href="#ongoing_course">Ongoing Courses</a></li>
    <li class="nav-item"><a class="nav-link" href="#old_course">RPL</a></li>
    </ul>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
    
    <div class="tab-content">
    <div id="all_courses"><br>
    
    <div class="wrapper">
    <div class="row" id="all_course_filter_">
    @foreach ($courses as $course)
        @if ($course->course_type == 1)
        <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
            <div class="pb_single_course_box">
            <a href="{{route('single-course',$course->id)}}">
            <img class="img-fluid" src="{{ asset('uploads/course/'. $course->image) }}" alt="Course_image">
            </a>
            <div class="pb_single_course_content">
            <div class="date_time d-flex justify-content-between">
            <span>Start Date:
                {{$course->ass_date}}</span>
            <span>Duration: 40hours</span>
            <span class="course_info_hover">
            <i class="fa fa-info-circle"></i>
            <div class="course_info">
            <div class="row">
            <div class="col-12">
            <ul>
            <li>
            <i class="fas fa-user"></i>
            <span>Trainer Name :</span>
            <a href="https://www.pencilbox.edu.bd/trainer-details/39/39">A.H.M Mohsin</a>
            </li>
            <li>
            <i class="fas fa-stopwatch"></i>
            <span>No. of Classes/ Sessions :</span> {{$course->classes}}
            </li>
            <li>
            <i class="fab fa-trello"></i>
            <span>Batch No : {{$course->batch_no}}</span>
            </li>
            <li>
            <i class="far fa-clock"></i>
            <span>Registration Deadline :</span> {{$course->reg_date}}
            </li>
            <li>
            <i class="fas fa-calendar-check"></i>
            <span>Class Schedule :</span>
            </li>
            <li>
            <div>Sat (07:30 PM-09:30 PM)</div>
            </li>
            <li>
            <div>Mon (07:30 PM-09:30 PM)</div>
            </li>
            <li>
            <div>Wed (07:30 PM-09:30 PM)</div>
            </li>
            </ul>
            </div>
            </div>
            </div>
            </span>
            </div>
            <a href="{{route('single-course',$course->id)}}">
            <h6>{{$course->course_name}}</h6>
            </a>
            <div class="d-flex justify-content-between align-items-center">
            <span class="pb_single_course_price">
            Course Fees :
            {{$course->course_price}}/- BDT</span>
            <a class="pb_single_course_apply_button" href="{{route('single-course',$course->id)}}">
            See Details
            </a>
            </div>
            </div>
            </div>
            </div>
        @endif
    @endforeach
    <div class="col-12">
    <div class="d-flex justify-content-center">
    <a class="ViewMore" href="{{route('courses')}}">View More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    {{-- all course end --}}
    {{-- upcoming_course start --}}
    
    <div id="upcoming_course" class="active"><br>
    
    <div class="wrapper">
    <div class="row">
            @foreach ($courses as $course)
            @if ($course->reg_date >= date('Y-m-d'))
            <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col">
                <div class="pb_single_course_box">
                <a href="{{route('single-course',$course->id)}}">
                <img class="img-fluid" src="{{ asset('uploads/course/'. $course->image) }}" alt="Course_image">
                </a>
                <div class="pb_single_course_content">
                <div class="date_time d-flex justify-content-between">
                <span>Start Date:
                    {{$course->ass_date}}</span>
                <span>Duration: 40hours</span>
                <span class="course_info_hover">
                <i class="fa fa-info-circle"></i>
                <div class="course_info">
                <div class="row">
                <div class="col-12">
                <ul>
                <li>
                <i class="fas fa-user"></i>
                <span>Trainer Name :</span>
                <a href="https://www.pencilbox.edu.bd/trainer-details/39/39">A.H.M Mohsin</a>
                </li>
                <li>
                <i class="fas fa-stopwatch"></i>
                <span>No. of Classes/ Sessions :</span> {{$course->classes}}
                </li>
                <li>
                <i class="fab fa-trello"></i>
                <span>Batch No : {{$course->batch_no}}</span>
                </li>
                <li>
                <i class="far fa-clock"></i>
                <span>Registration Deadline :</span> {{$course->reg_date}}
                </li>
                <li>
                <i class="fas fa-calendar-check"></i>
                <span>Class Schedule :</span>
                </li>
                <li>
                <div>Sat (07:30 PM-09:30 PM)</div>
                </li>
                <li>
                <div>Mon (07:30 PM-09:30 PM)</div>
                </li>
                <li>
                <div>Wed (07:30 PM-09:30 PM)</div>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </span>
                </div>
                <a href="{{route('single-course',$course->id)}}">
                <h6>{{$course->course_name}}</h6>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                <span class="pb_single_course_price">
                Course Fees :
                {{$course->course_price}}/- BDT</span>
                <a class="pb_single_course_apply_button" href="{{route('single-course',$course->id)}}">
                See Details
                </a>
                </div>
                </div>
                </div>
                </div>
            @endif
        @endforeach
    
    </div>
    </div>
    
    </div>
    {{-- upcoming course end --}}
    {{-- ongoing course --}}

    <div id="ongoing_course" class=""><br>
    
    <div class="wrapper">
    <div class="row">
            @foreach ($courses as $course)
            @if ($course->reg_date <= date('Y-m-d'))
            <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_ongoing">
                <div class="pb_single_course_box">
                <a href="{{route('single-course',$course->id)}}">
                <img class="img-fluid" src="{{ asset('uploads/course/'. $course->image) }}" alt="Course_image">
                </a>
                <div class="pb_single_course_content">
                <div class="date_time d-flex justify-content-between">
                <span>Start Date:
                    {{$course->ass_date}}</span>
                <span>Duration: 40hours</span>
                <span class="course_info_hover">
                <i class="fa fa-info-circle"></i>
                <div class="course_info">
                <div class="row">
                <div class="col-12">
                <ul>
                <li>
                <i class="fas fa-user"></i>
                <span>Trainer Name :</span>
                <a href="https://www.pencilbox.edu.bd/trainer-details/39/39">A.H.M Mohsin</a>
                </li>
                <li>
                <i class="fas fa-stopwatch"></i>
                <span>No. of Classes/ Sessions :</span> {{$course->classes}}
                </li>
                <li>
                <i class="fab fa-trello"></i>
                <span>Batch No : {{$course->batch_no}}</span>
                </li>
                <li>
                <i class="far fa-clock"></i>
                <span>Registration Deadline :</span> {{$course->reg_date}}
                </li>
                <li>
                <i class="fas fa-calendar-check"></i>
                <span>Class Schedule :</span>
                </li>
                <li>
                <div>Sat (07:30 PM-09:30 PM)</div>
                </li>
                <li>
                <div>Mon (07:30 PM-09:30 PM)</div>
                </li>
                <li>
                <div>Wed (07:30 PM-09:30 PM)</div>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </span>
                </div>
                <a href="{{route('single-course',$course->id)}}">
                <h6>{{$course->course_name}}</h6>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                <span class="pb_single_course_price">
                Course Fees :
                {{$course->course_price}}/- BDT</span>
                <a class="pb_single_course_apply_button" href="{{route('single-course',$course->id)}}">
                See Details
                </a>
                </div>
                </div>
                </div>
                </div>
            @endif
        @endforeach
    
    </div>
    </div>
    
    </div>
    {{-- ongoing course end --}}

    {{-- RPL --}}

    <div id="old_course" class=""><br>
    <div class="wrapper">
    <div class="row">
        @foreach ($courses as $upcoming)
            @if ($upcoming->course_type==2)
            <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
                <div class="pb_single_course_box">
                <a href="{{route('single-course',$upcoming->id)}}">
                <img class="img-fluid" src="{{ asset('uploads/course/'. $upcoming->image) }}" alt="Course_image">
                </a>
                <div class="pb_single_course_content">
                <div class="date_time d-flex justify-content-between">
                <span>Start Date:
                    {{$upcoming->ass_date}}</span>
                <span>Duration: 20 hours</span>
                <span class="course_info_hover">
                <i class="fa fa-info-circle"></i>
                <div class="course_info">
                <div class="row">
                <div class="col-12">
                <ul>
                <li>
                <i class="fas fa-user"></i>
                <span>Trainer Name :</span>
                <a href="https://www.pencilbox.edu.bd/trainer-details/19/mir-rashedul-islam">Mir Rashedul Islam</a>
                </li>
                <li>
                <i class="fas fa-stopwatch"></i>
                <span>No. of Classes/ Sessions :</span> {{$upcoming->classes}}
                </li>
                <li>
                <i class="fab fa-trello"></i>
                <span>Batch No : {{$upcoming->batch_no}}</span>
                </li>
                <li>
                <i class="far fa-clock"></i>
                <span>Registration Deadline :</span> {{$upcoming->reg_date}}
                </li>
                <li>
                <i class="fas fa-calendar-check"></i>
                <span>Class Schedule :</span>
                </li>
                <li>
                <div>Mon (07:30 PM-09:30 PM)</div>
                </li>
                <li>
                <div>Wed (07:30 PM-09:30 PM)</div>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </span>
                </div>
                <a href="{{route('single-course',$upcoming->id)}}">
                <h6>{{$upcoming->course_name}}</h6>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                <span class="pb_single_course_price">
                Course Fees :
                {{$upcoming->course_price}}/- BDT</span>
                <a class="pb_single_course_apply_button" href="{{route('single-course',$upcoming->id)}}">
                Apply Course
                </a>
                </div>
                </div>
                </div>
                </div>
            @endif
        @endforeach
    <div class="col-12">
    <div class="d-flex justify-content-center">
    <a id="old" class="ViewMore" href="javascript:void(0)">View More</a>
    </div>
    </div>
    
    </div>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

@endsection