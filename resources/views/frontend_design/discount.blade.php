@extends('layouts.front_app')

@section('page_data')


    <div class="content-wrapper">



    <!-- Books products grid -->


        <div class="container">
            <div class="row pt120">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="heading align-center mb60">
                        <h4 class="h1 heading-title">ই কমার্স ওয়েবসাইট</h4>

                        <p class="heading-text">Buy books, and we ship to you.
                           
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">

                            <h1 class="cart-title">In Your Shopping Cart: <span class="c-primary">{{Cart::content()->count()}} items</span></h1>

                        </div>

                        <form action="#" method="post" class="cart-main">

                            <table class="shop_table cart">
                                <thead class="cart-product-wrap-title-main">
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                            @foreach(Cart::content() as $item)
                                <tr class="cart_item">

                                    <td class="product-remove">
                                        <a href="{{route('cart.remove',['rowid'=>$item->rowId])}}" class="product-del remove" title="Remove this item">
                                            <i class="seoicon-delete-bold"></i>
                                        </a>
                                    </td>

                                    <td class="product-thumbnail">

                                        <div class="cart-product__item">
                                            <a href="">
                                                <img src="{{$item->model->avatar}}" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" height="223" width="171">
                                            </a>
                                            <div class="cart-product-content">
                                                <h5 class="cart-product-title">{{$item->name}}</h5>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="product-price">
                                        <h5 class="price amount">${{$item->price}}</h5>
                                    </td>

                                    <td class="product-quantity">

                                        <div class="quantity">

                                            <a href="{{route('dec.item',['qntt'=>$item->qty,'rid'=>$item->rowId])}}" class="quantity-minus">-</a>

                                            <input title="Qty" class="email input-text qty text" name="qty" type="text" value="{{$item->qty}}" placeholder="1" readonly>


                                            <a href="{{route('inc.item',['qntt'=>$item->qty,'rid'=>$item->rowId])}}" class="quantity-plus">+</a>
                                        </div>

                                    </td>

                                    <td class="product-subtotal">
                                        <h5 class="total amount">${{Cart::get($item->rowId)->subtotal()}}</h5>
                                    </td>

                                </tr>

                            @endforeach  

                                <tr>
                                    <td colspan="5" class="actions">

                                        <div class="coupon">
                                            <input name="coupon_code" class="email input-standard-grey" value="" placeholder="Coupon code" type="text">
                                            <div class="btn btn-medium btn--breez btn-hover-shadow">
                                                <a href="{{route('cupon.discount')}}">
                                                    <span class="text">Apply Coupon</span>
                                                </a> 
                                                <span class="semicircle--right"></span>
                                            </div>
                                        </div>

                                        <div class="btn btn-medium btn--dark btn-hover-shadow">
                                            <span class="text">Apply Coupon</span>
                                            <span class="semicircle"></span>
                                        </div>

                                    </td>
                                </tr>

                                </tbody>
                            </table>


                        </form>

                        <div class="cart-total">
                            <h3 class="cart-total-title">Cart Totals</h3>
                            <h5 class="cart-total-total">Total: <span class="price">${{Cart::total()-Cart::total()*(1/10)}}</span></h5>
                            <a href="{{route('checkout.cart')}}" class="btn btn-medium btn--light-green btn-hover-shadow">
                                <span class="text">Checkout</span>
                                <span class="semicircle"></span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->
    </div>
@stop