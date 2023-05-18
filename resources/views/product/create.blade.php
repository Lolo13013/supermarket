@extends('product.layout')


@section('content')


<div class="container" style="padding-top: 12%">
<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>
</div>


<div class="container" style="padding-top: 2%">

    <form action="{{route('products.store')}}" method="POST" >
        @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control"  placeholder="product name">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
    <input type="text" name="price" class="form-control"  placeholder="product price">
  </div>
 
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Details</label>
    <textarea class="form-control" name="detail" rows="3" placeholder="product details"></textarea>
  </div>


  <div class="d-grid gap-2 d-md-block mt-3">

    <button type="supmit" class="btn btn-success">Save</button>
    
      <a class="btn btn-primary" href="{{ route('products.index')}}" role="button">Back</a>
    
</div>

<div class="form-group mt-3">
    
  </div>


</form>
</div>



@endsection