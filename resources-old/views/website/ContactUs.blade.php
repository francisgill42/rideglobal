
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


    <section id="venue" class="pt-4" style="padding-bottom:50px">
					<div class="container pt-4 mt-4">
						<div class="row pt-2 mb-3">
							<div class="col">
								<h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">Contact Us</h2>
								<!-- <p class="custom-font-size-1 text-center mb-2">Check out the Venue Information</p> -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                        @php
                                            Session::forget('success');
                                        @endphp
                                    </div>
                                @endif
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-10">
								<div class="custom-venue-address bg-color-light row">
									<div class="col-md-6 d-none d-md-block p-0" style="background-image: url('website/img/img-3.png')"></div>
									<div class="col-md-6 p-5">
										<div class="p-2">
											<div class="text-color-dark font-weight-bold text-uppercase mb-3"><span style="font-size:20px">GET IN TOUCH!</span></div>
											<form method="POST" action="/contact"> 
												
											@csrf
											  <input required  type="email" placeholder="Email"  name="mail" style="width: 100%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;">
											  <textarea required rows="5" cols="48" placeholder="Your Message" name="message" style="width: 100%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;"></textarea>
											  <button class="btn btn-primary custom-btn-style-1 text-3 font-weight-semibold text-color-light text-uppercase outline-none"> SEND </button>
											</form>
											<!--<p class="font-weight-normal mb-0"><strong>Address:</strong> 1234, Street, City Name, United States</p>
											<p class="font-weight-normal mb-4">
												<strong>Phone:</strong>
												<a href="tel:+123456789" class="custom-text-color-def">
													(123) 456-789
												</a>
											</p>
											<a href="http://maps.google.com" target="_blank" class="btn btn-primary custom-border-radius custom-btn-style-1 text-3 font-weight-semibold text-color-light text-uppercase outline-none">Get Direction <i class="custom-long-arrow-right" aria-hidden="true"></i></a>-->
										</div>
									</div>
									<span class="custom-arrow bg-color-light"></span>
								</div>
							</div>
						</div>
					</div>
				</section>
</main>

@endsection


