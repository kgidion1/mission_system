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

        <div class="content text-center">
                <br><br>
            <h4><small><i class="fa fa-phone text-primary"></i> call - </small> +256 (0) 775624333</h4>
            <h4><small><i class="fa fa-envelope text-primary"></i> email - info@hivetechug.com </small> </h4>
            <br/>
            <br/>
            <h6 class="light">Quick Message</h6><hr/>
            <div class="row text-left">
                 <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <label>Your Names*</label>
                     <input class='form-control'/>
                     <label>Church*</label>
                     <input class='form-control'/>
                         <label>Your Email*</label>
                     <input class='form-control'/>
                </div>
                <div class="col-md-4">
                    <label>Message*</label>
                    <textarea class='form-control' rows="4"></textarea>
                </div>
                <br>
                <div class="col-xs-10">
                    <button class="btn btn-primary btn-sm pull-right"><i class="fa fa-send"></i> Send</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection