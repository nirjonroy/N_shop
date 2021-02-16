@extends('layout')
@section('content')

	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-12 col-12">
						


									<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <?php 
                   $all_published_slider = DB::table('tbl_slider')
                                ->where('publication_status', 1)
                                ->get();
                    foreach( $all_published_slider as $v_slider ) {?>
                    
                        <li data-target="#carousel-example-generic" data-slide-to="" class=""></li>
                    <?php } ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach( $all_published_slider as $v_slider )
                        <div class="item {{ $loop->first ? ' active' : '' }}" >
                            <img src="{{ $v_slider->slider_image }}"  style="width: 100%; height: 500px;" ">
                        </div>
                    @endforeach
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


									<div class="hero-text">
										<h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
										<p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
										<div class="button">
											<a href="#" class="btn">Shop Now!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	<!-- Start Product Area -->
    <div class="product-area section" id="products">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Man</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<?php
							$all_product_info = DB::table('tbl_products')
							->where('publication_status', 1)
							->latest()
							->limit(18)
							->get();

							 ?>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">

										<div class="row">
											@foreach($all_product_info as $v_product)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">

														<a href="{{URL::to('/product-details/'.$v_product->product_id)}} ">
															<img class="default-img" src="{{$v_product->product_image}}" alt="#" width="30px" height="35px">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3>Name:<a href="">{{$v_product->product_name}}</a></h3>
														<div class="product-price">
															<span>{{$v_product->product_price}}</span>
														</div>
													</div>
												</div>
											</div>








								@endforeach

										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">

		<div class="container">
			<div class="row">

									<?php 
									$advertise_by_details = DB::table('tbl_advertise')
										->where('publication_status', 1)
										->limit(2)
										->get();
										foreach($advertise_by_details as $v_advertise){
									?>
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{URL::to($v_advertise->advirtise_image)}}" width="80px" height="80px" >
						<div class="content">
							<p>{{$v_advertise->advertise_name}}</p>
							<h3>{{$v_advertise->advertise_name }}</h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
			<?php } ?>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<!-- Start Most Popular -->
	<?php
							$all_product_info = DB::table('tbl_products')
							->where('publication_status', 1)
							->latest()
							->limit(10)
							->get();

							 ?>
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Item</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						@foreach($all_product_info as $v_product)
						<div class="single-product">
							<div class="product-img">
								<a href="{{URL::to('/product-details/'.$v_product->product_id)}}">
									<img class="default-img" src="{{$v_product->product_image}}" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="{{URL::to('/product-details/'.$v_product->product_id)}}">{{$v_product->product_name}}</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									<span>{{$v_product->product_price}}</span>
								</div>
							</div>
						</div>
						@endforeach
						<!-- End Single Product -->
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Shop Home List  -->

	<!-- End Shop Home List  -->
@endsection	