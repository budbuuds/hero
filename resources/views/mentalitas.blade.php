@extends('layouts.user')

@section('content')
    
<section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        {{-- <h2>Services</h2> --}}
        <p>Kesehatan Mental</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <i class="ri-discuss-line icon"></i>
            <h3>Agresivitas</h3>
            <p>Tingkat Agresivitas</p>
            <a href="#" class="read-more"><span>Mulai</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <i class="ri-discuss-line icon"></i>
            <h3>Motivasi</h3>
            <p>Tingkat Motivasi</p>
            <a href="#" class="read-more"><span>Mulai</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box green">
            <i class="ri-discuss-line icon"></i>
            <h3>Stress</h3>
            <p>Tingkat Stress</p>
            <a href="#" class="read-more"><span>Mulai</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Services Section -->

@endsection