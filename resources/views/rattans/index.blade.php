@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manage Rattans</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success mb-2" href="{{ route('rattans.create') }}">Create Rattan Caption</a>
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
     @foreach ($rattans as $rattan)
     <tr>
         <td>{{ ++$i }}</td>
         <td>{{ $rattan->title }}</td>
         <td>{{ $rattan->caption}}</td>
         <td>
                <form action="{{ route('rattans.destroy',$rattan->id) }}" method="POST">
                    {{-- <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('rattans.edit',$rattan->id) }}">Edit</a>
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