@extends('layouts.front_app')

@section('page_data')
<div class="container">
    <div class="row medium-padding120">
        <div class="product-details">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="product-details-thumb">
                    <div class="swiper-container" data-effect="fade">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="product-details-img-wrap swiper-slide">
                                <img src="{{$pros->avatar}}" alt="product" data-swiper-parallax="-10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <div class="product-details-info">
                    <div class="product-details-info-price">${{$pros->price}}</div>
                    <h3 class="product-details-info-title">{{$pros->name}}</h3>
                    <p class="product-details-info-text">
                    	{{$pros->description}}
                    </p>
                    
                    <form action="{{route('cart.add')}}" method="post">
                         
                         @csrf

                    	<div class="quantity">
	                        <a href="#" class="quantity-minus quantity-minus-sondip">-</a>
	                          <input title="Qty" name="qty" class="email input-text qty text" type="text" value="1">
	                        <a href="#" class="quantity-plus quantity-plus-sondip">+</a>
                        </div>
                         
                         <input type="hidden" name="prod_id" value="{{$pros->id}}">
                         <input type="hidden" name="prod_name" value="{{$pros->name}}">
                         <input type="hidden" name="prod_price" value="{{$pros->price}}">   

	                    <button class="btn btn-medium btn--primary">
	                        <span class="text">Add to Cart</span>
	                        <i class="seoicon-commerce"></i>
	                        <span class="semicircle"></span>
	                    </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@stop