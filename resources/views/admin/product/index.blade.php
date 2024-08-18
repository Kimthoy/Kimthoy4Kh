@extends('layoutfb.backend')
@section('content')

<a class="btn btn-success" href="{{ url('/product/create') }}">New Product</a>
<br><br>

@if(Session::has('product_delete'))
<div class="alert alert-primary alert-dismissible">
   
    <strong>Primary!</strong> {!! session('product_delete') !!}
</div>
@endif
@if (count($products) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        All Products
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">
            <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Created</th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>
                        <div>{!! $product->name !!}</div>
                    </td>
                    <td>
                        <div>{!! $product->description !!}</div>
                    </td>
                    <td>
                       <a href="{{url('/product/'.$product->id)}}"><img  src="/img/{{$product->image}}" width="120px" alt=""></a> 
                       
                    </td>
                    <td>
                        <div>{!! $product->price !!}</div>
                    </td>
                    <td>
                     <div>{!! $product->created_at !!} </div>
                    </td>
                 

                    <td>
                        <!-- <a href="" class="btn btn-info text-white">Detail</a> -->

                        <a class="btn btn-primary" href="{!! url('product/' . $product->id . '/edit') !!}">Edit</a>
                    </td>

                    <td>
                        {{ Html::form('DELETE','product/'.   $product->id)->open()}}
                        <button class="btn btn-danger delete" onclick=" return confirmAction()">Delete</button>
                        {{ Html::form()->close() }}
                    </td>
                </tr>
                @endforeach
                {{ $products->links('pagination::bootstrap-5');}}
            </tbody>
        </table>
    </div>
</div>

@endif
<script>
    function confirmAction() {
        let confirmAction = confirm("Are you sure to delete?");
        if (confirmAction == true) {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection