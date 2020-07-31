@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="jumbotron pt-5">
<div class="alert alert-info" role="alert">
  Hello there!   <span>Continue to read message</span>
</div>
          <div class="alert alert-success" role="alert"><h4 class="alert-heading"> Message!</h4>
          <p class="card-text">{{$message}}</p>

       </div>
  </div>
</div>
    </div>

</div>
@endsection
