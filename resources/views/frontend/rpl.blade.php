@extends('frontend.components.layouts')
@section('content')

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
    }
    @media  screen and (max-width: 767px) {
        /*.all_courses_tab ul.nav li:nth-child(2) a.nav-link {*/
        /*    border-top-right-radius: 10px;*/
        /*    border-bottom-right-radius: 10px;*/
        /*    border-right: 1px solid rgba(149, 149, 149, 0.5);*/
        /*}*/
        /*.all_courses_tab ul.nav li:nth-child(3) a.nav-link {*/
        /*    border-top-left-radius: 10px;*/
        /*    border-bottom-left-radius: 10px;*/
        /*}*/
        .all_courses_tab ul.nav li a.nav-link {
            padding-left: 5px;
            padding-right: 5px;
            border-radius:10px;
            border: 1px solid rgba(149, 149, 149, 0.5);
        }
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
        /*.all_courses_tab ul.nav li a.nav-link {*/
        /*    padding-left: 5px;*/
        /*    padding-right: 5px;*/
        /*    border-radius:10px;*/
        /*    border: 1px solid rgba(149, 149, 149, 0.5);*/
        /*}*/
        .r_c_single_course_content .r_c_title {
            font-size: 12px;
        }
        .wrapper .pb_single_course_box .pb_single_course_content .pb_single_course_apply_button{
            font-size:11px;
            padding: 6px 10px;
        }
        .wrapper .pb_single_course_box .pb_single_course_content .pb_single_course_price{
            font-size:12px;
        }
    }
</style>



<div class="pb_course_page_container">
    <section class="all_courses_tab">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
    <div class="all_course_tab_content">
    </div>
    </div>
    </div>
    <div class="row">
    <div id="all_course_tabs" class="col-12">
    <div class="row justify-content-start">
    <div class="col-12 col-lg-8 offset-lg-2">
    <ul id="tab_buttons" class="nav" role="tablist">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown_button" href="#all_courses" role="button"><span>All Certification</span> <i class="fas fa-chevron-down"></i></i>
    </a>
    <div class="dropdown_menu_wrapper">
    <div class="dropdown-menu" id="allcourse_dropdown_menu">
    <div class="filter-button-group">
    <a class="dropdown-item all_course_filter_btn active" id="all_course_filter_all" href="javascript:void(0)">All Certification</a>
    <a class="dropdown-item all_course_filter_btn" id="24" href="javascript:void(0)">Marketing
    </a>
    <a class="dropdown-item all_course_filter_btn" id="22" href="javascript:void(0)">Office Application
    </a>
    <a class="dropdown-item all_course_filter_btn" id="15" href="javascript:void(0)">Design
    </a>
    <a class="dropdown-item all_course_filter_btn" id="20" href="javascript:void(0)">Web Development
    </a>
    <a class="dropdown-item all_course_filter_btn" id="15" href="javascript:void(0)">Design
    </a>
    </div>
    </div>
    </div>
    </li>
    <li class="nav-item">
    <a class="nav-link active" href="#upcoming_course">Upcoming
    Certification
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#old_course">Old Certification</a>
    </li>
    </ul>
    </div>
    </div>
    <div class="row">
    <div class="col-12">
    <div class="tab-content">
    <div id="all_courses"><br>
    <div class="wrapper">
    <div class="row" id="all_course_filter_">


    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="#">
    <img class="img-fluid" src="batch-images/main/650969040a5d3-2023-Sep-Tue-09-25-24.Digital-Marketing.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    21/11/2023</span>
    <span>Duration: 9
    hours</span>
    </div>
    <a href="#">
    <h6>Digital Marketing for Freelancing- Level 4 (NSDA) -
    Batch No : 2</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="{{route('apply_course')}}">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>


    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 22 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="rpl/computer-operation-level-03-nsda.html">
    <img class="img-fluid" src="batch-images/main/6533c7d6604ee-2023-Oct-Sat-12-45-10.Computer Operation.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    21/11/2023</span>
    <span>Duration: 8
    hours</span>
    </div>
    <a href="rpl/computer-operation-level-03-nsda.html">
    <h6>Computer Operation- Level 03 (NSDA) -
    Batch No : 16</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="apply-course/324.html">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="rpl/graphics-design-for-freelancing-level-3-nsda.html">
    <img class="img-fluid" src="batch-images/main/6519507e12ead-2023-Oct-Sun-10-57-02.Graphic-Design.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    31/10/2023</span>
    <span>Duration: 8
    hours</span>
    </div>
    <a href="rpl/graphics-design-for-freelancing-level-3-nsda.html">
    <h6>Graphics Design for Freelancing- Level 3 (NSDA) -
    Batch No : 4</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="apply-course/322.html">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 20 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="rpl/web-development-ntvqf-level-4-rpl.html">
    <img class="img-fluid" src="batch-images/main/643e0d82e6c72-2023-Apr-Tue-03-24-50.webdesignrpl.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    14/10/2023</span>
    <span>Duration: 8
    hours</span>
    </div>
    <a href="rpl/web-development-ntvqf-level-4-rpl.html">
    <h6>Web Development- NTVQF Level 4 (RPL) -
    Batch No : 5</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    2500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="rpl/web-development-ntvqf-level-4-rpl.html">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_all">
    <div class="pb_single_course_box">
    <a href="rpl/graphic-design-ntvqf-level-2-rpl.html">
    <img class="img-fluid" src="batch-images/main/WhatsApp Image 2022-03-07 at 5.42.17 PM.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    31/12/2022</span>
    <span>Duration: 8
    hours</span>
    </div>
    <a href="rpl/graphic-design-ntvqf-level-2-rpl.html">
    <h6>Graphic Design- NTVQF Level 2 (RPL) -
    Batch No : 3</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    2500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="rpl/graphic-design-ntvqf-level-2-rpl.html">
    See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div id="upcoming_course"><br>
    <div class="wrapper">
    <div class="row" id="all_course_filter_">
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col">
    <div class="pb_single_course_box">
    <a href="course/graphics-design-for-freelancing-level-3-nsda.html">
    <img class="img-fluid" src="batch-images/main/6519507e12ead-2023-Oct-Sun-10-57-02.Graphic-Design.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    31/10/2023</span>
    <span>Duration: 8 hours</span>
    </div>
    <a href="rpl/graphics-design-for-freelancing-level-3-nsda.html">
    <h6>Graphics Design for Freelancing- Level 3 (NSDA)</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="apply-course/322.html">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col">
    <div class="pb_single_course_box">
    <a href="course/digital-marketing-for-freelancing-level-4-nsda.html">
    <img class="img-fluid" src="batch-images/main/650969040a5d3-2023-Sep-Tue-09-25-24.Digital-Marketing.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    21/11/2023</span>
    <span>Duration: 9 hours</span>
    </div>
    <a href="rpl/digital-marketing-for-freelancing-level-4-nsda.html">
    <h6>Digital Marketing for Freelancing- Level 4 (NSDA)</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="apply-course/320.html">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 pb_single_course_col">
    <div class="pb_single_course_box">
    <a href="course/computer-operation-level-03-nsda.html">
    <img class="img-fluid" src="batch-images/main/6533c7d6604ee-2023-Oct-Sat-12-45-10.Computer Operation.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    21/11/2023</span>
    <span>Duration: 8 hours</span>
    </div>
    <a href="rpl/computer-operation-level-03-nsda.html">
    <h6>Computer Operation- Level 03 (NSDA)</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="apply-course/324.html">
    Apply Course
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div id="old_course"><br>
    <div class="wrapper">
    <div class="row" id="all_course_filter_">
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 22 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="rpl/computer-operation-level-03-nsda.html">
    <img class="img-fluid" src="batch-images/main/65312900edad5-2023-Oct-Thu-13-02-56.Computer Operation.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    20/10/2023</span>
    <span>Duration: 8
    hours</span>
    </div>
    <a href="rpl/computer-operation-level-03-nsda.html">
    <h6>Computer Operation- Level 03 (NSDA) -
    Batch No : 15</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="rpl/graphic-design-ntvqf-level-2-rpl.html">See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 20 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="rpl/web-development-ntvqf-level-4-rpl.html">
    <img class="img-fluid" src="batch-images/main/643e0d82e6c72-2023-Apr-Tue-03-24-50.webdesignrpl.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    14/10/2023</span>
    <span>Duration: 8
    hours</span>
    </div>
    <a href="rpl/web-development-ntvqf-level-4-rpl.html">
    <h6>Web Development- NTVQF Level 4 (RPL) -
    Batch No : 5</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    2500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="rpl/graphic-design-ntvqf-level-2-rpl.html">See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="rpl/graphics-design-for-freelancing-level-3-nsda.html">
    <img class="img-fluid" src="batch-images/main/64d39ee75218b-2023-Aug-Wed-14-12-55.Graphic-Design.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    01/10/2023</span>
    <span>Duration: 8
    hours</span>
    </div>
    <a href="rpl/graphics-design-for-freelancing-level-3-nsda.html">
    <h6>Graphics Design for Freelancing- Level 3 (NSDA) -
    Batch No : 3</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="rpl/graphic-design-ntvqf-level-2-rpl.html">See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 24 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="rpl/digital-marketing-for-freelancing-level-4-nsda.html">
    <img class="img-fluid" src="batch-images/main/643128a619f05-2023-Apr-Sat-08-41-10.Digital-Marketing.webp" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    05/09/2023</span>
    <span>Duration: 8
    hours</span>
    </div>
    <a href="rpl/digital-marketing-for-freelancing-level-4-nsda.html">
    <h6>Digital Marketing for Freelancing- Level 4 (NSDA) -
    Batch No : 1</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    3000.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="rpl/graphic-design-ntvqf-level-2-rpl.html">See Details
    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-12  col-md-6 col-lg-4 all_course_filter_item_ 15 pb_single_course_col_old">
    <div class="pb_single_course_box">
    <a href="rpl/graphic-design-ntvqf-level-2-rpl.html">
    <img class="img-fluid" src="batch-images/main/WhatsApp Image 2022-03-07 at 5.42.17 PM.jpg" alt="Course_image">
    </a>
    <div class="pb_single_course_content">
    <div class="date_time d-flex justify-content-between">
    <span>Start Date:
    31/12/2022</span>
    <span>Duration: 8
    hours</span>
    </div>
    <a href="rpl/graphic-design-ntvqf-level-2-rpl.html">
    <h6>Graphic Design- NTVQF Level 2 (RPL) -
    Batch No : 3</h6>
    </a>
    <div class="d-flex justify-content-between align-items-center">
    <span class="pb_single_course_price">Certification Fees :
    2500.00/- BDT</span>
    <a class="pb_single_course_apply_button" href="rpl/graphic-design-ntvqf-level-2-rpl.html">See Details
    </a>
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
    </div>
    </div>
    </section>
    </div>
@endsection