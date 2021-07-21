@include('layout.header')
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">

						<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa  fa-user"></i>
                                                        <!-- <img src="../admin/assets/images/riders.png" class="img-fluid m-auto" alt=""> -->
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Riders</h4>
														<div class="info">
															<strong class="amount">{{$riders}}</strong>
															<!-- <span class="text-primary">(14 unread)</span> -->
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa  fa-shield"></i>
                                                        <!-- <img src="../admin/assets/images/cities.png" class="img-fluid m-auto" alt=""> -->

													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Cities</h4>
														<div class="info">
															<strong class="amount">{{$city}}</strong>
														</div>
													</div>
													<div class="summary-footer">
                                                    <a class="text-muted text-uppercase">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa  fa-map-marker"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
                                                    <h4 class="title">Total Countries</h4>
														<div class="info">
															<strong class="amount">{{$country}}</strong>
														</div>
													</div>
													<div class="summary-footer">
                                                    <a class="text-muted text-uppercase">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-quartenary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quartenary">
														<i class="fa fa-tachometer"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
                                                    <h4 class="title">Total Rides</h4>
														<div class="info">
															<strong class="amount">0</strong>
														</div>
													</div>
													<div class="summary-footer">
                                                    <a class="text-muted text-uppercase">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

            @include('layout.rightbar')

</section>

@include('layout.footer')
