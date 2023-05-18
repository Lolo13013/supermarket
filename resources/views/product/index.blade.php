@extends('product.layout')


@section('content')


<div class="jumbotron container mt-4 alert alert-secondary">

  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="{{ route('products.create')}}" role="button">Create</a>
  <a class="btn btn-primary btn-lg" href="{{ route('product.trash')}}" role="button">Trash</a>

</div>

<div class="container">
  @if ($message = Session::get('success'))

  <div class="alert alert-success" role="alert">
    {{$message}}
  </div>

  @endif

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
              <a class="btn btn-success" href="{{ route('products.edit',$item->id)}}">Edit</a>
            </div>
            <div class="col">
              <a class="btn btn-primary" href="{{ route('products.show',$item->id)}}">Show</a>
            </div>
            <div class="col">
              <a class="btn btn-warning" href="{{ route('soft.delete',$item->id)}}">Soft delete</a>
            </div>
          {{--  <div class="col">
              <form action="{{ route('products.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </div> --}}
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