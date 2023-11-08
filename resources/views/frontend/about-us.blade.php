@extends('frontend.components.layouts')
@section('content')
<h1 class="d-none">contact</h1>
<h3 class="d-none">Shilmandi Youth Development Training Center</h3>
<div class="contact-area-bradcome">
<div class="container">
<div class="row">
<div class="col-xl-6 offset-xl-3">
<div class="bradecome-content text-center wow animated zoomIn" data-wow-duration="2s">
<h2>ABOUT US</h2>
</div>
</div>
</div>
</div>
</div>


<div class="blog-list-area section-padding">
    <div class="container">
    <div class="row">
    <div class="col-xl-8 col-lg-8 col-md-12">
    <div class="about-content single-sidebar">
    <h4>What we are?</h4>
    <img src="images/about-us.jpg" alt="about-us -image">
    <p>SYDTC Training Institute. We are helping people to develop their skills over the last 5 years. We know every skill is learnable and we make it easy for our students. Our main objective is to help our students in a platform where excellence and skills are the key points. We help with all our experiences &amp; learning strategies, which help to develop today's young talents.<br>Providing international standard training in Bangladesh and helping society to build up a skilled workforce. We encourage them to build themselves as self-reliant. Eventually, the culture is important for us and it forms our foundation.So make a wise choice and get to the future with our institution and have a hands-on learning experience today! </p>
    </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-12">
    <div class="blog-right ">
    <div class="widget widget-thumb single-sidebar blog-single">
    <h3>Latest Notice</h3>
    <ul class="thumb_post">
    <li>
    <img src="images/64d1e6ef03e2c-2023-Aug-Tue-06-55-43.For%20web.webp" alt="Full Stack Flutter: Building Dynamic Apps &amp; Games with Firebase, Spring Boot and Flame Engine">
    <h4><a href="https://www.pencilbox.edu.bd/training/309/full-stack-flutter-building-dynamic-apps-games-with-firebase-spring-boot-and-flame-engine">Full Stack Flutter: Building Dynamic Apps &amp; Games with Firebase, Spring Boot and Flame Engine Batch No : 1</a></h4>
    <p class="post-date">15 Nov, 2023</p>
    </li>
    <li>
    <img src="images/650969040a5d3-2023-Sep-Tue-09-25-24.Digital-Marketing.webp" alt="Digital Marketing for Freelancing- Level 4 (NSDA)">
    <h4><a href="https://www.pencilbox.edu.bd/training/320/digital-marketing-for-freelancing-level-4-nsda">Digital Marketing for Freelancing- Level 4 (NSDA) Batch No : 2</a></h4>
    <p class="post-date">21 Nov, 2023</p>
    </li>
    <li>
    <img src="images/6533c7d6604ee-2023-Oct-Sat-12-45-10.Computer%20Operation.webp" alt="Computer Operation- Level 03 (NSDA)">
    <h4><a href="https://www.pencilbox.edu.bd/training/324/computer-operation-level-03-nsda">Computer Operation- Level 03 (NSDA) Batch No : 16</a></h4>
    <p class="post-date">21 Nov, 2023</p>
    </li>
    </li>
    </ul>
    <a href="{{route('notice')}}" class="btn-primary p-1">See More</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
        <!-- ======= Our Team Section ======= -->
        <style>
/* PROFIL */
.blog .carousel-indicators {
	left: 0;
	top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 8px;
    margin-bottom:10px;
    
}

.blog .carousel-indicators .active {
background: #707070;
margin-bottom:10px;
}

.our-team-section {
  position: relative;
  padding-top: 40px;
  padding-bottom: 40px;
}
.our-team-section:before {
  position: absolute;
  top: -0;
  left: 0;
  content: " ";
  background: url(img/service-section-bottom.png);
  background-size: 100% 100px;
  width: 100%;
  height: 100px;
  float: left;
  z-index: 99;
}
.our-team {
  padding: 0 0 40px;
  background: #f9f9f9;
  text-align: center;
  overflow: hidden;
  position: relative;
  border-bottom: 5px solid #00325a;
}
.our-team:hover {
  border-bottom: 5px solid #2f2f2f;
}

.our-team .pic {
  display: inline-block;
  width: 130px;
  height: 130px;
  margin-bottom: 50px;
  z-index: 1;
  position: relative;
}
.our-team .pic:before {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #00325a;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 1;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}
.our-team:hover .pic:before {
  height: 100%;
  background: #2f2f2f;
}
.our-team .pic:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #ffffff00;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  transition: all 0.3s linear 0s;
}
.our-team:hover .pic:after {
  background: #145889;
}
.our-team .pic img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
  position: relative;
  z-index: 2;
}
.our-team:hover .pic img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}
.our-team .team-content {
  margin-bottom: 30px;
}
.our-team .title {
  font-size: 22px;
  font-weight: 700;
  color: #4e5052;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin-bottom: 5px;
}
.our-team .post {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}
.our-team .social {
  width: 100%;
  padding-top: 10px;
  margin: 0;
  background: #2f2f2f;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}
.our-team:hover .social {
  bottom: 0;
}
.our-team .social li {
  display: inline-block;
}
.our-team .social li a {
  display: block;
  padding-top: 6px;
  font-size: 15px;
  color: #fff;
  transition: all 0.3s ease 0s;
}
.our-team .social li a:hover {
  color: #145889;
  background: #f7f5ec;
}
@media only screen and (max-width: 990px) {
  .our-team {
    margin-bottom: 10px;
  }
}
        </style>
        <div class="container">
                <div class="row blog">
                        <div class="section-header">
                            <h2>Our Team</h2>
                        </div>
                   
                   <div class="col-md-12">
            
                            <!-- Carousel items -->
                            <div class="carousel-inner">
            
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($data as $item)
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="our-team">
                                                <div class="pic">
                                                    <img src="{{asset('uploads/teacher/'. $item->image)}}">
                                                </div>
                                                <div class="team-content">
                                                    <h3 class="title">{{$item->name}}</h3>
                                                    {{-- <span class="post">Customer Support</span> --}}
                                                </div>
                                                <ul class="social">
                                                    <li>
                                                        <a href="{{route('single-teacher',$item->id)}}" class="fa fa-user-circle"> See More</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.item-->
                                
                                <!--.item-->
            
                            </div>
                            <!--.carousel-inner-->
                        </div>
                        <!--.Carousel-->
            
                    </div>
                    <div class="pagination">
                            <div class="align-center">{{ $data->links('pagination::bootstrap-4') }} </div>
                    </div>
            </div>
        <!-- End Our Team Section -->
@endsection