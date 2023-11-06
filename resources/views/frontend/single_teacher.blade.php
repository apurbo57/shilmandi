@extends('frontend.components.layouts')
@section('content')
<div class="container">
        <div class="row justify-content-md-center">
                    <div class="card " style="width: 50%; text-align: center;">
                            <img src="{{asset('images/kuddos.jpg')}}" class="card-img-top" alt="Image">
                            <div class="card-body">
                              <h5 class="card-title">Ala Uddin Kha</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                              </p>
                              <a href="#" class=""><i class="fa fa-phone"></i> 01755323215</a>
                              <a href="#" class=""><i class="fa fa-envelope"></i> sample@gmail.com</a>
                            </div>
                          </div>
        </div>
</div>
@endsection