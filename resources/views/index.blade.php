@extends('layouts.app')
@section('title', 'Home')
@section('content') 
    <div class="hero-wrap" style="background-image: url('{{ asset('images/bg_12.jpg') }}')" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4"><span>It's easy for you</span> <span>to hire a Luxury car</span></h1>
            </div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
          	<form action="/" method="POST" class="request-form ftco-animate">
              @csrf
          		<h2>Book your trip</h2>
              @include('layouts.alert')
              <div class="form-group">
                      <label for="#" class="label">Fleets</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          {{-- <div class="icon"><span class="ion-ios-arrow-down"></span></div> --}}
                          <select name="fleets" id="" class="form-control">
                            <option disabled="true" selected="true">Select Fleet</option>
                            @foreach($fleets as $fleet)
                              <option value="{{ $fleet->car_name }}">{{ $fleet->car_name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
              <div class="form-group">
                <label for="" class="label">Pick-up location</label>
                <input type="text" required="" id="pick_up" name="pick_up" class="form-control" placeholder="City, Airport, Station, etc">
              </div>
	    				<div class="form-group">
	    					<label for="" class="label">Drop-off location</label>
	    					<input type="text" required="" id="drop_off" name="drop_off" class="form-control" placeholder="City, Airport, Station, etc">
	    				</div>
	    				<div class="d-flex">
	    					<div class="form-group mr-2">
	                <label for="" class="label">Pick-up date</label>
	                <input type="text" name="pick_date" required="" class="form-control" id="book_pick_date" placeholder="Date">
	              </div>
	              <div class="form-group ml-2">
	                <label for="" class="label">Drop-off date</label>
	                <input type="text" required="" name="drop_date" class="form-control" id="book_off_date" placeholder="Date">
	              </div>
              </div>
              <div class="form-group">
                <label for="" class="label">Pick-up time</label>
                <input type="text" name="pick_time" required="" class="form-control" id="time_pick" placeholder="Time">
              </div>
	            <div class="form-group">
	              <input type="submit" value="Book Now" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
          </div>
        </div>
      </div>
    </div>


  <section class="ftco-section services-section ftco-no-pt ftco-no-pb mt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading"></span>
            <h2 class="mb-2">Our Services</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-rent"></span></div>
                  <h3 class="heading mb-0 pl-3">Chauffeur Driven</h3>
                </div>
                <p>We are also offering professional chauffeur service all over the United Kingdom</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-online-booking"></span></div>
                  <h3 class="heading mb-0 pl-3">Business Class</h3>
                </div>
                <p>We offer Luxury Car like Mercedes,Rolls Royals,Range Rovers,Lamborgini and Ferrari</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-route"></span></div>
                  <h3 class="heading mb-0 pl-3">Replacement Car</h3>
                </div>
                <p>when you’re given a replacement car, but no money changes hands until the hire is over.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-rent"></span></div>
                  <h3 class="heading mb-0 pl-3">Self Driven</h3>
                </div>
                <p>Ride from home or from any of our conveniently located sites around your city.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-backpack"></span></div>
                  <h3 class="heading mb-0 pl-3">Pick & Drop Services</h3>
                </div>
                <p>Pick & Drop Services is available at your ease.Company will provide pick and drop services for School, Colleges, Universities and Academies</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
                <div class="d-flex mb-3 align-items-center">
                  <div class="icon"><span class="flaticon-review"></span></div>
                  <h3 class="heading mb-0 pl-3">Tours Service</h3>
                </div>
                <p>We offer you a wide range of luxurious cars, 4x4 SUV's,Conveniently located sites around your city.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
  </section>

  <section class="ftco-section">
      <div class="container-fluid px-4">
        <div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <span class="subheading">What we offer</span>
            <h2 class="mb-2">GET YOUR FLEET ON YOUR DOOR STEP</h2>
          </div>
        </div>
        <div class="row">
          @foreach($fleets as $fleet)
            @if ($loop->index == 4)
                @break
            @endif
            <div class="col-md-3">
              <div class="car-wrap ftco-animate">
                <div class="img d-flex align-items-end" style="background-image: url('admin/public/uploads/{{ $fleet->car_image1 }}')">
                  {{-- <div class="">
                  
                  </div> --}}
                </div>
                <div class="text p-4 text-center">
                  <h2 class="mb-0"><a href="/booking-form">{{ $fleet->car_name }}</a></h2>
                  <span>{{ $fleet->car_make }}</span>
                  {{-- <a href="/booking-form" class="btn btn-black btn-outline-black mr-1 ml-4">Book now</a>  --}}
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-12 text-center">
        <div class="form-group">
          <a href="/our-fleets" class="btn btn-primary py-3 px-4">View More Fleets</a>
        </div>        
      </div>
  </section>

    <section class="ftco-section services-section img" style="background-image: url('{{ asset('images/bg_2.jpg') }}')">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Work flow</span>
            <h2 class="mb-3">How it works</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                <h3>Pick Destination</h3>
                {{-- <p>A small river named Duden flows by their place and supplies it with you</p> --}}
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                <h3>Select Service</h3>
                {{-- <p>A small river named Duden flows by their place and supplies it with you</p> --}}
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                <h3>Choose A Car</h3>
                {{-- <p>A small river named Duden flows by their place and supplies it with you</p> --}}
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                <h3>Enjoy The Ride</h3>
                {{-- <p>A small river named Duden flows by their place and supplies it with you</p> --}}
              </div>
            </div>      
          </div>
    		</div>
    	</div>
    </section>

{{--     <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url('{{ asset('images/person_1.jpg') }}')">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url('{{ asset('images/person_2.jpg') }}')">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url('{{ asset('images/person_3.jpg') }}')">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url('{{ asset('images/person_1.jpg') }}')">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url('{{ asset('images/person_1.jpg') }}')">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

		<section class="ftco-section ftco-no-pt ftco-no-pb mt-5">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('images/about.jpg') }}')">
					</div>
					<div class="col-md-6 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section mb-5 pl-md-5">
	            <h2 class="mb-4">About Us</h2>

	            <p>Providing our clients with exactly what they want and when they want it are the core values that Luxury Car Hire UK was built. We have the largest fleet of luxury hire cars in the UK and each vehicle has been expertly serviced and maintained to ensure your experience is exceptional and unrivalled. All of our luxury hire cars within our fleet are in pristine condition and we have a car to suit every possible need and request.</p>
	            <p>We provide the finest supercars available on the market from; Ferrari Luxury Hire Car, Lamborghini’s and BMW Luxury Hire Car and are confident that you cannot find a more current and comprehensive stable of self drive hire vehicles anywhere else.
              We do not lease the vehicles so we can ensure each car is perfectly maintained prior to your hire and can deliver vehicles in record time. All of our luxury hire cars are available at competitive rates and are suitable for any purpose which include; self-drive hire, music videos, long lease, TV and filming, weddings, promotions and special events.</p>
	          </div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="/top-four-luxury-car-in-uk" class="block-20" style="background-image: url('{{ asset('images/image_111.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  {{-- <div><a href="#">July. 24, 2019</a></div> --}}
                  {{-- <div><a href="#">Admin</a></div> --}}
                  {{-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mt-2"><a href="/top-four-luxury-car-in-uk">Top Four Luxury Cars In UK</a></h3>
                <p>The new BMW 5 Series debuts extra norm and BMW Individual outside paint work...</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="/hire-british-luxury-car-for-one-of-the-most-prestigious-events" class="block-20" style="background-image: url('{{ asset('images/image_222.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  {{-- <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mt-2"><a href="/hire-british-luxury-car-for-one-of-the-most-prestigious-events">Hire British Luxury Car For One Of The Most Prestigious Events</a></h3>
                <p>Ascot Race course has been home to some of the greatest achievements in horseracing...</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="/the-best-lamborghini-to-hire-in-the-world" class="block-20" style="background-image: url('{{ asset('images/image_333.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  {{-- <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mt-2"><a href="/the-best-lamborghini-to-hire-in-the-world">The Best Lamborghini To Hire In The World</a></h3>
                <p>There’s no denying it Lamborghin is really are a thing of beauty. Hundreds of thousands of pounds...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @push('child-scripts')
  <script defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG88W-v53Oz2mnpSpSqk6OLANDh46HWG8&libraries=places&callback=activatePlacesSearch">
  </script>
  <script type="text/javascript">
        function activatePlacesSearch() {
          var input = document.getElementById('pick_up');
          var autocomplete = new google.maps.places.Autocomplete(input);
          var input = document.getElementById('drop_off');
          var autocomplete = new google.maps.places.Autocomplete(input);
        }
  </script>
  
  @endpush
  @endsection
