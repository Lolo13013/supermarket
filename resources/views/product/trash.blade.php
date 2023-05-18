@extends('product.layout')


@section('content')


<div class="jumbotron container mt-4 alert alert-secondary">
    
    <p>Trashed products</p>
    <a class="btn btn-primary btn-lg" href="{{ route('products.index')}}" role="button">Home</a>
</div>



<div class="container">
    <table class="table table-secondary">
  
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Product price</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @php
        $i = 0;
    @endphp
    @foreach ($products as $item)
        <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->price}} EGP</td>
      <td>

        <div class="row">
    <div class="col">
      <a class="btn btn-success" href="{{ route('product.back.from.trash',$item->id)}}">Restore</a>
            <a class="btn btn-danger" href="{{ route('product.delete.from.database',$item->id)}}">Delete</a>

    </div>
   
  </div>
        
        
        
    </form>
      </td>
    </tr>
    @endforeach
   
    
  </tbody>
</table>
{!!$products->links()!!}
</div>

@endsection