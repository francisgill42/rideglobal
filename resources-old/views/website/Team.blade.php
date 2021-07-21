

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
                    <h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">Team Ride Global</h2>
                    <!-- <p class="custom-font-size-1 text-center mb-2">Ride Global</p> -->
                </div>
            </div>

            <div class="row pt-2 pb-4 mb-4">
				 <div class="col-md-4 col-lg-3 mt-3 mb-3">
                    <div class="custom-speaker-card bg-color-light m-auto">
                        <div class="speaker-photo">
                            <a href="#speaker-content-2" class="popup-with-zoom-anim text-decoration-none">
                                <img src="website/img/david.jpeg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="speaker-info speaker-social-twitter p-5">
                            <!-- <a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a> -->
                            <h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">David Greensmith </h3>
                            <p class="custom-font-size-1 mb-0">Founder</p>
                        </div>
                    </div>
                    <div id="speaker-content-2" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <img src="website/img/david.jpeg" class="img-fluid mb-4" alt="">
                                <ul class="social-icons text-center">
                                    <li class="social-icons-facebook">
                                        <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="https://www.instagram.com/dipple1957/" target="_blank" title="Twitter">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <h2 class="font-weight-semibold text-color-dark mb-1">David Greensmith</h2>
                                <p class="custom-font-style-1 font-weight-semibold">Founder</p>
                                <h5 class="custom-font-style-2 font-weight-semibold">Email : <span style="text-transform: lowercase; "> <a href="mailto:david@rideglobal.org">david@rideglobal.org</a></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mt-3 mb-3">
                    <div class="custom-speaker-card bg-color-light m-auto">
                        <div class="speaker-photo">
                            <a href="#speaker-content-1" class="popup-with-zoom-anim text-decoration-none text-decoration-none">
                               <img src="website/img/faisal.jpeg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="speaker-info speaker-social-twitter p-5">
                            <!-- <a href="#" class="speaker-social text-center text-color-light"><i class="fab fa-twitter" aria-hidden="true"></i></a> -->
                            <h3 class="text-color-dark custom-font-size-4 font-weight-semibold mb-1">Faisal Malik</h3>
                            <p class="custom-font-size-1 mb-0">Co-Founder</p>
                        </div>
                    </div>
                    <div id="speaker-content-1" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-5">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <img src="website/img/faisal.jpeg" class="img-fluid mb-4" alt="">
                                <ul class="social-icons text-center">
                                    <li class="social-icons-facebook">
                                        <a href="https://www.facebook.com/mfmalik1975" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="social-icons-twitter">
                                        <a href="https://www.instagram.com/faisal_malik75/" target="_blank" title="Twitter">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <h2 class="font-weight-semibold text-color-dark mb-1">Faisal Malik</h2>
                                <p class="custom-font-style-1 font-weight-semibold">Co-Founder</p>
                                <h5 class="custom-font-style-2 font-weight-semibold">Email : <span style="text-transform: lowercase; "> <a href="mailto:faisal@rideglobal.org">faisal@rideglobal.org</a></span></h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



</main>
@endsection


