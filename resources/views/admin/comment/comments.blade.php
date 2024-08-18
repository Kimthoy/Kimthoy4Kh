@extends('layoutfb.backend')
@section('content')
@if(session('recive_message'))
            <div class="alert alert-warning alert-dismissible">
             
                <strong>Primary!</strong> {{ session('recive_message') }}
            </div>
        @endif
<table class="table table-striped table-hover">
   <thead>
   <tr>
      <th scope="col">No.</th>
      <th scope="col">User ID</th>
      <th scope="col">Email</th>
      <th scope="col">Comment</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
       @foreach ($comments as $comment)
    <tr>
         <td>{{$comment->id}}</td>
         <td>{{$comment->user_id}}</td>
         <td>{{$comment->email}}</td>
         <td>{{$comment->comment}}</td>
         <td>{{$comment->created_at}}</td>
         <td><a href="{{route('sendMail',$comment->id)}}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Reply</a><div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div></td>
         <td></td>
      </tr>
      @endforeach
      </tbody>
</table>

@endsection