@extends('layouts.app')

@section('content')
    <style>
        a{
            text-decoration: none!important;
        }
    </style>
    <div class="container py-5"></div>
    <div class="container py-5"></div>
    <div class="row justify-content-center">
        <div class="jumbotron w-50">
            <div class="lead">Welcome</div>
            <div class="row">
                <div class="mx-auto">
                    <span class="lead h1 text-capitalize">{{Auth::user()->name}}</span>
                </div>
            </div>
            <div class="row pt-3">
                <div class="mx-auto">
                    <span class=" h1 text-capitalize"><a href="/dashboard">Navigate to Dashboard</a></span>
                </div>
            </div>
        </div>
    </div>
@endsection
