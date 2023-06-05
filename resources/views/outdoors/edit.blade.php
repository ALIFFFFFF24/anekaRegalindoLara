@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Outdoors</h2>
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
    <form action="{{ route('outdoors.update',$outdoor->id) }}" method="POST">
     @csrf
        @method('PUT')
         <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 py-3">
          <div class="form-group">
              <strong>Title :</strong>
              <input type="text"  name="title" value="{{ $outdoor->title }}" class="form-control w-50" placeholder="Title">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Caption :</strong>
            <textarea class="form-control h-50" name="caption" value="{{$outdoor->caption}}">{{$outdoor->caption}}</textarea>
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-end mt-2">
            <a class="btn btn-danger" href="{{ route('outdoors.index') }}">Back</a>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
  </div>
    </form>
@endsection