@extends('layouts.app')

@section('content')

    
    <div class="card">
    	<div class="card-header">
    		<div class="text-center">
    			<b><h5>All Products</h5></b>
    		</div>
    	</div>
    	<div class="card-body">
    		<table class="table table-dark">
    			<thead>
    				<th>image</th>
	    			<th>Name</th>
	    			<th>Price</th>
	    			<th>Description</th>
    			    <th>Countery</th>
    			    <th>Edit</th>
    			    <th>Delete</th>
    			</thead>
    			<tbody>
					@if($products->count()>0)
						@foreach($products as $product)
						<tr>
							<td>
		                     <img src="{{$product->avatar}}" alt="{{$product->name}}" width="60px" height="25px">
							</td>
							<td>{{$product->name}}</td>
							<td>{{$product->price}}</td>

							<td>{{str_limit($product->description,15)}}</td>
							<td>{{$product->country}}</td>
							<td><a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-sm btn-info">Edit</a></td>		
							<td>
                                <form action="{{route('product.destroy',['id'=>$product->id])}}" method="post">
                                	@csrf
                                	@method('DELETE')

                                	<button class="btn btn-danger btn-sm">Delete</button>
                                </form>
							</td>			
						</tr>
						@endforeach
					@else
	                    <div class="text-center">
			    			<b><h3>No Products Yet!</h3></b>
			    		</div>
					@endif
    				
    			</tbody>
    		</table>
    	</div>
    </div>

@stop