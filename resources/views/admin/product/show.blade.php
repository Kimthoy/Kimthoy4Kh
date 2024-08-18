@extends('layoutfb.backend')
@section('content')

    <p>Name: {{$product->name}}</p>
    <p>Category: {{$product->category->name}}</p>
    <p>Price: {{$product->price}}</p>
    <p>Description: {{$product->description}}</p>
    <!-- <div>{!! Html::img('/img/'.$product->image, $product->name, array('width'=>'10')) !!}</div> -->
    <div><img src="/img/{{$product->image}}" width="200px" alt=""></div>
    <br>
    <a class="btn btn-primary" href="{!! url('/product')!!}">Back</a>
@endsection