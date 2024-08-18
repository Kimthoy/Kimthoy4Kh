
@extends('layoutfb.backend')
@section('content')
<h4 >Category Details</h4>
<br>
    <p >Name : {{$category->name}}</p>
    <p>Description : {{$category->description}}</p>
    <p>Created Date : {{$category->created_at}}</p>
    <a class="btn btn-outline-info btn-sm" href="{{route('category.list')}}">Back</a>
@endsection
    
 
  
