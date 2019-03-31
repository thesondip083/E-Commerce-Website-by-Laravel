@extends('layouts.app')

@section('content')

    
    <div class="card text-white bg-info mb-3"><!--mb-3 margin bottom-->
        <!--https://stackoverflow.com/questions/41574776/what-is-class-mb-0-in-bootstrap-4-->

    	<div class="card-header">
    		<div class="text-center">
    			<b><h5>Create Products</h5></b>
    		</div>
    	</div>

    	<div class="card-body">
            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="nam">Name</label>
                  <input type="text" id="nam" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="img">Image</label>
                  <input type="file" id="img" name="image" class="form-control">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" id="price" name="price" class="form-control">
                </div>
                <div class="form-group">
                  <label for="cn">Country</label>
                  <input type="text" id="cn" name="country" class="form-control">
                </div>
                <div class="form-group">
                  <label for="desc">Description</label>
                  <textarea name="description" id="desc" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Store</button>
                    </div>
                </div>
            </form>
    	</div>

    </div>

@stop