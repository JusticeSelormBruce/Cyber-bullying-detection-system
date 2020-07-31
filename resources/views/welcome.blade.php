@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">

        <div class="mx-auto w-100">
         <div class="content">


             <div class="w">
                                 <form action="/submit-word" method="POST">
                                     @csrf
                                    <div class="card">
                                        <div class="card-body">
                                              <style>
                                              body{
                                                background-color:#383838;
                                              }
                                              </style>

                                            <h5 style="color:red;"  class="card-title">Sample Message Here</h5>
                                            <div class="form-group">
                                                <textarea name="message" id="" cols="30" rows="10" class="form-control" required></textarea>
                                            </div>
                                            <div class="bg-danger">
                                                {{$errors->first('message')}}
                                            </div>
                                            <div class="row py-2">
                                                <div class="mx-auto">
                                                    <button class="btn btn-primary btn-sm">Check for abusive content</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                           <div class="row">
                                               <div class="mx-auto">
                                              <div class="alert alert-dark" role="alert"> Note: <span> This system uses AI to detect either a message contains abusive words /  buyllying words</span>
                                              </div> </div>
                                           </div>
                                        </div>
                                    </div>
                                 </form>
             </div>
         </div>
        </div>
     </div>
</div>

@endsection
