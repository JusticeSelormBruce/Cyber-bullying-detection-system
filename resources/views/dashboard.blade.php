@extends('layouts.admin')
@section('render')

    <style>
        h1{
            font-size: 50pt!important;
        }
        a{
            text-decoration: none;
        }
    </style>
    <div class="container py-5">
        <div class="row  mt-5" ></div>
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 bg-primary">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-2">
                        <div class="mx-auto">
                            <div class="lead text-light">
                           some data hewre
                            </div>
                            <div class="row justify-content-center py-1">
                             ............................................
                            </div>
                            <div class="row justify-content-center">
                                <div class="py-1">
                                    <a href="/incoming-index">View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card w-100 h-50 " style="background-color: yellow">
                <div class="card-header"></div>
                <div class="card-body" style="background-color: #3c4858">
                    <div class=" row py-2">
                        <div class="mx-auto">
                            <div class="lead text-light">
                              some data here
                            </div>
                            <div class="row justify-content-center py-1">
                                ............................................
                            </div>
                            <div class="row justify-content-center">
                                <div class="py-1">
                                    <a href="/dispatch-index">View</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
