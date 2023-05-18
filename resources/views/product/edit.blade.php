@extends('product.layout')


@section('content')


<div class="container" style="padding-top: 12%">
<div class="card">
  <div class="card-body">
    
<p class="card-text"> Product name : {{$product->name}}</p>
  </div>
</div>
</div>


<div class="container" style="padding-top: 2%">

    <form action="{{route('products.update',$product->id)}}" method="POST" >
        @csrf
        @method('PUT')
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" value="{{$product->name}}" class="form-control"  placeholder="product name">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
    <input type="text" name="price" value="{{$product->price}}" class="form-control"  placeholder="product price">
  </div>
 
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Details</label>
    <textarea class="form-control" name="detail"  rows="3" placeholder="product details">{!!$product->detail!!}"</textarea>
  </div>

<div class="d-grid gap-2 d-md-block mt-3">

    <button type="supmit" class="btn btn-success">Update</button>
  
   
      <a class="btn btn-primary" href="{{ route('products.index')}}" role="button">Back</a>
    
</div>
</form>
</div>



@endsection