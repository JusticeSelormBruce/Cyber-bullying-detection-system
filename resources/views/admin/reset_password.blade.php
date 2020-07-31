@extends('layouts.admin')
@section('render')

    <div class="container pt-5">
        <div class="jumbotron">
            @include('common.alert')
            <div class="row">
                <div class="mx-auto w-50">
                    <h5>Reset User Account</h5>
                    <form action="/reset-password" method="post">
                        <div class="input-group-sm py-3">
                            <select name="user_id" required class="form-control">
                                <option value=""> Select User to Assign Roles to:</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">
                                        {{$user->name}} <span class="mx-3"></span>({{$user->email}})
                                    </option>
                                @endforeach
                            </select>
                            <div class="row pt-2">
                                <div class="mx-auto">
                                    <button class="btn  btn-outline-dark btn-sm"><span class="mx-5">Reset Account</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
