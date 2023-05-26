@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material :</strong>
                {{ $product->material }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                @empty($product->photo)
                    <img src="{{ url('client/images/post/post-1.jpg') }}" alt="product image" class="img">
                    @else
                    <img src="{{ url('client/images')}}/{{$product->photo}}" alt="product image" class="img w-50">
                    @endempty
            </div>
        </div>
    </div>
@endsection