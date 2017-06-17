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
         <div class="banner" style="background-color:#f9f9f9; padding:50px 20px;
     background-image:url('{!! asset('ph-10013.jpg') !!}'); background-position:left">
    <div class="container">
     <div class="col-md-6 text-white">
      <h4>Mission System is an online based Church  management system</h4>
         <p>Developed for Churches who need to manage their Missioners with minimal effort.</p>
     </div>
    </div>
</div>
<div class="container text-center p-0 primary-bg">
     <div class="col-md-4 block">
      <i class="fa fa-circle-o"></i>
         <h4 class="light">Easy</h4>
     </div>
     <div class="col-md-4 block">
      <i class="fa fa-fighter-jet"></i>
         <h4 class="light">Fast</h4>
     </div><div class="col-md-4 block">
      <i class="fa fa-handshake-o"></i>
         <h4 class="light">Reliable</h4>
     </div>
</div>

<div class="container">
     <br/>
     <br/>
     <br/>
     <div class="col-md-6">
         <br/>
         <h2 class="text-primary light">Features</h2>
         <p><i class="fa fa-check-circle text-green"></i> Managing Missioners profiles</p>
           <p><i class="fa fa-check-circle text-green"></i> Managing User Accounts</p>
           <p><i class="fa fa-check-circle text-green"></i> Managing Events</p>
           <p><i class="fa fa-check-circle text-green"></i> Sending SMS Alerts</p>
         <h2 class="text-primary light">Achieve More...</h2>
         <p>Get more features for less</p><br/>
         <a class="btn btn-outline-primary">See Pricing <i class="fa fa-angle-right"></i></a>
         <!-- <p><i class="fa fa-check-circle text-green"></i> Events Management</p>
         <p><i class="fa fa-check-circle text-green"></i> Employee Atendance</p>
         <p><i class="fa fa-check-circle text-green"></i> Performance Appraisal</p> -->
     </div>
     <div class="col-md-6">
     <img class="img-fluid" src="{!! asset('dashboard.png') !!}"/>
     </div>
    </div>
        </div>
    </div>
</div>
@endsection