@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Woods</h2>
            </div>

        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('woods.update',$wood->id) }}" method="POST">
     @csrf
        @method('PUT')
         <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 py-3">
          <div class="form-group">
              <strong>Title :</strong>
              <input type="text"  name="title" value="{{ $wood->title }}" class="form-control w-50" placeholder="Name">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Caption :</strong>
            <textarea class="form-control h-50" name="caption" value="{{$wood->caption}}">{{$wood->caption}}</textarea>
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-end mt-2">
            <a class="btn btn-danger" href="{{ route('woods.index') }}"> Back</a>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
  </div>
    </form>
@endsection