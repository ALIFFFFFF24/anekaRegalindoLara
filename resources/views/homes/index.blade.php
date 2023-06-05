@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Home</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success mb-2" href="{{ route('homes.create') }}"> Create Home Caption</a>
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
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
     @foreach ($homes as $home)
     <tr>
         <td>{{ ++$i }}</td>
         <td>{{ $home->title }}</td>
         <td>{{ $home->caption}}</td>
         <td>
            <a href="{{ url('client/images')}}/{{$home->image}}" data-toggle="lightbox">
                <img style="width: 50px" src="{{ url('client/images')}}/{{$home->image}}"/>
            </a>
        </td>
         <td>
                <form action="{{ route('homes.destroy',$home->id) }}" method="POST">
                    {{-- <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('homes.edit',$home->id) }}">Edit</a>
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