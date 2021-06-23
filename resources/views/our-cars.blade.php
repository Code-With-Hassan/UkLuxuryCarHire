@extends('layouts.app')
@section('title', 'Our Cars')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_04.jpg') }}');" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
         <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span> Fleets <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Fleet</h1>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section">
   <div class="container">
      <div class="row">
         @foreach($fleets as $fleet)
            <!-- Start Fleet -->
            <div class="col-md-4">
               <div class="car-wrap ftco-animate">
                  <a data-toggle="modal" data-target="#myModal{{$loop->index}}">
                     <div class="img d-flex align-items-end" style="background-image: url('admin/public/uploads/{{ $fleet->car_image1 }}')">
                     </div>
                  </a>
                  <div class="text p-4 text-center">
                     <h2 class="mb-0"><a href="#">{{ $fleet->car_name }}</a>
                     </h2>
                     <span>{{ $fleet->car_make }}</span>
                  </div>
               </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal{{$loop->index}}" role="dialog">
               <div class="modal-dialog  modal-lg">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4 class="modal-title">{{ $fleet->car_name }}</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body">
                        <div class="row">
                           <div class="col-md-12 mb-2">
                              <div id="custCarousel{{$loop->index}}" class="carousel slide" data-ride="carousel" align="center">
                                 <!-- slides -->
                                 <div class="carousel-inner">
                                    <div class="carousel-item active"> <img src="admin/public/uploads/{{ $fleet->car_image1 }}"> </div>
                                    <div class="carousel-item"> <img src="admin/public/uploads/{{ $fleet->car_image2 }}"> </div>
                                    <div class="carousel-item"> <img src="admin/public/uploads/{{ $fleet->car_image3 }}"> </div>
                                    <div class="carousel-item"> <img src="admin/public/uploads/{{ $fleet->car_image4 }}"> </div>
                                 </div>
                                 <!-- Left right -->
                                 <a class="carousel-control-prev" href="#custCarousel{{$loop->index}}" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#custCarousel{{$loop->index}}" data-slide="next"> <span class="carousel-control-next-icon"></span> </a> <!-- Thumbnails -->
                                 <ol class="carousel-indicators list-inline">
                                    <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel{{$loop->index}}"> <img src="admin/public/uploads/thumb/{{ $fleet->car_image1 }}" class="img-fluid"> </a> 
                                    </li>
                                    <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel{{$loop->index}}"> <img src="admin/public/uploads/thumb/{{ $fleet->car_image2 }}" class="img-fluid"> </a> 
                                    </li>
                                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel{{$loop->index}}"> <img src="admin/public/uploads/thumb/{{ $fleet->car_image3 }}" class="img-fluid"> </a>
                                    </li>
                                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel{{$loop->index}}"> <img src="admin/public/uploads/thumb/{{ $fleet->car_image4 }}" class="img-fluid"> </a>
                                    </li>
                                 </ol>
                              </div>
                           </div>
                           <div class="col-md-12 mt-5">
                              <div class="car-details">
                                 <div class="text text-center">
                                    <h2 class="mb-0">{{ $fleet->car_name }}</h2>
                                    <span class="mb-2 subheading">{{ $fleet->car_make }}</span>
                                    <div>{{ $fleet->car_description }}</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <form action="/" method="POST" class="request-form ftco-animate">
                                 @csrf
                                 <input type="hidden" name="fleets" value="{{ $fleet->car_name }}">
                                 <div class="d-flex">
                                    <div class="form-group mr-2">
                                       <label for="" class="label">Pick-up location</label>
                                       <input type="text" required="" name="pick_up" id="pick_up{{$loop->index}}" class="form-control" placeholder="City, Airport, Station, etc">
                                    </div>
                                    <div class="form-group mr-2">
                                       <label for="" class="label">Drop-off location</label>
                                       <input type="text" required="" id="drop_off{{$loop->index}}" name="drop_off" class="form-control" placeholder="City, Airport, Station, etc">
                                    </div>
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
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Fleet -->
         @endforeach
      </div>
   </div>
</section>
@push('child-scripts')
<script defer
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG88W-v53Oz2mnpSpSqk6OLANDh46HWG8&libraries=places&callback=activatePlacesSearch"></script>
   <script type="text/javascript">
      function activatePlacesSearch() {
         @foreach($fleets as $fleet)
            var input = document.getElementById('pick_up{{$loop->index}}');
            var autocomplete = new google.maps.places.Autocomplete(input);
            var input = document.getElementById('drop_off{{$loop->index}}');
            var autocomplete = new google.maps.places.Autocomplete(input);
         @endforeach
      }
   </script>
@endpush
@push('child-styles')
<style>
   @foreach($fleets as $fleet)
      #custCarousel{{$loop->index}} .carousel-indicators {
      position: static;
      margin-top: 20px;
      }
      #custCarousel{{$loop->index}} .carousel-indicators>li {
         width: 100px;
      }
      #custCarousel{{$loop->index}} .carousel-indicators li img {
         display: block;
         opacity: 0.5 
      }
      #custCarousel{{$loop->index}} .carousel-indicators li.active img {
         opacity: 1 
      }
      #custCarousel{{$loop->index}} .carousel-indicators li:hover img {
         opacity: 0.75 
      }
   @endforeach
</style>
@endpush
@endsection