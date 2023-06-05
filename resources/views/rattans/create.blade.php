@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Caption</h2>
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
    <form action="{{ route('rattans.store') }}" method="POST">
     @csrf
         <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Title :</strong>
              <input type="text" name="title" class="form-control" placeholder="Title">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Caption :</strong>
            <textarea name="caption" class="form-control" placeholder="Insert Caption"></textarea>
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-end">
            <a class="btn btn-danger" href="{{ route('rattans.index') }}"> Back</a>
              <button type="submit" class="btn btn-success">Submit</button>
      </div>
  </div>
    </form>
@endsection