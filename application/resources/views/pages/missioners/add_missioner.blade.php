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
            <h4>New Missioner <small></small></h4>
        </div>
  <!--       <div class="col-md-6">
            <div class=" text-right" style="text-align:right">
                <a class="btn btn-primary btn-md" href="?v=new_employee&c=2"> <i class="fa fa-plus"></i> New Church</a>
            </div>
        </div> -->
    </div>
    <div class="container-fluid panel f-bar">

        <div class="step-control">
            <a class="item active" href="#1">
                <span class="bullet">1</span>
                <span class="title">Missioner Details</span>
            </a>
<!-- 
            <a class="item" href="#2">
                <span class="bullet">2</span>
                <span class="title">Employement Details</span>
            </a> -->

 <!--            <a class="item" href="#3">
                <span class="bullet">3</span>
                <span class="title">Contact Details</span>
            </a> -->
        </div>
    </div>
    <div class="container-fluid">
        {!! Form::open(['method'=>'post', 'route'=>'insertMissioner', 'class'=>'form-horizontal']) !!}
        <div class="steps">
            <div class="item active" id="1">
                <div class="container">
                    <div class="col-md-6">
                        {{--<div class="form-horizontal">--}}
                            <div class="form-group">
                                <label class="col-md-3">First Name</label>
                                <div class="col-md-9">
                                    {!! Form::text('firstname',null,['class'=>'form-control']) !!}
                                    {{--<input id="first_name" class="form-control" placeholder="First Name">--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Contact</label>
                                <div class="col-md-9">
                                    {!! Form::tel('contact',null,['class'=>'form-control']) !!}
                                    {{--<input id="contact" required="required" placeholder="Contact" data-empty-message="provide last name" class="form-control">--}}
                                </div>
                            </div>
                    </div>
                        {{--</div>--}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-md-3">Last Name</label>
                            <div class="col-md-9">
                                {!! Form::text('lastname',null,['class'=>'form-control']) !!}
                                {{--<input id="last_name" class="form-control" required="required" data-empty-message="provide last name" placeholder="Last Name" data-input="letters">--}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3">Email Address</label>
                            <div class="col-md-9">
                                {{--<input id="email" required="required" placeholder="Email Address" data-empty-message="provide email Address" class="form-control">--}}
                                {!! Form::email('email',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12">
            <hr>
           <div class="text-right step-ride">
                <a class="btn btn-danger"><i class="fa fa-remove"></i> Cancel</a>
                <button class="btn btn-success"> <i class="fa fa-check-circle"></i> Save </button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>



        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection