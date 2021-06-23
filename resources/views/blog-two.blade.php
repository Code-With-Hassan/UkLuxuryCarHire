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
              <a href="/Mistakes-that-you-should-avoid-when-hiring-a-car" class="block-20 img rounded" style="background-image: url('{{ asset('images/open.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">April 01, 2021</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading mt-2"><a href="/Mistakes-that-you-should-avoid-when-hiring-a-car">10 Common Mistakes That You Should Avoid When Hiring a Car</a></h3>
                <p>Renting cars/ vehicles are playing an important part in making your journey experience hassle-free...</p>
                <p><a href="/Mistakes-that-you-should-avoid-when-hiring-a-car" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="/analysis-of-new-mercedes-2021" class="block-20 img" style="background-image: url('{{ asset('images/image.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">April 04, 2021</a></div>
                  <div><a href="#">Admin</a></div>
                  {{-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mt-2"><a href="/analysis-of-new-mercedes-2021">Analysis of New Mercedes S-Class 2021</a></h3>
                <p>For quite a long time the Mercedes S-Class has been the go-to luxury limo for big shot CEOs, high-positioning European authorities, and any other person searching for the most extreme luxury in a discrete covering...</p><a href="/analysis-of-new-mercedes-2021" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-10 text-center d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="/hire-a-ferrari-812-superfast-in-the-uk" class="block-20 img" style="background-image:  url('{{ asset('images/1105341.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">April 15, 2021</a></div>
                  <div><a href="#">Admin</a></div>
                </div>
                <h3 class="heading mt-2"><a href="/hire-a-ferrari-812-superfast-in-the-uk">Want To Hire A Ferrari 812 Superfast In The UK?</a></h3>
                <p>Undeniably Ferrari in its layout but absolutely particular in its performance and driving experience, this is the most impressive and fastest road Ferrari to this point...</p><a href="/hire-a-ferrari-812-superfast-in-the-uk" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
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
              <a href="/celebrate-your-birthday-in-a-luxury-car" class="block-20 img" style="background-image: url('{{ asset('images/Birthday-Limo-Hire.jpg') }}')">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">April 25, 2021</a></div>
                  <div><a href="#">Admin</a></div>
                  {{-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> --}}
                </div>
                <h3 class="heading mt-2"><a href="/celebrate-your-birthday-in-a-luxury-car">Need To Celebrate Your Birthday In A Luxury Car?</a></h3>
                <p>On your day, you deserve to feel special, and what best way to rejoice than in a comfortable, luxurious car with a driver? ...</p>
                <p><a href="/celebrate-your-birthday-in-a-luxury-car" class="btn-custom">Continue <span class="icon-long-arrow-right"></span></a></p>
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