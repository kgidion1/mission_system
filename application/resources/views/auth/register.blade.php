<style type="text/css">

    .card {
        border-radius: 1px;
    }
    .main {
        min-height: 30vh;
        background: white;
        margin-top: 0vh;
        margin-bottom: 0vh;
        padding: 0px;
    }
    .card {
        position: relative;
        display: block;
        margin-bottom: .75rem;
        background-color: #fff;
        border-radius: .25rem;
        border: 1px solid rgba(0,0,0,.125);
    }
</style>

@extends('includes.app')

@section('content')
        <!-- Horizontal navigation and top css-->

<div class="app-content content container-fluid"  style="background: #fff;">
    <div class="content-wrapper" style="height: 681px;">
        <div class="content-body">
            <div class="main card container-fluid">
                <div class="container-fluid f-bar" style="padding:15px;">
                    <div class="col-xs-6">
                        <h4>New User<small></small></h4>
                    </div>
                </div>
                <div class="container-fluid panel f-bar">

                    <div class="step-control">
                        <a class="item active" href="#1">
                            <span class="bullet">1</span>
                            <span class="title">User Details</span>
                        </a>
                    </div>
                </div>

                <form class="form-horizontal" role="form" method="post" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                <div class="container-fluid">
                    <div class="steps">
                        <div class="item active" id="1">
                            <div class="container">

                                    <div class="col-md-6">
                                    {{--<div class="form-horizontal">--}}
                                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                            <label for="firstname" class="col-md-3">First Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="name" name="firstname" class="form-control" value="{{ old('firstname') }}" required>
                                                @if ($errors->has('firstname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('firstname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                            <label for="lastname" class="col-md-3">Last Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="name" name="lastname" class="form-control" value="{{ old('lastname') }}" required>
                                                @if ($errors->has('lastname'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('lastname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                                            <label for="contact" class="col-md-3">Contact</label>
                                            <div class="col-md-9">
                                                <input type="text" id="contact" name="contact" value="{{ old('contact') }}" class="form-control" required>
                                                @if ($errors->has('contact'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('contact') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-3">Email Address</label>
                                            <div class="col-md-9">
                                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    {{--</div>--}}
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <label for="username" class="col-md-3">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" id="name" name="username" class="form-control" value="{{ old('username') }}" required>
                                                @if ($errors->has('username'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('username') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-md-3">Password</label>
                                            <div class="col-md-9">
                                                <input name="password" type="password" id="password" class="form-control" required>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirm" class="col-md-3">Confirm Password</label>
                                            <div class="col-md-9">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>
                                    {{--</div>--}}
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <hr>
                        <div class="text-right step-ride">
                            <a class="btn btn-danger"><i class="fa fa-remove"></i> Cancel</a>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check-circle"></i> Save </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection