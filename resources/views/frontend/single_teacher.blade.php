@extends('frontend.components.layouts')
@section('content')
<div class="blog-list-area section-padding">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-8 col-md-12">
        <div class="about-content single-sidebar">
          <img src="{{asset('images/kuddos.jpg')}}" class="card-img-top" alt="Image" style="width:350px; height:350px; margin:0 auto;">
          <h4>Abdul Kuddos</h4>
          <p>SYDTC Training Institute. We are helping people to develop their skills over the last 5 years. </p>
          
          <a href="#" class=""><i class="fa fa-phone"></i> 01755323215</a>
          <a href="#" class=""><i class="fa fa-envelope"></i> sample@gmail.com</a>
        </div>
      </div>
          <div class="col-xl-4 col-lg-4 col-md-12">
            <div class="blog-right ">
            <div class="widget widget-thumb single-sidebar blog-single">
            <h3>Latest Notice</h3>
            <ul class="thumb_post">
            <li>
            <img src="images/64d1e6ef03e2c-2023-Aug-Tue-06-55-43.For%20web.webp" alt="Full Stack Flutter: Building Dynamic Apps &amp; Games with Firebase, Spring Boot and Flame Engine">
            <h4><a href="#">Full Stack Flutter: Building Dynamic Apps &amp; Games with Firebase, Spring Boot and Flame Engine Batch No : 1</a></h4>
            <p class="post-date">15 Nov, 2023</p>
            </li>
            <li>
            <img src="images/650969040a5d3-2023-Sep-Tue-09-25-24.Digital-Marketing.webp" alt="Digital Marketing for Freelancing- Level 4 (NSDA)">
            <h4><a href="#">Digital Marketing for Freelancing- Level 4 (NSDA) Batch No : 2</a></h4>
            <p class="post-date">21 Nov, 2023</p>
            </li>
            <li>
            <img src="images/6533c7d6604ee-2023-Oct-Sat-12-45-10.Computer%20Operation.webp" alt="Computer Operation- Level 03 (NSDA)">
            <h4><a href="#">Computer Operation- Level 03 (NSDA) Batch No : 16</a></h4>
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
@endsection