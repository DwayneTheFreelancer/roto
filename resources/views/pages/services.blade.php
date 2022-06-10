@extends('layouts.main')

@section('title', 'Services')

@section('content')
    <section>
        <div class="services-header">
            <img style="object-fit: cover; object-position: center" src="images/services-car-wash.jpg" alt="" width="100%" height="400px">
        </div>
    </section>
    <div class="container service-options mt-5 mb-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="images/srt-hellcat.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
              <div class="card-body">
                <h5 class="card-title">Service 1</h5>
                <p class="card-text">
                  This is a longer card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/srt-hellcat.jpg" class="card-img-top" alt="Palm Springs Road"/>
              <div class="card-body">
                <h5 class="card-title">Service 2</h5>
                <p class="card-text">
                  This is a longer card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/srt-hellcat.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
              <div class="card-body">
                <h5 class="card-title">Service 3</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="images/srt-hellcat.jpg" class="card-img-top" alt="Skyscrapers"/>
              <div class="card-body">
                <h5 class="card-title">Service 4</h5>
                <p class="card-text">
                  This is a longer card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection