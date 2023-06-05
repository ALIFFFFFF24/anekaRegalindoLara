@extends('layouts.web')

@section('content')
@php
$no = 0;
@endphp
@foreach ($homes as $home)
@php
    $cek = (($no % 2) == 0) ? 'flex-lg-row-reverse' : ''; 
@endphp
    @php
    $no++
    @endphp
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row {{ $cek }} align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="{{ url('client/images')}}/{{$home->image}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">{{$home->title}}</h1>
          <p class="lead">{{$home->caption}}</p>
        </div>
      </div>
      <hr>
    </div> 
@endforeach
  <div class="section4">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <div class="card-body text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
              </svg>
              <h5 class="card-title">Production Capacity</h5>
              <p class="card-text">
                <br>
                    wood - 20 containers per month <br>  
                    rattan - 10 containers per month <br>
                    outdoor - 40 containers per month <br>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-center">
            <div class="card-body">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
              <h5 class="card-title">Customers</h5>
              <p class="card-text">ISHINO RATTAN Ltd - Japan,
                SEAWINDS Trading Co. - USA,
                WESTELM - USA,
                MECOX - USA,
                CANAFOAM - Canada</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card text-center">
            <div class="card-body">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
              </svg>
              <h5 class="card-title">Production Lead Time</h5>
              <p class="card-text">
                Sample 1 – 4 weeks depends on the design difficulties
                Regular 30 - 45 days on low season
                45 - 60 days on peak season
              </p>
            </div>
          </div>
        </div>
      </div>
      </div> 
  </div>
  <div id="contact" class="section7">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Jl.%20Raya%20Trosobo%20No.111,%20Sabowidoro,%20Trosobo,%20Kec.%20Taman,%20Kabupaten%20Sidoarjo,%20Jawa%20Timur%2061257+(PT%20ANEKA%20REGALINDO)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Contact Us</h1>
            <p class="lead">
              No. 111 Jalan Raya Trosobo, Taman, Sidoarjo, East Java 61257
              <br>
              <h4 style="font-weight: bold"> Indoor Furniture Inquiry</h4>
              wood@anekaregalindo.com <br>
              rattan@anekaregalindo.com
              <br>
              <br>
              <h4 style="font-weight: bold">Outdoor Furniture Inquiry </h4>
              outdoor@anekaregalindo.com
            </p>
          </div>
        </div>
      </div> 
  </div>
@endsection