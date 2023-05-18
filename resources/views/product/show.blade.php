@extends('product.layout')


@section('content')


<div class="container" style="padding-top: 12%">
<div class="card">
  <div class="card-body">
   Product name : {{$product->name}}
  </div>
</div>
</div>


<div class="container" style="padding-top: 2%">

    
  <div class="form-group">
    <label for="exampleFormControlInput1">{{$product->name}}</label>
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">{{$product->price}}</label>
  </div>
 
 
  <div class="form-group">
    {!!$product->detail!!}
  </div>

<div class="container mt-3">

    <a class="btn btn-primary" href="{{ route('products.index')}}" role="button">Back</a>
    
</div>



</form>
</div>



@endsection