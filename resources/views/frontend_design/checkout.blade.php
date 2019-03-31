@extends('layouts.front_app')

@section('page_data')
<div class="content-wrapper">



<!-- Books products grid -->


<div class="container">
    <div class="row pt120">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="heading align-center mb60">
                <h4 class="h1 heading-title">ই কমার্স ওয়েবসাইট</h4>

                <p class="heading-text">
                   বই কিনুন টাকা ঢালুন
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
	<div class="row medium-padding120 bg-border-color">
		<div class="container">

			<div class="row">

				<div class="col-lg-12">
			<div class="order">
				<h2 class="h1 order-title text-center">Your Order</h2>
				
				<form action="#" method="post" class="cart-main">
					<table class="shop_table cart">
						<thead class="cart-product-wrap-title-main">
						<tr>
							<th class="product-thumbnail">Product</th>
							<th class="product-quantity">Quantity</th>
							<th class="product-subtotal">Total</th>
						</tr>
						</thead>
						<tbody>
                      @foreach(Cart::content() as $item)
						<tr class="cart_item">
                            <td class="product-thumbnail">

	                            <div class="cart-product__item">
	                                <a href="#">
	                                    <img src="{{$item->model->avatar}}" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" width="100px" height="100px">
	                                </a>
	                                <div class="cart-product-content">
	                                    <h5 class="cart-product-title">{{$item->name}}</h5>
	                                </div>
	                            </div>
	                        </td>


							<td class="product-quantity">

								<div class="quantity">
									x{{$item->qty}}
								</div>

							</td>

							<td class="product-subtotal">
								<h5 class="total amount">${{Cart::get($item->rowId)->subtotal()}}</h5>
							</td>

						</tr>
                      @endforeach
						
						<tr class="cart_item subtotal">

							<td class="product-thumbnail">


								<div class="cart-product-content">
									<h5 class="cart-product-title">	Subtotal:</h5>
								</div>


							</td>

							<td class="product-quantity">

							</td>

							<td class="product-subtotal">
								<h5 class="total amount">${{Cart::subtotal()}}</h5>
							</td>
						</tr>

						<tr class="cart_item total">

							<td class="product-thumbnail">


								<div class="cart-product-content">
									<h5 class="cart-product-title">Total:</h5>
								</div>


							</td>

							<td class="product-quantity">

							</td>

							<td class="product-subtotal">
								<h5 class="total amount">${{Cart::total()}}</h5>
							</td>
						</tr>

						</tbody>
					</table>

					</form>

					<div class="cheque">

						<div class="logos">
							<a href="#" class="logos-item">
								<img src="/img/visa.png" alt="Visa">
							</a>
							<a href="#" class="logos-item">
								<img src="/img/mastercard.png" alt="MasterCard">
							</a>
							<a href="#" class="logos-item">
								<img src="/img/discover.png" alt="DISCOVER">
							</a>
							<a href="#" class="logos-item">
								<img src="/img/amex.png" alt="Amex">
							</a>
							
							<span style="float: right;">
								<form action="{{route('bill.payment')}}" method="post">
									@csrf
								  <script
								    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
								    data-key="pk_test_tjs3R2OtR8kbuis8IPNlOJAh008bBqanO5"
								    data-amount="{{Cart::total()*100}}"
								    data-name="Demo Site"
								    data-description="Example charge"
								    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
								    data-locale="auto">
								  </script>
								</form>
							</span>
						</div>
					</div>

				
			</div>
		</div>

			</div>
		</div>
	</div>
</div>
@stop