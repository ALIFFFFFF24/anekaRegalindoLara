@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manage Outdoors</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success mb-2" href="{{ route('outdoors.create') }}">Create Outdoor Caption</a>
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
     @foreach ($outdoors as $outdoor)
     <tr>
         <td>{{ ++$i }}</td>
         <td>{{ $outdoor->title }}</td>
         <td>{{ $outdoor->caption}}</td>
         <td>
                <form action="{{ route('outdoors.destroy',$outdoor->id) }}" method="POST">
                    {{-- <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('outdoors.edit',$outdoor->id) }}">Edit</a>
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