
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
                    <h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">CAUSES</h2>
                    <p class="custom-font-size-1 text-center mb-2" style="line-height: 20px;font-size:19px">Our proposed causes are two-fold, our main cause is COVAX although we actively encourage localised charities which could support local fundraising efforts, we welcome information on local causes so that we can better support through social media.</p>
                </div>
            </div>
        </div>
		<div class="container py-4">

					<div class="row">
						<div class="col">
							<div class="blog-posts">

								<article class="post post-large">
									<div style="text-align:center" class="post-image">

											<img src="/website/img/demos/event/sponsors/Royal Devon and Exeter NHS Foundation Trust CMYK BLUE transparent.png" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />

									</div>

									<!-- <div class="post-date">
  <span class="day">10</span>
  <span class="month">Jan</span>
 </div>

 <div class="post-content">

  <h2 class="font-weight-semibold text-6 line-height-3 mb-3">NHS – Royal Devon and Exeter Foundation Trust</h2>
  <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

  <div class="post-meta">
   <span>Hosted By <a href="#">John Doe</a> </span>
   <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
   <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
   <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
  </div>

 </div> -->
								</article>


								<!--<ul class="pagination float-right">
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
								</ul>-->

							</div>
						</div>

					</div>

				</div>
    </section>


</main>

@endsection


