@extends('layouts.front_app')

@section('page_data')
 <div class="content-wrapper">

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

    <!-- End Books products grid -->

    <div class="container">
        <div class="row pt120">
            <div class="books-grid">

            <div class="row mb30">
                @foreach($products as $p)
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="books-item">
                        <div class="books-item-thumb">
                            <img src="{{$p->avatar}}" alt="book">
                            <div class="new">New</div>
                            <div class="sale">Sale</div>
                            <div class="overlay overlay-books"></div>
                        </div>

                        <div class="books-item-info">
                            <a href="{{route('product.single',['id'=>$p->id])}}">
                                <h5 class="{{$p->name}}">Product details</h5>
                            </a>
                            

                            <div class="books-price">${{$p->price}}</div>
                        </div>

                        


                        <form action="{{route('cart.add')}}" method="post">
                         
                             @csrf

                            
                             <input title="Qty" name="qty" class="email input-text qty text" type="hidden" value="1"> 
                             <input type="hidden" name="prod_id" value="{{$p->id}}">
                             <input type="hidden" name="prod_name" value="{{$p->name}}">
                             <input type="hidden" name="prod_price" value="{{$p->price}}">   

                            <button class="btn btn-small btn--dark add">
                                <span class="text">Add to Cart</span>
                                <i class="seoicon-commerce"></i>
                            </button>
                    </form>

                    </div>
                 </div>
                @endforeach
            </div>

            <div class="row pb120">

                <div class="col-lg-12">

                    {{$products->links()}}

                </div>


            </div>
        </div>
        </div>
    </div>
</div>
@stop