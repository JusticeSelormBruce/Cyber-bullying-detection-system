@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="jumbotron pt-5">
<div class="alert alert-info" role="alert">
  Hello there!, the system has detected this Message to contain abusive words. You can select
  <span class="text-primary "><b>Yes</b></span>
  to continue to read or select  <span class="text-danger "><b>No</b></span> to discard this Massage
</div>

<div class="row mt-5 pt-5">
    <div class="mx-auto">
        <div class="row">
              <div class="col"> <a href="{{route('message.content',['message'=>$message])}}"  class="btn btn-primary btn-sm ">Yes</a> </div>
     <div class="col"> <a href="/"  class="btn btn-danger btn-sm">No</a> </div>
        </div>

      </div>
    </div>
</div>
    </div>

</div>
@endsection
