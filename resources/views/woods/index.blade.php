@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manage Woods</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success mb-2" href="{{ route('woods.create') }}">Create Wood Caption</a>
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
            <th>Title</th>
            <th>Caption</th>
            <th width="280px">Action</th>
        </tr>
     @foreach ($woods as $wood)
     <tr>
         <td>{{ ++$i }}</td>
         <td>{{ $wood->title }}</td>
         <td>{{ $wood->caption}}</td>
         <td>
                <form action="{{ route('woods.destroy',$wood->id) }}" method="POST">
                    {{-- <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('woods.edit',$wood->id) }}">Edit</a>
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