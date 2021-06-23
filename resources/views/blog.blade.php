@extends('layouts.app')
@section('title', 'Our Blogs')
@section('content')    
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Read Our Latest Blogs</h1>
          </div>
        </div>
      </div>
</section>
<section class="ftco-section">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="/top-four-luxury-car-in-uk" class="block-20 img" style="background-image: url('{{ asset('images/image_10.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">June 11, 2021</a></div>
                  <div><a href="#">Admin</a></div>
                  {{-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mt-2"><a href="/top-four-luxury-car-in-uk">Top Four Luxury Cars In UK</a></h3>
                <p>The new BMW 5 Series debuts extra norm and BMW Individual outside paint work...</p>
                <p><a href="/top-four-luxury-car-in-uk" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="/hire-british-luxury-car-for-one-of-the-most-prestigious-events" class="block-20 img" style="background-image: url('{{ asset('images/image_20.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">June 07, 2021</a></div>
                  <div><a href="#">Admin</a></div>
                  {{-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mt-2"><a href="/hire-british-luxury-car-for-one-of-the-most-prestigious-events">Hire British Luxury Car For One Of The Most Prestigious Events</a></h3>
                <p>Ascot Race course has been home to some of the greatest achievements in horseracing...</p><a href="/hire-british-luxury-car-for-one-of-the-most-prestigious-events" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="/the-best-lamborghini-to-hire-in-the-world" class="block-20 img" style="background-image:  url('{{ asset('images/image_30.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">June 1, 2021</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="/the-best-lamborghini-to-hire-in-the-world">The Best Lamborghini To Hire In The World</a></h3>
                <p>There’s no denying it Lamborghin is really are a thing of beauty. Hundreds of thousands of pounds...</p><a href="/the-best-lamborghini-to-hire-in-the-world" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          {{-- <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="/blog-single" class="block-20 img" style="background-image: url('images/image_4.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="/blog-single" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div> --}}
         {{--  <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="/blog-single" class="block-20 img" style="background-image: url('images/image_5.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="/blog-single" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div> --}}
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="/hire-a-bentley-for-wedding-in-uk" class="block-20 img" style="background-image: url('{{ asset('images/image_60.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">May. 24, 2021</a></div>
                  <div><a href="#">Admin</a></div>
                  {{-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mt-2"><a href="/hire-a-bentley-for-wedding-in-uk">Hire a Bently For Wedding in UK.The Most Luxurious Mode Of Transport</a></h3>
                <p>Regardless of your theme, budget or tastes, one thing is agreed by most brides your wedding transport should be...</p>
                <p><a href="/hire-a-bentley-for-wedding-in-uk" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class=""><a href="/blog">1</a></li>
                <li class=""><a href="/blogs">2</a></li>
                {{-- <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li> --}}
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</section>
  
  @endsection