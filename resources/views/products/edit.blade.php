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
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
        @method('PUT')
         <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Name :</strong>
              <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Material :</strong>
              <select class="form-control main w-25" name="material_id">
                <option selected>-- Choose Material --</option>
                                    @foreach($materials as $m)
                                    @php $sel = ($m->id == $product->material_id) ? 'selected' : ''; @endphp
                                    <option value="{{ $m->id }}" {{ $sel }}>{{ $m->name }}</option>
                                    @endforeach
            </select>
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="form-label" for="nama">Product Image</label>
            <input class="form-control w-25" name="photo" type="file" >
            @if(!empty($product->photo)) <img class="mt-3" src="{{ url('client/images')}}/{{$product->photo}}" 
                                                             width="50%" class="img-thumbnail">
                                <br/>{{$product->photo}}
                                @endif
        </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-end mt-2">
            <a class="btn btn-danger" href="{{ route('products.index') }}"> Back</a>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
  </div>
    </form>
@endsection