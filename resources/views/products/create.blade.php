@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
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
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
     @csrf
         <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Name :</strong>
              <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Material :</strong>
              <select class="form-control main w-25" name="material_id">
                <option selected>-- Pilih Kategori --</option>
                @foreach ($materials as $m)
                        <option value="{{$m->id}}">{{$m->name}}</option>
                        @endforeach
            </select>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product Image :</strong>
            <input class="form-control" type="file" name="photo">
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-end">
            <a class="btn btn-danger" href="{{ route('products.index') }}"> Back</a>
              <button type="submit" class="btn btn-success">Submit</button>
      </div>
  </div>
    </form>
@endsection