@extends('frontend.components.layouts')
@section('content')


<div class="home_bg_X" style="overflow: hidden; background: url(images/cover_image_for_homepage.webp); background-repeat: no-repeat; background-size: 100% auto; background-position: center; padding: 20px 0 80px 0; position: relative;">
    <div class="container">
        <div class="row">
          <div class="col-md">
            <div id="owl-demo" class="owl-carousel owl-theme">
     
                <div class="item"><img src="images/1.jpg"  style="display: block; width: 100%; height: 350px;" alt="The Last of us"></div>
                <div class="item"><img src="images/2.jpg"  style="display: block; width: 100%; height: 350px;" alt="GTA V"></div>
                <div class="item"><img src="images/11.jpg"  style="display: block; width: 100%; height: 350px;" alt="The Last of us"></div>
                <div class="item"><img src="images/4.jpg"  style="display: block; width: 100%; height: 350px;" alt="The Last of us"></div>
                <div class="item"><img src="images/12.jpg"  style="display: block; width: 100%; height: 350px;" alt="GTA V"></div>
                <div class="item"><img src="images/3.jpg"  style="display: block; width: 100%; height: 350px;" alt="Mirror Edge"></div>
               
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
</div>

<div class="container" id="pencilbox_home_slider_down_counter">
<div class="row text-center d_none_md" style="padding: 0 91px; margin-top: -88px;">
<div class="col-3 per-call" style="transition: margin-top 1s;">
<div class="card per-card" style="background: #F5F4F4; height: 120px; border-radius: 10px; box-shadow: 0px 3px 6px #888888;">
<div class="card-header" style="background: none; border: 0; padding-bottom: 0; padding-top: 15px;">

<p class="per-count"><span class="count_homepage">213</span>+</p>
</div>
<div class="card-body" style="padding: 0 25px; font-weight: bold; font-size: 20px;">
Batches
</div>
</div>
</div>
<div class="col-3 per-call" style="transition: margin-top 1s;">
<div class="card per-card" style="background: #F5F4F4; height: 120px; border-radius: 10px; box-shadow: 0px 3px 6px #888888;">
<div class="card-header" style="background: none; border: 0; padding-bottom: 0; padding-top: 15px;">
<p class="per-count"><span class="count_homepage">2704</span>+</p>
</div>
<div class="card-body" style="padding: 0 25px; font-weight: bold; font-size: 20px;">
Student
</div>
</div>
</div>
<div class="col-3 per-call" style="transition: margin-top 1s;">
<div class="card per-card" style="background: #F5F4F4; height: 120px; border-radius: 10px; box-shadow: 0px 3px 6px #888888;">
<div class="card-header" style="background: none; border: 0; padding-bottom: 0; padding-top: 15px;">
<p class="per-count"><span class="count_homepage">1350</span>+</p>
</div>
<div class="card-body" style="padding: 0 25px; font-weight: bold; font-size: 20px;">
Job Placement
</div>
</div>
</div>
<div class="col-3 per-call" style="transition: margin-top 1s;">
<div class="card per-card" style="background: #F5F4F4; height: 120px; border-radius: 10px; box-shadow: 0px 3px 6px #888888;">
<div class="card-header" style="background: none; border: 0; padding-bottom: 0; padding-top: 15px;">
<p class="per-count"><span class="count_homepage">31</span>+</p>
</div>
<div class="card-body" style="padding: 0 25px; font-weight: bold; font-size: 20px;">
Skilled Trainer
</div>
</div>
</div>
</div>
</div>



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
    <li class="nav-item dropdown">
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
    <a class="dropdown-item all_course_filter_btn" id="21" href="javascript:void(0)">Programming</a>
    <a class="dropdown-item all_course_filter_btn" id="22" href="javascript:void(0)">Office Application</a>
    <a class="dropdown-item all_course_filter_btn" id="23" href="javascript:void(0)">Video Editing &amp; Motion</a>
    <a class="dropdown-item all_course_filter_btn" id="24" href="javascript:void(0)">Marketing</a>
    <a class="dropdown-item all_course_filter_btn" id="27" href="javascript:void(0)">Workshop</a>
    <a class="dropdown-item all_course_filter_btn" id="28" href="javascript:void(0)">networking</a>
    <a class="dropdown-item all_course_filter_btn" id="29" href="javascript:void(0)">Database Administration</a>
    <a class="dropdown-item all_course_filter_btn" id="30" href="javascript:void(0)">Freelancing</a>
    </div>
    </div>
    </div>
    </li>
    <li class="nav-item"><a class="nav-link active" href="#upcoming_course">Upcoming Courses</a></li>
    <li class="nav-item"><a class="nav-link" href="#ongoing_course">Ongoing Courses</a></li>
    <li class="nav-item"><a class="nav-link" href="#collaborate_course">Collaborate Courses</a></li>
    <li class="nav-item"><a class="nav-link" href="#old_course">Old Courses</a></li>
    </ul>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
    
    <div class="tab-content">
    <div id="all_courses"><br>
    
    <div class="wrapper">
    <div class="row" id="all_course_filter_">
    
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="{{route('single')}}">
    <img class="img-fluid" src="images/64d0907f7466a-2023-Aug-Mon-06-34-39.Web_1.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    16/10/2023</span>
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
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 15/10/2023
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
    <a href="{{route('single')}}">
    <h6>UI/UX Design </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    8000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="{{route('single')}}">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="{{route('single')}}">
    <img class="img-fluid" src="images/64d1ea1de045d-2023-Aug-Tue-07-09-17.For%20web.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    09/10/2023</span>
    <span>Duration: 32hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="{{route('single')}}">Md Labib Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 08/10/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Sun (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Mon (08:00 PM-10:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="{{route('single')}}">
    <h6>B2B Lead Generation Masterclass </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="{{route('single')}}">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 19 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/full-stack-flutter-building-dynamic-apps-games-with-firebase-spring-boot-and-flame-engine">
    <img class="img-fluid" src="images/64d1e6ef03e2c-2023-Aug-Tue-06-55-43.For%20web.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    01/11/2023</span>
    <span>Duration: 48hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="{{route('single')}}">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 10/10/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Tue (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Thu (08:00 PM-10:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="{{route('single')}}">
    <h6>Full Stack Flutter: Building Dynamic Apps &amp; Games with Firebase, Spring Boot and Flame Engine </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="{{route('single')}}">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="{{route('single')}}">
    <img class="img-fluid" src="images/650969040a5d3-2023-Sep-Tue-09-25-24.Digital-Marketing.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    21/11/2023</span>
    <span>Duration: 9hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/54/54">Md. Ariful Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 11/11/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Thu (09:00 AM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="{{route('single')}}">
    <h6>Digital Marketing for Freelancing- Level 4 (NSDA) </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="{{route('single')}}">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 22 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/computer-operation-level-03-nsda">
    <img class="img-fluid" src="images/6533c7d6604ee-2023-Oct-Sat-12-45-10.Computer%20Operation.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    21/11/2023</span>
    <span>Duration: 8hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 16</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 11/11/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Wed (09:00 AM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/computer-operation-level-03-nsda">
    <h6>Computer Operation- Level 03 (NSDA) </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/apply-course/324">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 22 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-microsoft-office-specialist">
    <img class="img-fluid" src="images/Office%20Sp%20700-400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    25/10/2023</span>
    <span>Duration: 20hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 7</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/10/2023
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
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-microsoft-office-specialist">
    <h6>Online Course on Microsoft Office Specialist </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/apply-course/265">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphic-web-ui-design">
    <img class="img-fluid" src="images/64d0909f527e2-2023-Aug-Mon-06-35-11.Web.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    07/09/2023</span>
    <span>Duration: 72hours</span>
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
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 06/09/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Tue (07:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Thu (07:00 PM-10:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/graphic-web-ui-design">
    <h6>Graphic &amp; Web UI Design </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphic-web-ui-design">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 22 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-excel-essentials">
    <img class="img-fluid" src="images/63ee10c84b80b-2023-Feb-Thu-11-17-28.Online%20Course%20on%20Excel%20Essentials.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    22/10/2023</span>
    <span>Duration: 12hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 6
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 15</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 21/10/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (07:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-excel-essentials">
    <h6>Online Course on Excel Essentials </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    2500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-excel-essentials">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-level-3-nsda">
    <img class="img-fluid" src="images/6519507e12ead-2023-Oct-Sun-10-57-02.Graphic-Design.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    31/10/2023</span>
    <span>Duration: 8hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/11/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Tue (09:00 AM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-level-3-nsda">
    <h6>Graphics Design for Freelancing- Level 3 (NSDA) </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/apply-course/322">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 20 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/web-development-ntvqf-level-4-rpl">
    <img class="img-fluid" src="images/643e0d82e6c72-2023-Apr-Tue-03-24-50.webdesignrpl.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    14/10/2023</span>
    <span>Duration: 8hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/10/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/web-development-ntvqf-level-4-rpl">
    <h6>Web Development- NTVQF Level 4 (RPL) </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    2500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/web-development-ntvqf-level-4-rpl">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 19 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/practical-flutter-online-course-on-building-real-life-projects-for-ios-android">
    <img class="img-fluid" src="images/6425318badbe8-2023-Mar-Thu-06-51-55.Practical-Flutter-Banner.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    24/05/2023</span>
    <span>Duration: 28hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 14
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 10</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/05/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (07:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/practical-flutter-online-course-on-building-real-life-projects-for-ios-android">
    <h6>Practical Flutter â€“ Online course on building real life projects for iOS &amp; Android </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    8000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/practical-flutter-online-course-on-building-real-life-projects-for-ios-android">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 21 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/full-stack-aspnet-core">
    <img class="img-fluid" src="images/Full-Stack-Asp.net.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    24/03/2023</span>
    <span>Duration: 96hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/14">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 10</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/03/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/full-stack-aspnet-core">
    <h6>Full Stack ASP.NET Core </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    17000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/full-stack-aspnet-core">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 30 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/first-earning-from-freelancing">
    <img class="img-fluid" src="images/63f5ecf7258a6-2023-Feb-Wed-10-22-47.Web%20Banner%20-%2004.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    12/03/2023</span>
    <span>Duration: 30hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/60/60">Dewan Zony</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 15
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 11/03/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (07:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/first-earning-from-freelancing">
    <h6>First Earning from Freelancing </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/first-earning-from-freelancing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 22 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/excel-essentials">
    <img class="img-fluid" src="images/Microsoft-Excel-for-Beginnern-600x400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    25/02/2023</span>
    <span>Duration: 16hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/02/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Mon (07:30 PM-09:03 PM)</div>
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
    <a href="https://www.pencilbox.edu.bd/course/excel-essentials">
    <h6>Excel Essentials </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/excel-essentials">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-industrial-attachment">
    <img class="img-fluid" src="images/6358c0ff21bb1-2022-Oct-Wed-05-09-19.Industrial%20Attachment%20Course%20Web%20Banner.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    01/11/2022</span>
    <span>Duration: 72hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 36
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 26/10/2022
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (02:00 PM-04:00 PM)</div>
    </li>
    <li>
    <div>Tue (02:00 PM-04:00 PM)</div>
    </li>
    <li>
    <div>Thu (02:00 PM-04:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-industrial-attachment">
    <h6>Graphics Design- Industrial Attachment </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price"></span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphics-design-industrial-attachment">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphic-design-ntvqf-level-2-rpl">
    <img class="img-fluid" src="images/WhatsApp%20Image%202022-03-07%20at%205.42.17%20PM.jpeg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    31/12/2022</span>
    <span>Duration: 8hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 20/12/2022
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/graphic-design-ntvqf-level-2-rpl">
    <h6>Graphic Design- NTVQF Level 2 (RPL) </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    2500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphic-design-ntvqf-level-2-rpl">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-social-media-marketing">
    <img class="img-fluid" src="images/Social%20media%20marketing.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    30/01/2022</span>
    <span>Duration: 20hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/56/56">Md. Saddam Hossain</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 29/01/2022
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:30 PM-08:30 PM)</div>
    </li>
    <li>
    <div>Tue (06:30 PM-08:30 PM)</div>
    </li>
    <li>
    <div>Thu (06:30 PM-08:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-social-media-marketing">
    <h6>Online Course on Social Media Marketing </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-social-media-marketing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/mastering-on-digital-marketing">
    <img class="img-fluid" src="images/Mastering-on-Digital-Marketing-PencilBox.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    18/09/2021</span>
    <span>Duration: 72hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/42/42">Rookyb Rocky</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 17/09/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/mastering-on-digital-marketing">
    <h6>Mastering on Digital Marketing </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/mastering-on-digital-marketing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-only-for-woman">
    <img class="img-fluid" src="images/GRAPHIC-Design--for-Freelancing-Only-For-Women-700x400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    18/09/2021</span>
    <span>Duration: 24hours</span>
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
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 11</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 17/09/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Mon (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Wed (10:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-only-for-woman">
    <h6>Graphics Design for Freelancing -Only for Woman </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    0.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-only-for-woman">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 20 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/web-design-and-development-using-laravel-and-vue">
    <img class="img-fluid" src="images/700x400-Laravel-Banner.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    20/05/2021</span>
    <span>Duration: 90hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/24">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 30
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 8</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 19/05/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/web-design-and-development-using-laravel-and-vue">
    <h6>Web Design and Development using Laravel and Vue </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    20000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/web-design-and-development-using-laravel-and-vue">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 17 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/it-support-service">
    <img class="img-fluid" src="images/IT-SUPPORT%20700x400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    30/08/2021</span>
    <span>Duration: 30hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 29/08/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/it-support-service">
    <h6>IT Support Service </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/it-support-service">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-seo-masterclass">
    <img class="img-fluid" src="images/The-Complete-SEO-Mastetrclass-700x400-.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    31/07/2021</span>
    <span>Duration: 50hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/48/48">Toufiq Rayhan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 25
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 30/07/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Sun (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Mon (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Tue (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Wed (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Thu (09:00 PM-11:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-seo-masterclass">
    <h6>Online Course on the Complete SEO Masterclass </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-seo-masterclass">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 19 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-modern-android-development-with-kotlin">
    <img class="img-fluid" src="images/Kotlin-Banner-700-400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    29/05/2021</span>
    <span>Duration: 32hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 28/05/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Fri (09:00 AM-11:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-modern-android-development-with-kotlin">
    <h6>Online course on Modern Android Development with Kotlin </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    4000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-modern-android-development-with-kotlin">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-become-a-fiverr-expert-with-video-selling-services">
    <img class="img-fluid" src="images/Become-A-Fiverr-Expert-with-Video-Selling-Services700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    02/08/2021</span>
    <span>Duration: 8hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/55/55">Aqib Nirob</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 4
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 01/08/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Tue (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Wed (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Thu (09:00 PM-11:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-become-a-fiverr-expert-with-video-selling-services">
    <h6>Online Course on Become A Fiverr Expert with Video Selling Services </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    1000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-become-a-fiverr-expert-with-video-selling-services">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 19 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-professional-android-application-development">
    <img class="img-fluid" src="images/andriof.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    26/02/2021</span>
    <span>Duration: 24hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 25/02/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Fri (09:00 AM-11:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-professional-android-application-development">
    <h6>Online Course on Professional Android Application Development </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    2000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-professional-android-application-development">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 16 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-modern-web-design">
    <img class="img-fluid" src="images/Online-Course-on-Modern-Web-Design.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    07/02/2021</span>
    <span>Duration: 24hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/53/53">Shabiha Ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 06/02/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-08:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-modern-web-design">
    <h6>Online Course on Modern Web Design </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-modern-web-design">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 28 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-training-on-mikrotik">
    <img class="img-fluid" src="images/109503537_990289694758193_8276120409338601806_o.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    08/02/2021</span>
    <span>Duration: 15hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/44/44">Moniruzzaman Tusher</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 5
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 07/02/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:30 PM-10:30 PM)</div>
    </li>
    <li>
    <div>Mon (07:30 PM-10:30 PM)</div>
    </li>
    <li>
    <div>Wed (07:30 PM-10:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-training-on-mikrotik">
    <h6>Online Training on Mikrotik </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-training-on-mikrotik">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-training-on-graphics-design-for-freelancing">
    <img class="img-fluid" src="images/700x400-Workshop-on-Graphics-Design.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    20/11/2020</span>
    <span>Duration: 24hours</span>
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
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 6</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 19/11/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (07:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-training-on-graphics-design-for-freelancing">
    <h6>Online Training on Graphics Design For Freelancing </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    4000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-training-on-graphics-design-for-freelancing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 20 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-training-on-web-app-development-with-laravel-vue">
    <img class="img-fluid" src="images/BITM-%2B-Laravel-Banner.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    17/10/2020</span>
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
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/24">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 15/10/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (10:00 AM-12:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-training-on-web-app-development-with-laravel-vue">
    <h6>Online Training on Web App Development With Laravel &amp; Vue </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-training-on-web-app-development-with-laravel-vue">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 28 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-server-administration">
    <img class="img-fluid" src="images/Server-Administration.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    21/08/2020</span>
    <span>Duration: 24hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/16/16">khondoker ali asgor pavel</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 13/08/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (07:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Sat (07:00 PM-10:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-server-administration">
    <h6>Online Course on Server Administration </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-server-administration">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 19 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/android-and-ios-app-development-with-flutter">
    <img class="img-fluid" src="images/Flutter-Development-with-Dart-language3.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    09/06/2020</span>
    <span>Duration: 72hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/41/41">Faisal Khan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/android-and-ios-app-development-with-flutter">
    <h6>Android and IOS App Development with Flutter </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/android-and-ios-app-development-with-flutter">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/mastering-on-graphics-design">
    <img class="img-fluid" src="images/Mastering-on-Graphics-Design.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    06/06/2020</span>
    <span>Duration: 72hours</span>
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
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (02:00 PM-05:00 PM)</div>
    </li>
    <li>
    <div>Mon (02:00 PM-05:00 PM)</div>
    </li>
    <li>
    <div>Wed (02:00 PM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/mastering-on-graphics-design">
    <h6>Mastering on Graphics Design </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/mastering-on-graphics-design">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 17 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/ethical-hacking-and-cyber-security">
    <img class="img-fluid" src="images/new%20ethical-hacking-and-cyber-security-700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    13/06/2020</span>
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
    <a href="https://www.pencilbox.edu.bd/trainer-details/18/18">zakaria hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 11/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (05:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (05:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/ethical-hacking-and-cyber-security">
    <h6>Ethical Hacking and Cyber Security </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    12500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/ethical-hacking-and-cyber-security">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 19 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-android-and-ios-ui-design-with-flutter">
    <img class="img-fluid" src="images/Online-Flutter-Development-with-Dart-language.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    02/06/2020</span>
    <span>Duration: 20hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/41/41">Faisal Khan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 01/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (11:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Tue (11:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Thu (11:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-android-and-ios-ui-design-with-flutter">
    <h6>Online Course on The Complete Android and IOS UI Design with Flutter </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-android-and-ios-ui-design-with-flutter">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 21 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-aspnet-core-with-angular">
    <img class="img-fluid" src="images/Online-Asp.net.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    02/05/2020</span>
    <span>Duration: 45hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/14">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 15
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 30/04/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (10:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (10:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Mon (10:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-aspnet-core-with-angular">
    <h6>Online Course on ASP.NET Core with Angular </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-aspnet-core-with-angular">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 20 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-wordpress-for-beginners">
    <img class="img-fluid" src="images/Online-Master-WordPress-Website-Design-with-Elementor-Beginner-to-Advanced.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    22/04/2020</span>
    <span>Duration: 20hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/24">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 21/04/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Mon (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Tue (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Wed (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Thu (10:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-wordpress-for-beginners">
    <h6>Online Course on WordPress for Beginners </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    2000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-wordpress-for-beginners">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 17 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/training-on-mikrotik">
    <img class="img-fluid" src="images/mikrotik-700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    22/02/2020</span>
    <span>Duration: 24hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/44/44">Moniruzzaman Tusher</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 20/02/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/training-on-mikrotik">
    <h6>Training on Mikrotik </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/training-on-mikrotik">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/certificate-course-on-applied-marketing">
    <img class="img-fluid" src="images/700x400-Applied-Marketing.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    09/02/2020</span>
    <span>Duration: 20hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/29/29">Salehin Chowdhury</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 08/02/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-08:30 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-08:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/certificate-course-on-applied-marketing">
    <h6>Certificate Course on APPLIED MARKETING </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    12000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/certificate-course-on-applied-marketing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 19 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/professional-android-application-development">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    16/09/2019</span>
    <span>Duration: 48hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 9</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 15/09/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/professional-android-application-development">
    <h6>Professional Android Application Development </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/professional-android-application-development">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 19 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/programming-in-kotlin">
    <img class="img-fluid" src="images/Kotlin-Banner%20bitm-v2-700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    23/07/2019</span>
    <span>Duration: 24hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 22/07/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/programming-in-kotlin">
    <h6>Programming in Kotlin </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    8000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/programming-in-kotlin">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/cpa-affiliate-marketing-for-beginners">
    <img class="img-fluid" src="images/cpa-bitm-cola.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    19/04/2019</span>
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
    <a href="https://www.pencilbox.edu.bd/trainer-details/49/49">Jasim Uddin Rasel</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 18/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/cpa-affiliate-marketing-for-beginners">
    <h6>CPA Affiliate Marketing for Beginners </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/cpa-affiliate-marketing-for-beginners">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 21 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/beginning-development-with-dot-net-oop-in-c-sharp-database-operation-with-entity-framework">
    <img class="img-fluid" src="images/C%20sharp%20collaborative%20for%20pencilbox.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    24/04/2019</span>
    <span>Duration: 45hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/14">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 15
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Mon (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Wed (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/beginning-development-with-dot-net-oop-in-c-sharp-database-operation-with-entity-framework">
    <h6>Beginning Development with Dot NET OOP in C Sharp Database Operation with Entity Framework </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/beginning-development-with-dot-net-oop-in-c-sharp-database-operation-with-entity-framework">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 20 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/back-end-development-with-php-mysql">
    <img class="img-fluid" src="images/backend-collaborative.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    07/04/2019</span>
    <span>Duration: 96hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/31/31">Fahim Hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (01:30 PM-05:30 PM)</div>
    </li>
    <li>
    <div>Tue (01:30 PM-05:30 PM)</div>
    </li>
    <li>
    <div>Thu (01:30 PM-05:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/back-end-development-with-php-mysql">
    <h6>Back-End Development with PHP_ MySQL </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/back-end-development-with-php-mysql">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 19 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/advanced-android-development-with-jetpack-kotlin">
    <img class="img-fluid" src="images/kotlin-new%20700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    15/04/2019</span>
    <span>Duration: 48hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/14">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 14/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/advanced-android-development-with-jetpack-kotlin">
    <h6>Advanced Android Development with Jetpack &amp; Kotlin </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    20000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/advanced-android-development-with-jetpack-kotlin">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 20 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-php">
    <img class="img-fluid" src="images/pencilbox-admin-banner.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    05/03/2019</span>
    <span>Duration: 90hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/24">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 30
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 8</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 02/03/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-php">
    <h6>Full Stack Web Development in PHP </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    22500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-php">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 16 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/getting-started-front-end-development-with-angular">
    <img class="img-fluid" src="images/asp.net%20700X400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    07/04/2019</span>
    <span>Duration: 48hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 06/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (05:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/getting-started-front-end-development-with-angular">
    <h6>Getting Started Front End Development with Angular </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/getting-started-front-end-development-with-angular">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphic-design-for-freelancing">
    <img class="img-fluid" src="images/Graphics-Design-for-freelancing01%20new.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    25/11/2018</span>
    <span>Duration: 54hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/23/23">MD. RAIHANUL ISLAM</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 18
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 22/11/2018
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (05:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/graphic-design-for-freelancing">
    <h6>Graphic Design For Freelancing </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphic-design-for-freelancing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 20 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/php-for-beginners">
    <img class="img-fluid" src="images/PHPforBegenners40.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    04/10/2018</span>
    <span>Duration: 75hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/31/31">Fahim Hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 25
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/10/2018
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (02:30 PM-05:30 PM)</div>
    </li>
    <li>
    <div>Sat (02:30 PM-05:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/php-for-beginners">
    <h6>PHP for Beginners </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/php-for-beginners">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/blueprint-of-a-facebook-page-for-business">
    <img class="img-fluid" src="images/Blueprint%20of%20a%20Facebook%20Page%20for%20Business.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    11/11/2017</span>
    <span>Duration: 6hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/49/49">Jasim Uddin Rasel</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 08/11/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-03:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/blueprint-of-a-facebook-page-for-business">
    <h6>Blueprint of a Facebook Page for Business </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    1500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/blueprint-of-a-facebook-page-for-business">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 16 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/web-programming-with-javascript-ecma-5">
    <img class="img-fluid" src="images/Web%20programming%20with%20JavaScript%20%28ECMA-5%29.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    19/02/2018</span>
    <span>Duration: 72hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/30/30">Md. Habibur Rahman</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 19/02/2018
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/web-programming-with-javascript-ecma-5">
    <h6>Web programming with JavaScript (ECMA-5) </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/web-programming-with-javascript-ecma-5">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 21 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-net">
    <img class="img-fluid" src="images/Full%20Stack%20Web%20Development%20in%20.NET.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    08/12/2017</span>
    <span>Duration: 160hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 07/12/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-05:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-net">
    <h6>Full Stack Web Development in .NET </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    25000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-net">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 23 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/video-editing-for-the-beginners">
    <img class="img-fluid" src="images/Video%20Editing%20for%20the%20beginners.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    16/09/2017</span>
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
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 14/09/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (02:00 PM-06:00 PM)</div>
    </li>
    <li>
    <div>Mon (02:00 PM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/video-editing-for-the-beginners">
    <h6>Video Editing for the beginners </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/video-editing-for-the-beginners">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 16 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/understanding-javascript-a-language-of-the-web">
    <img class="img-fluid" src="images/Understanding%20JavaScript%2C%20a%20language%20of%20the%20Web.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    01/09/2017</span>
    <span>Duration: 16hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/27/27">Mian Zadid Rusdid</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 4
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 25/08/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/understanding-javascript-a-language-of-the-web">
    <h6>Understanding JavaScript, a language of the Web </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    4000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/understanding-javascript-a-language-of-the-web">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 16 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/advance-javascript-a-language-of-the-web">
    <img class="img-fluid" src="images/Advance%20JavaScript%2C%20a%20language%20of%20the%20Web.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    28/07/2017</span>
    <span>Duration: 16hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/27/27">Mian Zadid Rusdid</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 4
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 27/07/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (02:00 PM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/advance-javascript-a-language-of-the-web">
    <h6>Advance JavaScript, a language of the Web </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    6000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/advance-javascript-a-language-of-the-web">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 18 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/build-your-freelance-career-in-online-marketplace">
    <img class="img-fluid" src="images/pen-banner700x400-%20change-2.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    05/04/2019</span>
    <span>Duration: 36hours</span>
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
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/build-your-freelance-career-in-online-marketplace">
    <h6>Build Your Freelance Career in Online Marketplace </h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    12000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/build-your-freelance-career-in-online-marketplace">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12">
    <div class="d-flex justify-content-center">
    <a class="ViewMore" href="https://www.pencilbox.edu.bd/courses">View More</a>
    </div>
    </div>
    
    </div>
    </div>
    
    </div>
    <div id="upcoming_course" class="active"><br>
    
    <div class="wrapper">
    <div class="row">
    
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-microsoft-office-specialist">
    <img class="img-fluid" src="images/Office%20Sp%20700-400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    25/10/2023</span>
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
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 7</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/10/2023
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
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-microsoft-office-specialist">
    <h6>Online Course on Microsoft Office Specialist</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/apply-course/265">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-level-3-nsda">
    <img class="img-fluid" src="images/6519507e12ead-2023-Oct-Sun-10-57-02.Graphic-Design.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    31/10/2023</span>
    <span>Duration: 8 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/11/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Tue (09:00 AM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-level-3-nsda">
    <h6>Graphics Design for Freelancing- Level 3 (NSDA)</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/apply-course/322">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/full-stack-flutter-building-dynamic-apps-games-with-firebase-spring-boot-and-flame-engine">
    <img class="img-fluid" src="images/64d1e6ef03e2c-2023-Aug-Tue-06-55-43.For%20web.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    01/11/2023</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 10/10/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Tue (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Thu (08:00 PM-10:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/full-stack-flutter-building-dynamic-apps-games-with-firebase-spring-boot-and-flame-engine">
    <h6>Full Stack Flutter: Building Dynamic Apps &amp; Games with Firebase, Spring Boot and Flame Engine</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/apply-course/309">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/digital-marketing-for-freelancing-level-4-nsda">
    <img class="img-fluid" src="images/650969040a5d3-2023-Sep-Tue-09-25-24.Digital-Marketing.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    21/11/2023</span>
    <span>Duration: 9 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/54/md-ariful-islam">Md. Ariful Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 11/11/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Thu (09:00 AM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/digital-marketing-for-freelancing-level-4-nsda">
    <h6>Digital Marketing for Freelancing- Level 4 (NSDA)</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/apply-course/320">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/computer-operation-level-03-nsda">
    <img class="img-fluid" src="images/6533c7d6604ee-2023-Oct-Sat-12-45-10.Computer%20Operation.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    21/11/2023</span>
    <span>Duration: 8 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 16</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 11/11/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Wed (09:00 AM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/computer-operation-level-03-nsda">
    <h6>Computer Operation- Level 03 (NSDA)</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/apply-course/324">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    
    </div>
    <div id="ongoing_course" class=""><br>
    
    <div class="wrapper">
    <div class="row">
    
    <div class="col-12 col-md-6 col-lg-4 pb_single_course_col_ongoing">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphic-web-ui-design">
    <img class="img-fluid" src="images/64d0909f527e2-2023-Aug-Mon-06-35-11.Web.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    07/09/2023</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 06/09/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Tue (07:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Thu (07:00 PM-10:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/graphic-web-ui-design">
    <h6>Graphic &amp; Web UI Design</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT
    </span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphic-web-ui-design">See Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 pb_single_course_col_ongoing">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/b2b-lead-generation-masterclass">
    <img class="img-fluid" src="images/64d1ea1de045d-2023-Aug-Tue-07-09-17.For%20web.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    09/10/2023</span>
    <span>Duration: 32 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/61/md-labib-islam">Md Labib Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 08/10/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Sun (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Mon (08:00 PM-10:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/b2b-lead-generation-masterclass">
    <h6>B2B Lead Generation Masterclass</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT
    </span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/b2b-lead-generation-masterclass">See Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 pb_single_course_col_ongoing">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/uiux-design">
    <img class="img-fluid" src="images/64d0907f7466a-2023-Aug-Mon-06-34-39.Web_1.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    16/10/2023</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 15/10/2023
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
    <a href="https://www.pencilbox.edu.bd/course/uiux-design">
    <h6>UI/UX Design</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    8000.00/- BDT
    </span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/uiux-design">See Details</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 pb_single_course_col_ongoing">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-excel-essentials">
    <img class="img-fluid" src="images/63ee10c84b80b-2023-Feb-Thu-11-17-28.Online%20Course%20on%20Excel%20Essentials.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    22/10/2023</span>
    <span>Duration: 12 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 6
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 15</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 21/10/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (07:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-excel-essentials">
    <h6>Online Course on Excel Essentials</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    2500.00/- BDT
    </span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-excel-essentials">See Details</a>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    
    </div>
    <div id="collaborate_course" class=""><br>
    
    <div class="wrapper">
    <div class="row">
    
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 13/10/2017</span>
    <span>Duration: 102 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 34
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 10/06/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    13000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Advance%20JavaScript%2C%20a%20language%20of%20the%20Web.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 25/08/2017</span>
    <span>Duration: 16 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/27/mian-zadid-rusdid">Mian Zadid Rusdid</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 4
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 27/07/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (02:00 PM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Advance JavaScript, a language of the Web</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    6000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/pencilbox-admin-banner.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 08/12/2017</span>
    <span>Duration: 90 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/30/md-habibur-rahman">Md. Habibur Rahman</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 30
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 20/07/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack Web Development in PHP</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    22500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 17/10/2017</span>
    <span>Duration: 51 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 17
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 16/08/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    13000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Video%20Editing%20for%20the%20beginners.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 21/10/2017</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 14/09/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (02:00 PM-06:00 PM)</div>
    </li>
    <li>
    <div>Mon (02:00 PM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Video Editing for the beginners</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 19/12/2017</span>
    <span>Duration: 51 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 17
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 13/10/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    14000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/pencilbox-admin-banner.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 06/02/2018</span>
    <span>Duration: 99 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/30/md-habibur-rahman">Md. Habibur Rahman</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 33
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 18/12/2017
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack Web Development in PHP</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    22500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 20/03/0018</span>
    <span>Duration: 51 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 17
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 18/01/2018
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    14000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/pencilbox-admin-banner.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 30/07/2018</span>
    <span>Duration: 99 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/30/md-habibur-rahman">Md. Habibur Rahman</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 33
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 7</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 22/03/2018
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack Web Development in PHP</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    22500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 24/06/2018</span>
    <span>Duration: 51 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 17
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 25/04/2018
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Flutter-Development-with-Dart-language3.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 03/04/2020</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/41/faisal-khan">Faisal Khan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 09/01/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Android and IOS App Development with Flutter</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/cpa-bitm-cola.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 08/03/2019</span>
    <span>Duration: 30 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/49/jasim-uddin-rasel">Jasim Uddin Rasel</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 31/01/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>CPA Affiliate Marketing for Beginners</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/pencilbox-admin-banner.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 14/05/2019</span>
    <span>Duration: 90 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 30
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 8</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 02/03/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack Web Development in PHP</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    22500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/pen-banner700x400-%20change-2.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 11/05/2010</span>
    <span>Duration: 36 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Build Your Freelance Career in Online Marketplace</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    12000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/asp.net%20700X400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 14/05/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 06/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (05:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Getting Started Front End Development with Angular</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/backend-collaborative.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 25/05/2019</span>
    <span>Duration: 96 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/31/fahim-hasan">Fahim Hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (01:30 PM-05:30 PM)</div>
    </li>
    <li>
    <div>Tue (01:30 PM-05:30 PM)</div>
    </li>
    <li>
    <div>Thu (01:30 PM-05:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Back-End Development with PHP_ MySQL</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/kotlin-new%20700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 23/05/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/shirajul-islam-mamun">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 14/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Advanced Android Development with Jetpack &amp; Kotlin</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    20000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/cpa-bitm-cola.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 18/06/2019</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/49/jasim-uddin-rasel">Jasim Uddin Rasel</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 18/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>CPA Affiliate Marketing for Beginners</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/C%20sharp%20collaborative%20for%20pencilbox.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 26/05/2019</span>
    <span>Duration: 45 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/shirajul-islam-mamun">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 15
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/04/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Mon (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Wed (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Beginning Development with Dot NET OOP in C Sharp Database Operation with Entity Framework</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Laravel-Banner-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 07/07/2019</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/05/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web Design and Development using Laravel and Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 28/08/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 7</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 05/05/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 07/08/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 8</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 18/06/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/asp.net%20700X400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 20/09/2019</span>
    <span>Duration: 96 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/shirajul-islam-mamun">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 27/06/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Sat (05:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack ASP.NET Core</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    20000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/new%20ethical-hacking-and-cyber-security-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 04/10/2019</span>
    <span>Duration: 39 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/18/zakaria-hasan">zakaria hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 13
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 26/07/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Ethical Hacking and Cyber Security</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    12500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Laravel-Banner-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 01/10/2019</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 27/07/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web Design and Development using Laravel and Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Mastering-on-Digital-Marketing-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 16/10/2019</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/42/rookyb-rocky">Rookyb Rocky</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/08/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Mastering on Digital Marketing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 06/11/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 9</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 15/09/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/asp.net%20700X400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 13/12/2019</span>
    <span>Duration: 96 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/shirajul-islam-mamun">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 20/09/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack ASP.NET Core</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    22500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Flutter-Development-with-Dart-language3.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 21/12/2019</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/41/faisal-khan">Faisal Khan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 03/10/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Android and IOS App Development with Flutter</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Laravel-Banner-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 05/12/2019</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 12/10/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web Design and Development using Laravel and Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    16000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Mastering-on-Digital-Marketing-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 30/12/2019</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/42/rookyb-rocky">Rookyb Rocky</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 31/10/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Mastering on Digital Marketing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Microsoft-Excel-for-Beginner%20700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 21/11/2019</span>
    <span>Duration: 24 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 02/11/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 05/02/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 10</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 08/12/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (09:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 05/02/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 11</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 08/12/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Microsoft-Excel-for-Beginner%20700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 31/12/2019</span>
    <span>Duration: 24 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 14/12/2019
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/asp.net%20700X400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 03/04/2020</span>
    <span>Duration: 96 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/shirajul-islam-mamun">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 6</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 09/01/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack ASP.NET Core</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    22500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Laravel-Banner-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 05/03/2020</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 6</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 11/01/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web Design and Development using Laravel and Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    16000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/mikrotik-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 20/03/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/44/moniruzzaman-tusher">Moniruzzaman Tusher</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 20/02/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Training on Mikrotik</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Mastering-on-Digital-Marketing-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 26/04/2020</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/42/rookyb-rocky">Rookyb Rocky</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 22/02/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Mastering on Digital Marketing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Microsoft-Excel-for-Beginner%20700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 19/03/2020</span>
    <span>Duration: 24 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 29/02/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/BITM-%2B-Laravel-Banner.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 20/03/2020</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 29/02/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:59 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sun (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (07:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Web App Development With Laravel &amp; Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/new%20ethical-hacking-and-cyber-security-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 10/04/2020</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/18/zakaria-hasan">zakaria hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 05/03/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (05:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (05:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Ethical Hacking and Cyber Security</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    12500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/BITM-%2B-Laravel-Banner.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 20/04/2020</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 31/03/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sun (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (07:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Web App Development With Laravel &amp; Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Online-Professional-Android-Application-Development.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 20/05/2020</span>
    <span>Duration: 32 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 14/04/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Mon (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Wed (10:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/BITM-%2B-Laravel-Banner.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 20/05/2020</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 30/04/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sun (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (07:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Web App Development With Laravel &amp; Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/94224534_923511541436009_220773821664198656_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 21/05/2020</span>
    <span>Duration: 12 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 6
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 16/05/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (10:30 AM-12:30 PM)</div>
    </li>
    <li>
    <div>Sun (10:30 AM-12:30 PM)</div>
    </li>
    <li>
    <div>Mon (10:30 AM-12:30 PM)</div>
    </li>
    <li>
    <div>Tue (10:30 AM-12:30 PM)</div>
    </li>
    <li>
    <div>Wed (10:30 AM-12:30 PM)</div>
    </li>
    <li>
    <div>Thu (10:30 AM-12:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    1000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Online-mikrotik-1200x628.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 25/05/2020</span>
    <span>Duration: 15 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/44/moniruzzaman-tusher">Moniruzzaman Tusher</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 5
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 16/05/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (02:00 PM-05:00 PM)</div>
    </li>
    <li>
    <div>Mon (02:00 PM-05:00 PM)</div>
    </li>
    <li>
    <div>Wed (02:00 PM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Mikrotik</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/92547593_915197055600791_7212308945451352064_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 04/07/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 28/05/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-11:00 AM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-11:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/700x400-Workshop-on-Graphics-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 11/06/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 31/05/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Graphics Design For Freelancing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    4000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Mastering-on-Graphics-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 29/07/2020</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (02:00 PM-05:00 PM)</div>
    </li>
    <li>
    <div>Mon (02:00 PM-05:00 PM)</div>
    </li>
    <li>
    <div>Wed (02:00 PM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Mastering on Graphics Design</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    15000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Flutter-Development-with-Dart-language3.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 31/07/2020</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/41/faisal-khan">Faisal Khan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Android and IOS App Development with Flutter</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Laravel-Banner-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 02/07/2020</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 7</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 09/05/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web Design and Development using Laravel and Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    16000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/new%20ethical-hacking-and-cyber-security-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 17/07/2020</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/18/zakaria-hasan">zakaria hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 11/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (05:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (05:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Ethical Hacking and Cyber Security</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    12500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/97214022_940935869693576_2412072118972841984_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 04/07/2020</span>
    <span>Duration: 12 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 6
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 22/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (07:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    1000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/96816755_940941836359646_2380993052719185920_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 05/07/2020</span>
    <span>Duration: 15 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/44/moniruzzaman-tusher">Moniruzzaman Tusher</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 5
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 24/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Mikrotik</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Online-Course-on-Modern-Web-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 10/08/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/53/shabiha-ahmed">Shabiha Ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 24/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-08:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Modern Web Design</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/700x400-Workshop-on-Graphics-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 14/07/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 30/06/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Graphics Design For Freelancing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    4000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/92547593_915197055600791_7212308945451352064_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 29/08/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 17/07/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-11:00 AM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-11:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/700x400-Workshop-on-Graphics-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 13/08/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 02/08/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Graphics Design For Freelancing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    4000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/700x400-Workshop-on-Graphics-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 27/08/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 16/08/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Graphics Design For Freelancing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    4000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Online-Course-on-Modern-Web-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 14/09/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/53/shabiha-ahmed">Shabiha Ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 18/08/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-08:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Modern Web Design</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Online-Course-on-Modern-Web-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 16/09/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/53/shabiha-ahmed">Shabiha Ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 19/08/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-08:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Modern Web Design</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Server-Administration.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 12/09/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/16/khondoker-ali-asgor-pavel">khondoker ali asgor pavel</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 13/08/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (07:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Sat (07:00 PM-10:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Server Administration</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/97214022_940935869693576_2412072118972841984_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 03/09/2020</span>
    <span>Duration: 12 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 6
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 6</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/08/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (07:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    1000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/97214022_940935869693576_2412072118972841984_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 05/09/2020</span>
    <span>Duration: 12 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 6
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 7</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 24/08/2020
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
    <h6>Online Course on Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    1000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/700x400-Workshop-on-Graphics-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 17/09/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 06/09/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Graphics Design For Freelancing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    4000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/97554418_943656749421488_5837202215617429504_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 19/09/2020</span>
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
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 07/09/2020
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
    <h6>Online Course on Microsoft Office Specialist</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/97214022_940935869693576_2412072118972841984_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 20/09/2020</span>
    <span>Duration: 12 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 6
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 08/09/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (07:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    1000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Online-Course-on-Modern-Web-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 31/10/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/53/shabiha-ahmed">Shabiha Ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 03/10/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-08:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Modern Web Design</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/BITM-%2B-Laravel-Banner.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 25/12/2020</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 15/10/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (10:00 AM-12:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Web App Development With Laravel &amp; Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/poritosh_pro.PNG" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 31/10/2020</span>
    <span>Duration: 30 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 19/10/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web Development Course</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/96816755_940941836359646_2380993052719185920_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 22/11/2020</span>
    <span>Duration: 15 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/44/moniruzzaman-tusher">Moniruzzaman Tusher</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 5
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 07/11/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Mikrotik</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Online-Course-on-Modern-Web-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 05/12/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/53/shabiha-ahmed">Shabiha Ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 08/11/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-08:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Modern Web Design</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    3000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/92547593_915197055600791_7212308945451352064_o.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 19/12/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/syed-tanvir-ahmed">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 12/11/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:30 AM-09:30 AM)</div>
    </li>
    <li>
    <div>Fri (09:00 AM-11:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Professional Android Application Development</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/700x400-Workshop-on-Graphics-Design.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 26/12/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 6</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 19/11/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (07:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Graphics Design For Freelancing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    4000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/mikrotik-700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 02/01/2021</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/44/moniruzzaman-tusher">Moniruzzaman Tusher</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 3</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 04/12/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Training on Mikrotik</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/BITM-%2B-Laravel-Banner.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 15/02/2021</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 06/12/2020
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
    <h6>Online Training on Web App Development With Laravel &amp; Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    7000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Graphics-Design-for-freelancing01%20new.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 19/01/2021</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 09/12/2020
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (05:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Graphic Design For Freelancing</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/ASP%20dot%20NET%20Core%20MVC%20with%20Angular%20and%20EF%20Core%20%20700X400.webp" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 30/09/2021</span>
    <span>Duration: 96 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/shirajul-islam-mamun">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 7</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 22/04/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack ASP.NET Core</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/700x400-Laravel-Banner.webp" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 13/10/2021</span>
    <span>Duration: 90 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/afjalul-ahsan-pritom">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 30
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 8</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 19/05/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web Design and Development using Laravel and Vue</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    20000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Graphic%20%26%20web%20UI%20Design%20700x400.webp" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 08/09/2021</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/39/ahm-mohsin">A.H.M Mohsin</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 22/06/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Graphic &amp; Web UI Design</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    18000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/IT-SUPPORT%20700x400.webp" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 09/10/2021</span>
    <span>Duration: 30 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 29/08/2021
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>IT Support Service</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    10000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Microsoft-Excel-for-Beginner%20700x400.jpg" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 02/07/2022</span>
    <span>Duration: 24 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 02/06/2022
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (10:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/Microsoft-Excel-for-Beginnern-600x400.webp" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 07/03/2023</span>
    <span>Duration: 16 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 23/02/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Mon (07:30 PM-09:03 PM)</div>
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
    <h6>Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    5000.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_colla">
    <div class="pb_single_course_box">
    <img class="img-fluid" src="images/63ee10c84b80b-2023-Feb-Thu-11-17-28.Online%20Course%20on%20Excel%20Essentials.webp" alt="Course_image">
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date: 05/11/2023</span>
    <span>Duration: 12 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 6
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 15</span>
    </li>
    <li>
    <i class="far fa-clock"></i>
    <span>Registration Deadline :</span> 21/10/2023
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (07:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Excel Essentials</h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    2500.00/- BDT</span>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12">
    <div class="d-flex justify-content-center">
    <a class="ViewMore" href="https://www.pencilbox.edu.bd/courses">View More</a>
    </div>
    </div>
    
    </div>
    </div>
    
    </div>
    <div id="old_course" class=""><br>
    
    <div class="wrapper">
    <div class="row">
    
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/computer-operation-level-03-nsda">
    <img class="img-fluid" src="images/65312900edad5-2023-Oct-Thu-13-02-56.Computer%20Operation.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    20/10/2023</span>
    <span>Duration: 8 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 15</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Tue (09:00 AM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Computer Operation- Level 03 (NSDA) </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    :3000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/computer-operation-level-03-nsda">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/web-development-ntvqf-level-4-rpl">
    <img class="img-fluid" src="images/643e0d82e6c72-2023-Apr-Tue-03-24-50.webdesignrpl.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    14/10/2023</span>
    <span>Duration: 8 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web Development- NTVQF Level 4 (RPL) </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    :2500.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/web-development-ntvqf-level-4-rpl">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-level-3-nsda">
    <img class="img-fluid" src="images/64d39ee75218b-2023-Aug-Wed-14-12-55.Graphic-Design.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    01/10/2023</span>
    <span>Duration: 8 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Tue (09:00 AM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Graphics Design for Freelancing- Level 3 (NSDA) </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    :3000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-level-3-nsda">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/digital-marketing-for-freelancing-level-4-nsda">
    <img class="img-fluid" src="images/643128a619f05-2023-Apr-Sat-08-41-10.Digital-Marketing.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    05/09/2023</span>
    <span>Duration: 8 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/54/54">Md. Ariful Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Tue (09:00 AM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Digital Marketing for Freelancing- Level 4 (NSDA) </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    :3000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/digital-marketing-for-freelancing-level-4-nsda">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/practical-flutter-online-course-on-building-real-life-projects-for-ios-android">
    <img class="img-fluid" src="images/6425318badbe8-2023-Mar-Thu-06-51-55.Practical-Flutter-Banner.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    31/07/2023</span>
    <span>Duration: 28 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 14
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 10</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (07:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Practical Flutter â€“ Online course on building real life projects for iOS &amp; Android </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :8000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/practical-flutter-online-course-on-building-real-life-projects-for-ios-android">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/full-stack-aspnet-core">
    <img class="img-fluid" src="images/Full-Stack-Asp.net.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    15/06/2023</span>
    <span>Duration: 96 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/14">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 10</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack ASP.NET Core </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :17000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/full-stack-aspnet-core">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/uiux-design">
    <img class="img-fluid" src="images/Ui-Ux%20Design-web.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    29/04/2023</span>
    <span>Duration: 40 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (10:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>UI/UX Design </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :10000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/uiux-design">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/first-earning-from-freelancing">
    <img class="img-fluid" src="images/63f5ecf7258a6-2023-Feb-Wed-10-22-47.Web%20Banner%20-%2004.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    20/04/2023</span>
    <span>Duration: 30 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/60/60">Dewan Zony</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 15
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (07:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>First Earning from Freelancing </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :5000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/first-earning-from-freelancing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/excel-essentials">
    <img class="img-fluid" src="images/Microsoft-Excel-for-Beginnern-600x400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    07/03/2023</span>
    <span>Duration: 16 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Mon (07:30 PM-09:03 PM)</div>
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
    <h6>Excel Essentials </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :5000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/excel-essentials">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-excel-essentials">
    <img class="img-fluid" src="images/63ee0c47bc6ad-2023-Feb-Thu-10-58-15.Online%20Course%20on%20Excel%20Essentials.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    01/03/2023</span>
    <span>Duration: 12 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 6
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 14</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (07:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Excel Essentials </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :2500.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-excel-essentials">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-industrial-attachment">
    <img class="img-fluid" src="images/6358c0ff21bb1-2022-Oct-Wed-05-09-19.Industrial%20Attachment%20Course%20Web%20Banner.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    27/01/2023</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 36
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (02:00 PM-04:00 PM)</div>
    </li>
    <li>
    <div>Tue (02:00 PM-04:00 PM)</div>
    </li>
    <li>
    <div>Thu (02:00 PM-04:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Graphics Design- Industrial Attachment </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price"></span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphics-design-industrial-attachment">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphic-design-ntvqf-level-2-rpl">
    <img class="img-fluid" src="images/WhatsApp%20Image%202022-03-07%20at%205.42.17%20PM.jpeg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    31/12/2022</span>
    <span>Duration: 8 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Graphic Design- NTVQF Level 2 (RPL) </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Certification Fees :
    :2500.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphic-design-ntvqf-level-2-rpl">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-social-media-marketing">
    <img class="img-fluid" src="images/Social%20media%20marketing.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    17/02/2022</span>
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
    <a href="https://www.pencilbox.edu.bd/trainer-details/56/56">Md. Saddam Hossain</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:30 PM-08:30 PM)</div>
    </li>
    <li>
    <div>Tue (06:30 PM-08:30 PM)</div>
    </li>
    <li>
    <div>Thu (06:30 PM-08:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Social Media Marketing </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :3000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-social-media-marketing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-microsoft-office-specialist">
    <img class="img-fluid" src="images/Office%20Sp%20700-400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    25/12/2021</span>
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
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 6</span>
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
    <h6>Online Course on Microsoft Office Specialist </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :2000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-microsoft-office-specialist">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/mastering-on-digital-marketing">
    <img class="img-fluid" src="images/Mastering-on-Digital-Marketing-PencilBox.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    22/11/2021</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/42/42">Rookyb Rocky</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 4</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Mastering on Digital Marketing </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :18000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/mastering-on-digital-marketing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-only-for-woman">
    <img class="img-fluid" src="images/GRAPHIC-Design--for-Freelancing-Only-For-Women-700x400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    20/10/2021</span>
    <span>Duration: 24 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 11</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Mon (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Wed (10:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Graphics Design for Freelancing -Only for Woman </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :0.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphics-design-for-freelancing-only-for-woman">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/web-design-and-development-using-laravel-and-vue">
    <img class="img-fluid" src="images/700x400-Laravel-Banner.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    13/10/2021</span>
    <span>Duration: 90 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/24">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 30
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 8</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web Design and Development using Laravel and Vue </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :20000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/web-design-and-development-using-laravel-and-vue">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/it-support-service">
    <img class="img-fluid" src="images/IT-SUPPORT%20700x400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    09/10/2021</span>
    <span>Duration: 30 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/19/19">Mir Rashedul Islam</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>IT Support Service </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :10000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/it-support-service">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphic-web-ui-design">
    <img class="img-fluid" src="images/Graphic%20%26%20web%20UI%20Design%20700x400.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    08/09/2021</span>
    <span>Duration: 72 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Graphic &amp; Web UI Design </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :18000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphic-web-ui-design">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-seo-masterclass">
    <img class="img-fluid" src="images/The-Complete-SEO-Mastetrclass-700x400-.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    29/08/2021</span>
    <span>Duration: 50 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/48/48">Toufiq Rayhan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 25
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Sun (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Mon (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Tue (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Wed (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Thu (09:00 PM-11:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on the Complete SEO Masterclass </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :3000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-seo-masterclass">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-modern-android-development-with-kotlin">
    <img class="img-fluid" src="images/Kotlin-Banner-700-400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    23/07/2021</span>
    <span>Duration: 32 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (08:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Fri (09:00 AM-11:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online course on Modern Android Development with Kotlin </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :4000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-modern-android-development-with-kotlin">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-become-a-fiverr-expert-with-video-selling-services">
    <img class="img-fluid" src="images/Become-A-Fiverr-Expert-with-Video-Selling-Services700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    15/07/2021</span>
    <span>Duration: 8 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/55/55">Aqib Nirob</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 4
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Tue (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Wed (09:00 PM-11:00 PM)</div>
    </li>
    <li>
    <div>Thu (09:00 PM-11:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Become A Fiverr Expert with Video Selling Services </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :1000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-become-a-fiverr-expert-with-video-selling-services">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-professional-android-application-development">
    <img class="img-fluid" src="images/andriof.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    03/04/2021</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 5</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Fri (09:00 AM-11:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Professional Android Application Development </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :2000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-professional-android-application-development">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-modern-web-design">
    <img class="img-fluid" src="images/Online-Course-on-Modern-Web-Design.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    04/03/2021</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/53/53">Shabiha Ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 5</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-08:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-08:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Modern Web Design </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :3000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-modern-web-design">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-training-on-mikrotik">
    <img class="img-fluid" src="images/109503537_990289694758193_8276120409338601806_o.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    17/02/2021</span>
    <span>Duration: 15 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/44/44">Moniruzzaman Tusher</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 5
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 5</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:30 PM-10:30 PM)</div>
    </li>
    <li>
    <div>Mon (07:30 PM-10:30 PM)</div>
    </li>
    <li>
    <div>Wed (07:30 PM-10:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Mikrotik </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :3000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-training-on-mikrotik">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-training-on-graphics-design-for-freelancing">
    <img class="img-fluid" src="images/700x400-Workshop-on-Graphics-Design.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    26/12/2020</span>
    <span>Duration: 24 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 6</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (07:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Graphics Design For Freelancing </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :4000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-training-on-graphics-design-for-freelancing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-training-on-web-app-development-with-laravel-vue">
    <img class="img-fluid" src="images/BITM-%2B-Laravel-Banner.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    25/12/2020</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/24">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No: 4</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (07:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Fri (10:00 AM-12:00 AM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Training on Web App Development With Laravel &amp; Vue </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :7000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-training-on-web-app-development-with-laravel-vue">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-server-administration">
    <img class="img-fluid" src="images/Server-Administration.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    12/09/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/16/16">khondoker ali asgor pavel</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (07:00 PM-10:00 PM)</div>
    </li>
    <li>
    <div>Sat (07:00 PM-10:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on Server Administration </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :10000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-server-administration">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/android-and-ios-app-development-with-flutter">
    <img class="img-fluid" src="images/Flutter-Development-with-Dart-language3.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    31/07/2020</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/41/41">Faisal Khan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Android and IOS App Development with Flutter </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :18000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/android-and-ios-app-development-with-flutter">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/mastering-on-graphics-design">
    <img class="img-fluid" src="images/Mastering-on-Graphics-Design.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    29/07/2020</span>
    <span>Duration: 72 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (02:00 PM-05:00 PM)</div>
    </li>
    <li>
    <div>Mon (02:00 PM-05:00 PM)</div>
    </li>
    <li>
    <div>Wed (02:00 PM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Mastering on Graphics Design </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :15000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/mastering-on-graphics-design">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/ethical-hacking-and-cyber-security">
    <img class="img-fluid" src="images/new%20ethical-hacking-and-cyber-security-700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    17/07/2020</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/18/18">zakaria hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (05:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (05:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Ethical Hacking and Cyber Security </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :12500.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/ethical-hacking-and-cyber-security">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-android-and-ios-ui-design-with-flutter">
    <img class="img-fluid" src="images/Online-Flutter-Development-with-Dart-language.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    21/06/2020</span>
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
    <a href="https://www.pencilbox.edu.bd/trainer-details/41/41">Faisal Khan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (11:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Tue (11:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Thu (11:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on The Complete Android and IOS UI Design with Flutter </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :5000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-the-complete-android-and-ios-ui-design-with-flutter">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-aspnet-core-with-angular">
    <img class="img-fluid" src="images/Online-Asp.net.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    05/06/2020</span>
    <span>Duration: 45 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/14">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 15
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (10:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (10:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Mon (10:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on ASP.NET Core with Angular </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :10000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-aspnet-core-with-angular">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/online-course-on-wordpress-for-beginners">
    <img class="img-fluid" src="images/Online-Master-WordPress-Website-Design-with-Elementor-Beginner-to-Advanced.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    05/05/2020</span>
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
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/24">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Mon (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Tue (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Wed (10:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Thu (10:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Online Course on WordPress for Beginners </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :2000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/online-course-on-wordpress-for-beginners">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/training-on-mikrotik">
    <img class="img-fluid" src="images/mikrotik-700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    20/03/2020</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/44/44">Moniruzzaman Tusher</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Training on Mikrotik </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :5000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/training-on-mikrotik">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/certificate-course-on-applied-marketing">
    <img class="img-fluid" src="images/700x400-Applied-Marketing.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    03/03/2020</span>
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
    <a href="https://www.pencilbox.edu.bd/trainer-details/29/29">Salehin Chowdhury</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-08:30 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-08:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Certificate Course on APPLIED MARKETING </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :12000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/certificate-course-on-applied-marketing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/professional-android-application-development">
    <img class="img-fluid" src="images/Professional-Android-Application-700x400%2BBitm.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    06/11/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 9</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Professional Android Application Development </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :18000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/professional-android-application-development">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/programming-in-kotlin">
    <img class="img-fluid" src="images/Kotlin-Banner%20bitm-v2-700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    10/08/2019</span>
    <span>Duration: 24 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 8
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Programming in Kotlin </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :8000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/programming-in-kotlin">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/cpa-affiliate-marketing-for-beginners">
    <img class="img-fluid" src="images/cpa-bitm-cola.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    18/06/2019</span>
    <span>Duration: 40 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/49/49">Jasim Uddin Rasel</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-12:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-12:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>CPA Affiliate Marketing for Beginners </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :15000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/cpa-affiliate-marketing-for-beginners">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/beginning-development-with-dot-net-oop-in-c-sharp-database-operation-with-entity-framework">
    <img class="img-fluid" src="images/C%20sharp%20collaborative%20for%20pencilbox.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    26/05/2019</span>
    <span>Duration: 45 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/14">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 15
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Mon (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Wed (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Beginning Development with Dot NET OOP in C Sharp Database Operation with Entity Framework </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :15000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/beginning-development-with-dot-net-oop-in-c-sharp-database-operation-with-entity-framework">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/back-end-development-with-php-mysql">
    <img class="img-fluid" src="images/backend-collaborative.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    25/05/2019</span>
    <span>Duration: 96 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/31/31">Fahim Hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (01:30 PM-05:30 PM)</div>
    </li>
    <li>
    <div>Tue (01:30 PM-05:30 PM)</div>
    </li>
    <li>
    <div>Thu (01:30 PM-05:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Back-End Development with PHP_ MySQL </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :15000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/back-end-development-with-php-mysql">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/advanced-android-development-with-jetpack-kotlin">
    <img class="img-fluid" src="images/kotlin-new%20700x400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    23/05/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/14/14">Shirajul Islam Mamun</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 16
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Advanced Android Development with Jetpack &amp; Kotlin </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :20000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/advanced-android-development-with-jetpack-kotlin">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-php">
    <img class="img-fluid" src="images/pencilbox-admin-banner.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    14/05/2019</span>
    <span>Duration: 90 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/24/24">Afjalul Ahsan Pritom</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 30
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 8</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Tue (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Thu (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack Web Development in PHP </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :22500.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-php">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/getting-started-front-end-development-with-angular">
    <img class="img-fluid" src="images/asp.net%20700X400.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    14/05/2019</span>
    <span>Duration: 48 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (05:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Getting Started Front End Development with Angular </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :15000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/getting-started-front-end-development-with-angular">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/graphic-design-for-freelancing">
    <img class="img-fluid" src="images/Graphics-Design-for-freelancing01%20new.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    06/01/2019</span>
    <span>Duration: 54 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/23/23">MD. RAIHANUL ISLAM</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 18
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sun (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Tue (05:30 PM-09:30 PM)</div>
    </li>
    <li>
    <div>Thu (05:30 PM-09:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Graphic Design For Freelancing </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :10000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/graphic-design-for-freelancing">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/php-for-beginners">
    <img class="img-fluid" src="images/PHPforBegenners40.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    04/01/2019</span>
    <span>Duration: 75 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/31/31">Fahim Hasan</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 25
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (02:30 PM-05:30 PM)</div>
    </li>
    <li>
    <div>Sat (02:30 PM-05:30 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>PHP for Beginners </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :15000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/php-for-beginners">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/blueprint-of-a-facebook-page-for-business">
    <img class="img-fluid" src="images/Blueprint%20of%20a%20Facebook%20Page%20for%20Business.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    18/11/2018</span>
    <span>Duration: 6 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/49/49">Jasim Uddin Rasel</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 1
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 2</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (09:00 AM-03:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Blueprint of a Facebook Page for Business </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :1500.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/blueprint-of-a-facebook-page-for-business">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/web-programming-with-javascript-ecma-5">
    <img class="img-fluid" src="images/Web%20programming%20with%20JavaScript%20%28ECMA-5%29.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    14/05/2018</span>
    <span>Duration: 72 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/30/30">Md. Habibur Rahman</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 24
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Mon (06:00 PM-09:00 PM)</div>
    </li>
    <li>
    <div>Wed (06:00 PM-09:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Web programming with JavaScript (ECMA-5) </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :10000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/web-programming-with-javascript-ecma-5">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-net">
    <img class="img-fluid" src="images/Full%20Stack%20Web%20Development%20in%20.NET.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    16/02/2018</span>
    <span>Duration: 160 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/15/15">Syed Tanvir ahmed</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 20
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-05:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-05:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Full Stack Web Development in .NET </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :25000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/full-stack-web-development-in-net">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/video-editing-for-the-beginners">
    <img class="img-fluid" src="images/Video%20Editing%20for%20the%20beginners.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    21/10/2017</span>
    <span>Duration: 40 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 10
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Sat (02:00 PM-06:00 PM)</div>
    </li>
    <li>
    <div>Mon (02:00 PM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Video Editing for the beginners </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :7500.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/video-editing-for-the-beginners">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/understanding-javascript-a-language-of-the-web">
    <img class="img-fluid" src="images/Understanding%20JavaScript%2C%20a%20language%20of%20the%20Web.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    29/09/2017</span>
    <span>Duration: 16 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/27/27">Mian Zadid Rusdid</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 4
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 3</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Understanding JavaScript, a language of the Web </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :4000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/understanding-javascript-a-language-of-the-web">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/advance-javascript-a-language-of-the-web">
    <img class="img-fluid" src="images/Advance%20JavaScript%2C%20a%20language%20of%20the%20Web.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    25/08/2017</span>
    <span>Duration: 16 hours</span>
    <span class="course_info_hover">
    <i class="fa fa-info-circle"></i>
    <div class="course_info">
    <div class="row">
    <div class="col-12">
    <ul>
    <li>
    <i class="fas fa-user"></i>
    <span>Trainer Name :</span>
    <a href="https://www.pencilbox.edu.bd/trainer-details/27/27">Mian Zadid Rusdid</a>
    </li>
    <li>
    <i class="fas fa-stopwatch"></i>
    <span>No. of Classes/ Sessions :</span> 4
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (02:00 PM-06:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Advance JavaScript, a language of the Web </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :6000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/advance-javascript-a-language-of-the-web">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="https://www.pencilbox.edu.bd/course/build-your-freelance-career-in-online-marketplace">
    <img class="img-fluid" src="images/pen-banner700x400-%20change-2.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>End Date:
    11/05/2010</span>
    <span>Duration: 36 hours</span>
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
    <span>No. of Classes/ Sessions :</span> 12
    </li>
    <li>
    <i class="fab fa-trello"></i>
    <span>Batch No : 1</span>
    </li>
    <li>
    <i class="fas fa-calendar-check"></i>
    <span>Class Schedule :</span>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Sat (09:00 AM-01:00 PM)</div>
    </li>
    <li>
    <div>Fri (09:00 AM-01:00 PM)</div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </span>
    </div>
    <h6>Build Your Freelance Career in Online Marketplace </h6>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">
    Course Fees :
    :12000.00/-
    BDT</span>
    <a class="pb_single_course_apply_button" href="https://www.pencilbox.edu.bd/course/build-your-freelance-career-in-online-marketplace">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
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