<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a href="/"><img src="{{ asset('images/logo.png') }}" alt="logo" title="logo" class="logo-image"></a>
	      {{-- <a class="navbar-brand" href="/">Auto<span>road</span></a> --}}
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item {{ (request()->is('our-services')) ? 'active' : '' }}"><a href="/our-services" class="nav-link">Services</a></li>
            {{-- <li class="nav-item {{ (request()->is('booking-form')) ? 'active' : '' }}"><a href="/booking-form" class="nav-link">Booking Now</a></li> --}}
            <li class="nav-item {{ (request()->is('our-fleets')) ? 'active' : ''}}"><a href="/our-fleets" class="nav-link">Fleets</a></li>
            <li class="nav-item {{ (request()->is('blog')) ? 'active' : ''}}"><a href="/blog" class="nav-link">Blogs</a></li>
            <li class="nav-item {{ (request()->is('contact-us') ? 'active' : '')}}"><a href="/contact-us" class="nav-link">Contact Us</a></li>
          </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->