@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
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
    <form action="{{ route('homes.update',$home->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
        @method('PUT')
         <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 py-3">
          <div class="form-group">
              <strong>Title :</strong>
              <input type="text"  name="title" value="{{ $home->title }}" class="form-control w-50" placeholder="Name">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Caption :</strong>
            <textarea class="form-control h-50" name="caption" value="{{$home->caption}}">{{$home->caption}}</textarea>
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 py-3">
        <div class="form-group">
            <label class="form-label" for="nama">Image</label>
            <input class="form-control w-25" name="image" type="file" >
            @if(!empty($home->image)) <img class="mt-3" src="{{ url('client/images')}}/{{$home->image}}" 
                                                             width="50%" class="img-thumbnail">
                                <br/>{{$home->image}}
                                @endif
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-end mt-2">
            <a class="btn btn-danger" href="{{ route('homes.index') }}"> Back</a>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
  </div>
    </form>
@endsection