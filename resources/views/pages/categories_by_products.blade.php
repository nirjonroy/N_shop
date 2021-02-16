@extends('layout')
@section('content')
<div class="tab-content" id="myTabContent">
                                <!-- Start Single Tab -->
                                <div class="tab-pane fade show active" id="man" role="tabpanel">
                                    <div class="tab-single">

                                        <div class="row">
                                           @foreach($product_by_categories as $v_categories_by_products)
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="product-details.html">
                                                            <img class="default-img" src="{{URL::to($v_categories_by_products->product_image)}}" alt="#" width="30px" height="35px">
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
                                                        <h3>Name:<a href="">{{$v_categories_by_products->product_price}}Tk</a></h3>
                                                        <div class="product-price">
                                                            <span>{{$v_categories_by_products->product_name}}</span>
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

@endsection                    