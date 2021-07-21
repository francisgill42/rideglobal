@extends('website.website_layout.master')

@section('riders')
     {{$riders}}
@endsection
@section('country')
    {{$country}}
@endsection
@section('city')
    {{$city}}
@endsection



@section('content')

    <section id="speakers" class="bg-color-light pt-4">
        <div class="container mt-4 pt-4 pb-4">
            <div class="row pt-2">
                <div class="col">
                    <h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-3">OUR MISSION</h2>
                    <p class=" text-center mb-4" style="font-size:17px;">
                        Our Global Ride Team is just a group of ordinary people but ones that share a joint
                        passion regarding motorcycles and good causes for others. Born from the need to help
                        others during the pandemic we devised the Memorial ride to raise funds for COVAX to
                        help in some way vaccinate those who are less able than some of the richer countries
                        around our world.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 about-video align-items-center justify-content-center d-flex p-0" style="background-image: url('img/demos/event/about/about-video-banner.jpg')">
                    <img src="website/img/img-4.jpeg" class="img-fluid" style="height: 100%" />
                </div>
                <div class="col-lg-4 bg-color-primary p-4">
                    <div class="custom-about-content text-color-light p-5">
                        <div class="pt-4">
                            <div class="about-title mb-4 pb-4">
                                <div class="icon">
                                    <img src="website/img/demos/event/about/about-icon.png" class="img-fluid" alt="">
                                </div>
                                <h3 class="text-color-light text-uppercase font-weight-bold mb-2">About Ride Global</h3>
                                <p class="text-color-light text-uppercase mb-0"> In memory of those lost through the Pandemic</p>
                            </div>
							<p class="custom-text-color-1 font-weight-normal pb-4">
								Our organization is looking to raise money towards the global immunization
								against COVID – 19, we are proposing to do this by raising funds
								through sponsorship, money raised through merchandising with our
								branded clothing range. All profits will be given to those
								<span style="text-transform: uppercase;font-size:18px;font-weight:bold">
									lost through the Pandemic</span>. We will be speaking with The World Health
								Organization to agree the best way to support this fund raising.

							</p>
                             <!--   <div class="p-0">
                              <a href="AboutUs" class="btn btn-tertiary about-btn-tickets custom-border-radius custom-btn-style-1 text-3 font-weight-semibold text-color-light text-uppercase outline-none mb-4 mr-2">Read More <i class="custom-long-arrow-right" aria-hidden="true"></i></a>
                               <a data-hash data-hash-offset="80" href="#schedule" class="btn custom-btn-border-1 custom-btn-style-1 custom-border-radius text-3 font-weight-semibold text-color-light text-uppercase outline-none mb-4">Event Schedule <i class="custom-long-arrow-right" aria-hidden="true"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0 custom-about-carousel">
                    <div class="wrapper">
                        <div class="owl-carousel owl-theme dots-inside custom-dots-style-1 h-100" data-plugin-options="{'items': 1, 'margin': 0, 'animateOut': 'fadeOut', 'autoplay': true}">
                            <div class="carousel-image" style="background-image: url('website/img/img-4.png');"></div>
                            <div class="carousel-image" style="background-image: url('website/img/img-4.png');"></div>
                            <div class="carousel-image" style="background-image: url('website/img/img-4.png');"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="speakers" class="bg-color-light pt-4">
        <div class="container mt-4 pt-4 pb-4">
            <div class="row pt-2">
                <div class="col">
                    <h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-3">Wall Of Riders</h2>
                    <h5 class="text-color-dark text-uppercase font-weight-bold text-center mb-3">Want to appear on our social wall this year. Make sure to tag us on socials.</h5>
                    <p class=" text-center mb-4" style="font-size:17px;">#RideGlobal #RideForCause #Ride2021</p>
                    {{--					<div class="post-image ml-0">--}}
                    {{--										<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled':      true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">--}}
                    {{--											<div class="row mx-0">--}}
                    {{--												<div class="col-6 col-md-4 p-0">--}}
                    {{--													<a href="img/img-3.jpeg">--}}
                    {{--														<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">--}}
                    {{--															<span class="thumb-info-wrapper">--}}
                    {{--																<img src="img/img-3.jpeg" class="img-fluid" alt="" />--}}
                    {{--																<span class="thumb-info-action">--}}
                    {{--																	<span class="thumb-info-action-icon thumb-info-action-icon-light"><i                                                                             class="fas fa-plus text-dark"></i></span>--}}
                    {{--																</span>--}}
                    {{--															</span>--}}
                    {{--														</span>--}}
                    {{--													</a>--}}
                    {{--												</div>--}}
                    {{--												<div class="col-6 col-md-4 p-0">--}}
                    {{--													<a href="img/img-3.jpeg">--}}
                    {{--														<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">--}}
                    {{--															<span class="thumb-info-wrapper">--}}
                    {{--																<img src="img/img-3.jpeg" class="img-fluid" alt="" />--}}
                    {{--																<span class="thumb-info-action">--}}
                    {{--																	<span class="thumb-info-action-icon thumb-info-action-icon-light"><i                                                                             class="fas fa-plus text-dark"></i></span>--}}
                    {{--																</span>--}}
                    {{--															</span>--}}
                    {{--														</span>--}}
                    {{--													</a>--}}
                    {{--												</div>--}}
                    {{--												<div class="col-6 col-md-4 p-0">--}}
                    {{--													<a href="img/img-3.jpeg">--}}
                    {{--														<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">--}}
                    {{--															<span class="thumb-info-wrapper">--}}
                    {{--																<img src="img/img-3.jpeg" class="img-fluid" alt="" />--}}
                    {{--																<span class="thumb-info-action">--}}
                    {{--																	<span class="thumb-info-action-icon thumb-info-action-icon-light"><i                                                                             class="fas fa-plus text-dark"></i></span>--}}
                    {{--																</span>--}}
                    {{--															</span>--}}
                    {{--														</span>--}}
                    {{--													</a>--}}
                    {{--												</div>--}}
                    {{--												<div class="col-6 col-md-4 p-0">--}}
                    {{--													<a href="img/img-3.jpeg">--}}
                    {{--														<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">--}}
                    {{--															<span class="thumb-info-wrapper">--}}
                    {{--																<img src="img/img-3.jpeg" class="img-fluid" alt="" />--}}
                    {{--																<span class="thumb-info-action">--}}
                    {{--																	<span class="thumb-info-action-icon thumb-info-action-icon-light"><i                                                                              class="fas fa-plus text-dark"></i></span>--}}
                    {{--																</span>--}}
                    {{--															</span>--}}
                    {{--														</span>--}}
                    {{--													</a>--}}
                    {{--												</div>--}}
                    {{--												<div class="col-6 col-md-4 p-0">--}}
                    {{--													<a href="img/img-3.jpeg">--}}
                    {{--														<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">--}}
                    {{--															<span class="thumb-info-wrapper">--}}
                    {{--																<img src="img/img-3.jpeg" class="img-fluid" alt="" />--}}
                    {{--																<span class="thumb-info-action">--}}
                    {{--																	<span class="thumb-info-action-icon thumb-info-action-icon-light"><i                                                                             class="fas fa-plus text-dark"></i></span>--}}
                    {{--																</span>--}}
                    {{--															</span>--}}
                    {{--														</span>--}}
                    {{--													</a>--}}
                    {{--												</div>--}}
                    {{--												<div class="col-6 col-md-4 p-0">--}}
                    {{--													<a href="img/img-3.jpeg">--}}
                    {{--														<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">--}}
                    {{--															<span class="thumb-info-wrapper">--}}
                    {{--																<img src="img/img-3.jpeg" class="img-fluid" alt="" />--}}
                    {{--																<span class="thumb-info-action">--}}
                    {{--																	<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>--}}
                    {{--																</span>--}}
                    {{--															</span>--}}
                    {{--														</span>--}}
                    {{--													</a>--}}
                    {{--												</div>--}}
                    {{--											</div>--}}
                    {{--										</div>--}}
                    {{--									</div>--}}
                </div>
            </div>
        </div>
    </section>

    <section id="counter" class="section section-parallax section-text-light section-center m-0 pt-4 pb-4" data-plugin-parallax data-plugin-options="{'speed': 1.5}" style="background-color:#43a6a3">
        <div class="container mt-4 mb-4">
            <div class="row mt-2 mb-2 counters counters-text-light">
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="counter mb-4 mt-4">
                        <img src="website/img/demos/event/counter/col1.png" class="img-fluid m-auto" alt="">
                        <strong class="text-color-light mt-3 mb-1" data-to={{$riders}} data-append="+">0</strong>
                        <label class="text-color-light font-weight-normal text-uppercase text-center custom-font-size-2">Riders</label>
                    </div>
                </div>
                <!--<div class="col-12 col-lg-3 col-sm-6">
                    <div class="counter mb-4 mt-4">
                        <img src="img/demos/event/counter/col2.png" class="img-fluid m-auto" alt="">
                        <strong class="text-color-light mt-3 mb-1" data-to="15">0</strong>
                        <label class="text-color-light font-weight-normal text-uppercase text-center custom-font-size-2">Rides</label>
                    </div>
                </div>-->
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="counter mb-4 mt-4">
                        <img src="website/img/demos/event/counter/col3.png" class="img-fluid m-auto" alt="">
                        <strong class="text-color-light mt-3 mb-1" data-to={{$city}}>0</strong>
                        <label class="text-color-light font-weight-normal text-uppercase text-center custom-font-size-2">Cities</label>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-sm-6">
                    <div class="counter mb-4 mt-4">
                        <img src="website/img/demos/event/counter/col4.png" class="img-fluid m-auto" alt="">
                        <strong class="text-color-light mt-3 mb-1" data-to={{$country}}>0</strong>
                        <label class="text-color-light font-weight-normal text-uppercase text-center custom-font-size-2">Countries</label>
                    </div>
                </div>

            </div>
        </div>
    </section>

    </main>
@endsection