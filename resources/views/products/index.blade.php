@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success mb-2" href="{{ route('products.create') }}"> Create New Product</a>
                @endcan
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Material</th>
            <th>Product Image</th>
            <th width="280px">Action</th>
        </tr>
     @foreach ($products as $product)
     <tr>
         <td>{{ ++$i }}</td>
         <td>{{ $product->name }}</td>
         <td>{{ $product->material}}</td>
         <td>
            <a href="{{ url('client/images')}}/{{$product->photo}}" data-toggle="lightbox">
                <img style="width: 50px" src="{{ url('client/images')}}/{{$product->photo}}"/>
            </a>
        </td>
         <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    {{-- <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
         </td>
     </tr>
     @endforeach
    </table>
@endsection