@extends('frontend.components.layouts')
@section('content')
{{-- <h1 class="d-none">contact</h1>
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
</div> --}}


<div class="blog-list-area">
    <div class="container">
    <div class="row">
        <div class="section-header">
            <h2>Our Institute Campus</h2>
        </div>
    <div class="col-xl-7 col-lg-7 col-md-12">
    <div class="about-content single-sidebar">
    <img style="max-height: 600px;" src="images/about-us.jpg" alt="about-us -image">
    </div>
    </div>
      <div class="col-xl-5 col-lg-5 col-md-12">
        <div class="blog-right ">
          <div class="widget widget-thumb single-sidebar blog-single">
            <p>SYDTC Training Institute. We are helping people to develop their skills over the last 5 years. We know every skill is learnable and we make it easy for our students. Our main objective is to help our students in a platform where excellence and skills are the key points. We help with all our experiences &amp; learning strategies, which help to develop today's young talents.<br>Providing international standard training in Bangladesh and helping society to build up a skilled workforce. We encourage them to build themselves as self-reliant. Eventually, the culture is important for us and it forms our foundation.So make a wise choice and get to the future with our institution and have a hands-on learning experience today! </p>
            <p>SYDTC Training Institute. We are helping people to develop their skills over the last 5 years. We know every skill is learnable and we make it easy for our students. Our main objective is to help our students in a platform where excellence and skills are the key points. We help with all our experiences &amp; learning strategies, which help to develop today's young talents.<br>Providing international standard training in Bangladesh and helping society to build up a skilled workforce. We encourage them to build themselves as self-reliant. Eventually, the culture is important for us and it forms our foundation.So make a wise choice and get to the future with our institution and have a hands-on learning experience today! </p>

          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <style>
      .profile-wrapper {
                    width: 100%;
                    column-gap: 15px;
                    display: block;
                    align-items: center;
                    overflow: hidden;
                    margin: 0 auto;
                    width: 100%;
                }

                .inner-profile {
                    width: 100%;
                    column-gap: 15px;
                    padding: 25px 10px 10px 40px;
                    position: relative;
                    text-align: center;
                }

                .profile-image {
                    width: 135px;
                    height: 150px;
                    margin: 0 auto;
                    overflow: hidden;
                    box-shadow: -6px -10px 0px 0px rgba(208,2,27,1),
                                -7px -10px 0px 0px rgba(208,2,27,1),
                                -8px -10px 0px 0px rgba(208,2,27,1),
                                -9px -10px 0px 0px rgba(208,2,27,1),
                                -10px -10px 0px 0px rgba(208,2,27,1);
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
                    margin: 0 auto;
                }
                span.profile-name {
                    display: block;
                    font-size: 18px;
                    color: #FF5722;
                    font-weight: bold;
                }
                span.designation {
                    font-size: 14px;
                    font-weight: bold;
                    color: #000;
                }
    </style>
    <div class="container">
        <div class="section-header">
            <h2>Board of Director</h2>
        </div>
        <div class="row blog">


            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="profile-wrapper">
                    <a href="{{route('single-teacher',$chairman->id)}}">
                    <div class="inner-profile">
                        <div class="profile-image">
                            <img src="{{asset('uploads/teacher/'. $chairman->image)}}">
                        </div>
                          <div class="profile-details">
                            <span class="profile-name">{{$chairman->name}}</span>
                            <span class="designation">Chairman</span>
                          </div>
                    </div>
                    </a>
                </div>
             </div>
        </div>
        <div class="row blog">
            @foreach ($directors as $item)
                        <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="profile-wrapper">
                    <a href="{{route('single-teacher',$item->id)}}">
                    <div class="inner-profile">
                        <div class="profile-image">
                            <img src="{{asset('uploads/teacher/'. $item->image)}}">
                        </div>
                          <div class="profile-details">
                            <span class="profile-name">{{$item->name}}</span>
                            <span class="designation">{{$item->designation}}</span>
                          </div>
                    </div>
                    </a>
                </div>
             </div>

           @endforeach
         </div>
    </div>

    {{-- instructo pannel --}}
    <div class="container">
        <div class="section-header">
            <h2>Instructor's Pannel</h2>
        </div>
        <div class="row blog">

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="profile-wrapper">
                    <a href="{{route('single-teacher',$principle->id)}}">
                    <div class="inner-profile">
                        <div class="profile-image">
                            <img src="{{asset('uploads/teacher/'. $principle->image)}}">
                        </div>
                          <div class="profile-details">
                            <span class="profile-name">{{$principle->name}}</span>
                            <span class="designation">Principle</span>
                          </div>
                    </div>
                    </a>
                </div>
             </div>

        </div>
        <div class="row blog">
            @foreach ($instructors as $item)
            @if ($item->designation == 'Chairman'||$item->designation == 'Principal'||$item->designation == 'Director'||$item->designation == 'Director (Admin)'||$item->designation == 'Director (Training)'||$item->designation == 'Director (Finance)')

            @else
            <div class="col-xl-3 col-lg-3 col-md-12">
              <div class="profile-wrapper float-right">
                <a href="{{route('single-teacher',$item->id)}}">
                  <div class="inner-profile">
                      <div class="profile-image">
                          <img src="{{asset('uploads/teacher/'. $item->image)}}">
                      </div>
                        <div class="profile-details">
                          <span class="profile-name">{{$item->name}}</span>
                          <span class="designation">{{$item->designation}}</span>
                        </div>
                     </div>
                   </a>
                 </div>
           </div>
            @endif
            @endforeach
         </div>
         <div class="pagination">
            <div class="align-center">{{ $instructors->links('pagination::bootstrap-4') }} </div>
    </div>
    </div>

@endsection
