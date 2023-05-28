@extends('layouts.web')

@section('content')
<div class="section1"> 
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-5 py-5">
          <div class="col-11">
            <h1 class="display-5 fw-bold lh-1 mb-3">Rattan Department</h1>
            <p class="lead">
              The rattan department at our organization is a haven of creativity and craftsmanship, dedicated to harnessing the natural beauty and versatility of rattan. As one enters this bustling section, they are greeted by the sight of skilled artisans meticulously weaving and shaping slender rattan strands into stunning furniture pieces and decorative items. Rattan, with its flexible and durable nature, offers endless possibilities for creating unique and eye-catching designs. Our talented craftsmen and craftswomen utilize traditional weaving techniques passed down through generations, combining them with contemporary styles to produce exquisite rattan furniture that seamlessly blends timeless charm with modern aesthetics. From elegant rattan chairs and intricate woven baskets to intricate lampshades and intricate room dividers, each creation showcases the artistry and dedication of our rattan artisans. The rattan department is not just a workspace; it is a celebration of nature's gift and an ode to the beauty of handcrafted furniture. With a commitment to sustainability, we source our rattan materials responsibly, ensuring that our creations not only adorn spaces but also contribute to a greener and more eco-conscious future.
            </p>
          </div>
        </div>
      </div> 
  </div>
  <div class="section2">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{url('client/images/facilities/7.jpg')}}" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Facilities</h1>
            <p class="lead">
                <strong>Facilities Include</strong>
                <br>
                - Disinfection Pool <br>
                - High-power Steamer <br>
                - Overhang Finishing Facility <br>
                - Complete Machinery For Making Rattan Furniture <br>
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
            <p class="lead">
              At our furniture manufacturing company, we pride ourselves on utilizing a diverse range of exquisite materials to craft exceptional pieces. We harness the natural beauty of batang, tohiti, and lambang core woods, each with its unique grain patterns and rich tones, to create furniture that exudes warmth and elegance. Rattan peel and rattan flat over cover are meticulously woven, adding a touch of intricate craftsmanship to our designs. Water hyacinth and sea grass, harvested responsibly, provide texture and a rustic charm to our furniture pieces. Banana bark, known for its strength and flexibility, is skillfully incorporated into our creations, adding a touch of natural authenticity. Additionally, leather, with its timeless appeal and luxurious feel, elevates our furniture to new heights of sophistication. Each material is thoughtfully selected and integrated into our designs, ensuring that every piece we produce reflects the inherent beauty and quality of these exceptional materials. From stunning dining sets to cozy armchairs and intricate coffee tables, our furniture exemplifies the harmonious fusion of craftsmanship and the natural allure of batang, tohiti, lambang core, rattan peel, rattan flat over cover, water hyacinth, sea grass, banana bark, and leather.
            </p>
          </div>
        </div>
      </div> 
  </div>
  <div class="section4">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body text-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
              </svg>
              <h5 class="card-title">Production Capacity</h5>
              <p class="card-text">
                    <p id="rattan-containers">0</p> containers per month  
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center">
            <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                  </svg>
              <h5 class="card-title">Workers</h5>
              <p class="card-text"><p id="rattan-workers">0</p> peoples</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center">
            <div class="card-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                  </svg>
              <h5 class="card-title">Weavers</h5>
              <p class="card-text"><p id="rattan-weavers">0</p> peoples</p>
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
            <h1 class="display-5 fw-bold lh-1 mb-3">Rattan Products</h1>
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
    let containers = document.getElementById('rattan-containers');
    let workers = document.getElementById('rattan-workers');
    let weavers = document.getElementById('rattan-weavers');
    const load = () => {
       animate(containers, 0, 10, 5000);
       animate(workers, 0, 50, 5000);
       animate(weavers, 0, 50, 5000);
    }
 </script>
@endsection