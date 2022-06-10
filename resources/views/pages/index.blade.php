@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="container-fluid home-header">
        <div class="container header-details">
            <h1 class="text-center color-white mb-5">Welcome to Roto Mobile Car Wash / Detailing</h1>
            <a class="text-uppercase" href="#">Book Car Wash</a>
        </div>
    </div>
    <section class="">
    <div class="container display-row">
        <div class="row">
            <div class="col-md-6 bg-image hover-zoom p-0 display-details">
                <img src="images/jason-car.jpg" alt="">
            </div>
            <div class="col-md-6 bg-image hover-zoom p-0 display-details">
                <img src="images/inside-jason-car.jpeg" alt="">
            </div>
        </div>
    </div>
    </section>
    <div class="container our-services mt-5 mb-5">
        <h1 class="text-center mb-3">Services Provided</h1>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="images/soapy-car.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                  <div class="card-body">
                    <h5 class="card-title">Exterior Wash</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a style="background-color: #00AA23" href="#!" class="btn">Learn More</a>
                  </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="images/interior-detail.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                  <div class="card-body">
                    <h5 class="card-title">Exterior + Interior Detail</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a style="background-color: #00AA23" href="#!" class="btn">Learn More</a>
                  </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="images/soapy-car.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                  <div class="card-body">
                    <h5 class="card-title">Advanced Package</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a style="background-color: #00AA23" href="#!" class="btn">Learn More</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container work-flow">
        <div class="row">
            <div class="col-md-6 text-center">
                {{-- <ul> --}}
                    <h1>Service Locations</h1>
                    <h5>Brooklyn</h5>
                    <h5>Queens</h5>
                {{-- </ul> --}}
            </div>
            <div class="col-md-6 text-center">
                <h1>Business Hours</h1>
                <div class="text-danger mb-3">(Business Hours May Vary)</div>
                <ul>
                    <li>Sunday: 10:00am - 5:00pm</li>
                    <li>Monday: 10:00am - 5:00pm</li>
                    <li>Tuesday: 10:00am - 5:00pm</li>
                    <li>Wednesday: 10:00am - 5:00pm</li>
                    <li>Thursday: 10:00am - 5:00pm</li>
                    <li>Friday: 10:00am - 5:00pm</li>
                    <li>Saturday: 10:00am - 5:00pm</li>
                </ul>
            </div>
        </div>
    </div>
@endsection