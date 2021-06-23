@extends('layouts.app')
@section('title', 'Booking Form')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_03.jpg') }}');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   		<div class="container">
      		<div class="row no-gutters slider-text js-fullheight align-items-end  justify-content-start">
        		<div class="col-md-9 ftco-animate pb-5">
            		<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Booking Form <i class="ion-ios-arrow-forward"></i></span></p>
           			 <h1 class="mb-3 bread">Book Your Journey Here</h1>
         		</div>
      		</div>
   		</div>
</section>
<div class="site-section pt-0 pb-0 bg-light">
   <div class="container">
      <div class="row1"  >
         <div class="col-lg-12">
            <form action="/booking-form" method="POST" class="request-form ftco-animate">
               @csrf
               <h2>Book Your Ride</h2>
                @include('layouts.alert')
               <div class="d-flex mt-5">
                  <div class="form-group mr-2">
                     <label for="" class="label">Pick-up location</label>
                     <input type="text" class="form-control" placeholder="City, Airport, Station, etc" required name="pick_up" id="pick_up">
                  </div>
                  <div class="form-group ml-2">
                     <label for="" class="label">Drop-off location</label>
                     <input type="text" class="form-control" placeholder="City, Airport, Station, etc" required name="drop_off" id="drop_off">
                  </div>
               </div>
               <div class="d-flex">
                  <div class="form-group mr-2">
                     <label for="" class="label">Pick-up date</label>
                     <input type="text" class="form-control" id="book_pick_date" placeholder="Date" required name="pick_date">
                  </div>
                  <div class="form-group ml-2">
                     <label for="" class="label">Drop-off date</label>
                     <input type="text" class="form-control" id="book_off_date" placeholder="Date" required name="drop_date">
                  </div>
               </div>
               <div class="d-flex">
                  <div class="form-group mr-2">
                     <label for="" class="label">Your Name</label>
                     <input type="text" required class="form-control" id="name" placeholder="Name" name="name">
                  </div>
                  <div class="form-group ml-2">
                     <label for="" class="label">Email Address</label>
                     <input type="text" required class="form-control" id="email" placeholder="Email" name="email">
                  </div>
               </div>
               <div class="d-flex">
                  <div class="form-group">
                     <label for="" class="label">Pick-up time</label>
                     <input type="text" required class="form-control" id="time_pick" placeholder="Time" class="pick_time">
                  </div>
                  <div class="form-group ml-2">
                     <label for="" class="label">Phone Number</label>
                     <input type="text" required class="form-control" id="number" placeholder="Number" name="number">
                  </div>
                  <div class="form-group ml-2">
                     <label for="" class="label">Seats</label>
                     <input type="text" required class="form-control" id="number" placeholder="Seats" name="seats">
                  </div>
               </div>
               <div class="form-group col-md-12">
                  <label for="" class="label">Note</label>
                  <textarea  name="note" required class="form-control" placeholder="Write your message." cols="30" rows="10" required></textarea>
               </div>
               <div class="form-group">
                  <input type="submit" value="Submit" class="btn btn-primary py-3 px-4">
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
</div>
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