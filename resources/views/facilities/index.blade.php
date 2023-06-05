@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Facilities</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success mb-2" href="{{ route('facilities.create') }}"> Create New Facility</a>
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
            <th>Image</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
     @foreach ($facilities as $facility)
     <tr>
         <td>{{ ++$i }}</td>
         <td>
            <a href="{{ url('client/images')}}/{{$facility->image}}" data-toggle="lightbox">
                <img style="width: 50px" src="{{ url('client/images')}}/{{$facility->image}}"/>
            </a>
        </td>
        <td>
            {{$facility->description}}
        </td>
         <td>
                <form action="{{ route('facilities.destroy',$facility->id) }}" method="POST">
                    {{-- <a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('facilities.edit',$facility->id) }}">Edit</a>
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