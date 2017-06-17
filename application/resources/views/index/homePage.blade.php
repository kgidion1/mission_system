@extends('includes.master')

@section('content')
<style>
    body {
        background-color: #fff !important;
        background-image: url('') !important;
    }
    
    .banner {
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }
    
    .h {
        height: 100vh;
        width: 400px;
        max-width: 100%;
        display: table-cell;
        vertical-align: middle;
        overflow-y: auto;
        overflow-x: hidden;
    }
    
    .menu-i {
        height: 100vh;
    }
    
    .light {
        font-weight: 300;
    }
    
    .content {
        padding: 0px 0;
    }
    
    .menu {
        text-align: right;
        margin-top: 20px;
    }
    
    .menu a {
        padding: 10px;
        text-transform: uppercase;
        color: #888 !important;
        border-radius: 4px;
        transition-duration: 0.5s;
    }
    
    .menu a:hover {
        color: #444 !important;
        cursor: pointer;
        background: #eee;
    }
    
    .nav {
        padding-top: 10px;
    }
    
    .form-group div {}
    
    .form-group {}
    
    .form-group label {
        padding-top: 4px;
        color: #777;
        font-weight: 400;
    }
    
    .btn-primary {
        color: #fff !important;
    }
    
    .signup .form-control {
        max-width: 100%;
        width: 400px;
    }    
    .border-right {
        border-left: 1px #ddd solid;
        height: 100vh;
    }
    .p-0{
        padding: 0 !important;
    }
    .btn-outline-primary:hover, .btn-outline-primary:focus{
        color: white!important
    }

    .menu a.active{
        background: #f0f0f0;
    }
</style>
<div class="container-fluid p-0">

    <div class="col-md-3"  style="background-color:#fff; position:relative">
        @include('auth.login')
    </div>

    <div class="col-md-9 p-0 border-right">

        @include('includes.nav')

        <div class="content">
            <div class="padding full-height" style="padding:100px 30px; background-image:url('{!! asset('dashboard.png') !!}'); background-size:contain; background-repeat:no-repeat; background-position:right">
                <h5 class="light ">Online,Church, Missioners  Management System</h5>
                 <h2 class="light ">Less Paper Work, More productivity</h2>
                 <br/>
                 <a class="btn btn-primary" href="/about">Learn More <i class="fa fa-angle-right"></i></a>
                <!--  <a class="btn btn-success" href="?v=signup">Create Account</a> -->
                 <div class="row"> </div>
	        </div>
        </div>
    </div>
</div>
@endsection
