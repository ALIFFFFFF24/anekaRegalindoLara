@extends('layouts.web')

@section('content')
<div class="section1"> 
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-5 py-5">
          <div class="col-11">
            <h1 class="display-5 fw-bold lh-1 mb-3">Wood Department</h1>
            <p class="lead">The wood department is a bustling hub of craftsmanship and creativity. Nestled within the heart of our organization, it is a place where raw timber transforms into magnificent works of art and functional pieces that stand the test of time. Skilled artisans and passionate craftsmen meticulously shape, carve, and mold the wood, bringing forth its inherent beauty and unlocking its hidden potential. From intricate furniture pieces to finely crafted cabinets and stunning wooden sculptures, every creation is a testament to the dedication and expertise of our woodworkers.</p>
          </div>
        </div>
      </div> 
  </div>
  <div class="section2">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{url('client/images/image-006.jpg')}}" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Facilities</h1>
            <p class="lead">
                <strong>Facilities Include</strong>
                <br>
                - Saw Mill <br>
                - Vacuum Wood Treatment <br>
                - Kiln Dry <br>
                - UV Coating <br>
                - Complete Machinery For Making Wooden Furniture <br>
            </p>
          </div>
        </div>
      </div> 
  </div>
  <div class="section3">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-5 py-5">
          <div class="col">
            <h1 class="display-5 fw-bold lh-1 mb-3">Materials</h1>
            <p class="lead">At our furniture manufacturing company, we pride ourselves on our exceptional use of diverse and exquisite wood materials. Mindi, teak, mango wood, albasia, and mahogany are the soul of our creations, each bringing its unique character and charm to the finished pieces. Mindi wood, with its distinct grain patterns and warm tones, lends an inviting elegance to our furniture designs. Teak, renowned for its durability and natural resistance to decay, adds a touch of timeless sophistication to our collections. Mango wood, celebrated for its vibrant colors and beautiful variations, infuses our furniture with a sense of rustic allure. Albasia, a lightweight and sustainable wood, allows us to craft pieces that are both eco-friendly and aesthetically pleasing. Lastly, mahogany, with its rich reddish-brown hue and exquisite texture, lends an air of luxury and refinement to our furniture creations. Our skilled artisans carefully select and work with these premium woods, ensuring that every piece we produce reflects the inherent beauty and quality of these exceptional materials. From elegant dining tables to comfortable sofas and intricately carved bed frames, our furniture exemplifies the harmonious marriage between craftsmanship and the inherent beauty of mindi, teak, mango wood, albasia, and mahogany.
            </p>
          </div>
        </div>
      </div> 
  </div>
  <div class="section4">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
              </svg>
              <h5 class="card-title">Production Capacity</h5>
              <p class="card-text">
                    <p id="wood-containers">0</p> containers per month  
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card text-center">
            <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                  </svg>
              <h5 class="card-title">Workers</h5>
              <p class="card-text"><p id="wood-workers">0</p> peoples</p>
            </div>
          </div>
        </div>
      </div>
      </div> 
  </div>
  <div class="section7">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Wood Products</h1>
          </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-6">
                <a href="{{ url('client/images')}}/{{$product->photo}}" data-toggle="lightbox">
                  <img class="img-fluid img-thumbnail" src="{{ url('client/images')}}/{{$product->photo}}" alt="">
                </a>
              </div>
              @endforeach
          </div>
      </div> 
  </div>
  <script>
    function animate(obj, initVal, lastVal, duration) {
       let startTime = null;

    //get the current timestamp and assign it to the currentTime variable
    let currentTime = Date.now();

    //pass the current timestamp to the step function
    const step = (currentTime ) => {

    //if the start time is null, assign the current time to startTime
    if (!startTime) {
       startTime = currentTime ;
    }

    //calculate the value to be used in calculating the number to be displayed
    const progress = Math.min((currentTime - startTime)/ duration, 1);

    //calculate what to be displayed using the value gotten above
    obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

    //checking to make sure the counter does not exceed the last value (lastVal)
    if (progress < 1) {
       window.requestAnimationFrame(step);
    } else {
          window.cancelAnimationFrame(window.requestAnimationFrame(step));
       }
    };
    //start animating
       window.requestAnimationFrame(step);
    }
    let containers = document.getElementById('wood-containers');
    let workers = document.getElementById('wood-workers');
    const load = () => {
       animate(containers, 0, 20, 2000);
       animate(workers, 0, 200, 2000);
    }
 </script>
@endsection