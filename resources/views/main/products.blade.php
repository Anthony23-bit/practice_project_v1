@extends('template.default')
@section('contents')

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to Maxim</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Steps Section ======= -->
    <section id="steps" class="steps section-bg">
      <div class="container">
        <div class="row no-gutters">
@foreach($products as $item)
@if($loop->odd)
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
          <span>{{$item->id}}</span>
            <h4>{{$item->product_title}}</h4>
            <p>{{$item->product_desc}}</p>
          </div>
@else
          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="100">
          <span>{{$item->id}}</span>
            <h4>{{$item->product_title}}</h4>
            <p>{{$item->product_desc}}</p>
          </div>

        </div>

      </div>
    </section><!-- End Steps Section -->

  </main><!-- End #main -->
@endif
@endforeach
@endsection