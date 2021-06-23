@extends('layouts.app')
@section('title', 'Top Luxury Cars in Uk')
@section('content') 
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span><span> <a href="/blog">Blogs <i class="ion-ios-arrow-forward"></i></a></span><span> Top Luxury Cars in Uk <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Top Luxury Cars in Uk</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12 order-md-last ftco-animate">
            <h2 class="mb-3">BMW:</h2>
            <p>The new BMW 5 Series debuts extra norm and BMW Individual outside paint works, similar to the Bernina Gray Amber Effect, the Phytonic Blue metallic or the Individual shades of Aventurine Red and Tanzanite Blue. There is likewise a large group of new combination wheel plans for the M Sport, Luxury Line and Sport Line gear trim levels. Another visual feature of the new 5 Series age are the trapezoidal fumes pipe finishers at the backside, which are presently standard on all fueling forms.</p>
            <p>
              <img src="{{ asset('images/image_7.jpg') }}" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3">Bentley:</h2>
            <p>The third-age Bentley Flying Spur shows up as an all-new model for the 2020 model year. Outside, the revived styling sees the presentation of an a lot bigger grille, headlights that take after those of the Continental GT, and progressively characterized wrinkles that are obvious from the back three-quarter see. The wheelbase is around five inches longer than previously and the Flying Spur imparts a stage to the Porsche Panamera. Inside, the lodge includes a refreshed infotainment framework with a screen that is totally covered up underneath a shiny facade when not being used. For the present, a 6.0-liter twin-turbo W12 motor imparted to the Bentayga Speed is the main powerplant that is accessible.</p>
            <h2 class="mb-3 mt-5">Bentley Continental:</h2>
            <p>The 2020 Bentley Continental is offered in the accompanying submodels: Continental Coupe, Continental Convertible. Accessible styles incorporate GT V8 2dr Coupe AWD (4.0L 8cyl Turbo 8AM), GT 2dr Coupe AWD (6.0L 12cyl Turbo 8AM), GT 2dr Convertible AWD (6.0L 12cyl Turbo 8AM), and GT V8 2dr Convertible AWD (4.0L 8cyl Turbo 8AM). Bentley Continental models are accessible with a 4.0 L-liter gas motor or a 6.0 L-liter gas motor, with yield up to 626 hp, contingent upon motor kind. The 2020 Bentley Continental accompanies all wheel drive. Accessible transmissions include: 8-speed mechanized manual. The 2020 Bentley Continental accompanies a 3 yr./boundless mi. fundamental guarantee, a 3 yr./boundless mi. side of the road guarantee, and a 3 yr./boundless mi. powertrain guarantee.</p>
            <p>
              <img src="{{ asset('images/image_8.jpg') }}" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3 mt-5">Mercedes:</h2>
            <p>The 2020 Mercedes-Benz GLS has been reported. In case you're searching for a full-size extravagance SUV experience, this is it. Bringing all-new styling and fresh out of the plastic new highlights to the strong SUV, the architects and creators at Mercedes-Benz have pulled the GLS much further in front of its opposition – demonstrating for the last time that there's no extravagance experience accessible like the one of every a Mercedes-Benz.</p>
            <h2 class="mb-3 mt-5">Rolls Royce:</h2>
            <p>The Rolls Royce Phantom has 1 Petrol Engine on offer. The Petrol motor is 6749 cc. It is accessible with the Automatic transmission. Contingent on the variation and fuel type the Rolls Royce Phantom has a mileage of 9.8 kmpl. The Rolls Royce Phantom is a 5 seater Sedan and has a length of 5982mm, width of 2018mm and a wheelbase of 3772mm</p>

            {{-- <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div> --}}
            {{-- <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="{{ asset('images/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>George Washington</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div> --}}
            {{-- <div class="pt-5 mt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="{{ asset('images/person_1.jpg') }}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 03, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="{{ asset('images/person_1.jpg') }}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 03, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="{{ asset('images/person_1.jpg') }}" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">October 03, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="{{ asset('images/person_1.jpg') }}" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta">October 03, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="{{ asset('images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>John Doe</h3>
                                  <div class="meta">October 03, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="{{ asset('images/person_1.jpg') }}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 03, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div> --}}
          </div> <!-- .col-md-12 -->

        </div>
      </div>
    </section> <!-- .section -->
  
  @endsection