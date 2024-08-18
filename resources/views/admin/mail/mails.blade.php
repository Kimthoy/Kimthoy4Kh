@extends('layoutfb.backend')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Send Mails</title>
</head>
<body>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required readonly value="{{$re_mail->email}}" >
</div>
<div class="mb-3">
  <label  class="form-label">Reply Comment</label>
  <input class="form-control"  rows="3" required placeholder="Massage ..." name="reply_comment">
</div>

<a href="{{route('sendMail',$re_mail->id)}}" class="btn btn-sm btn-info">Send</a>
</body>

</html>
@endsection