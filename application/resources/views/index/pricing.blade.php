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
    .primary-bg{
        /*background: #489;*/
        width: 100%;
        background: #9c27b0;
        color: #fff;
    }
</style>
<div class="container-fluid p-0">
<div class="col-md-3"  style="background-color:#fff; position:relative">
    @include('auth.login')
</div>

    <div class="col-md-9 p-0 border-right">

        @include('includes.nav')

        <div class="content">
            <br><br><br> <br><br><br>
            <div class="col-md-12">
                <h3 class="light">Price Table<br/><small style="font-size:60% !important">All prices are payable annually and include a 14 days trial period</small></h3>
                <br/>
            </div>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th></th>
                        <th>All Modules</th>
                        <th>Email &amp; Phone Support</th>
                        <th>Missioners</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Free</td>
                        <td><i class="fa fa-check fa-2x text-green"></i></td>
                        <td><i class="fa fa-close fa-2x text-red"></i></td>
                        <td ><h5>upto 3</h5></td>
                    </tr>
                    <tr>
                        <td><h4 class="light">$80/<sup> mo</sup></h4></td>
                        <td><i class="fa fa-check fa-2x text-green"></i></td>
                        <td><i class="fa fa-check fa-2x text-green"></i></td>
                        <td ><h5>upto 50</h5></td>
                    </tr>
                    <tr>
                        <td><h4 class="light">$160/<sup> mo</sup></h4></td>
                        <td><i class="fa fa-check fa-2x text-green"></i></td>
                        <td><i class="fa fa-check fa-2x text-green"></i></td>
                        <td ><h5> upto 100</h5></td>
                    </tr>
                    <tr>
                        <td><h4 class="light">$250/<sup> mo</sup></h4></td>
                        <td><i class="fa fa-check fa-2x text-green"></i></td>
                        <td><i class="fa fa-check fa-2x text-green"></i></td>
                        <td ><h5>upto 500</h5></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection