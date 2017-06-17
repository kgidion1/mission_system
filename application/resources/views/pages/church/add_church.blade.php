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
                        <h4>New Church <small></small></h4>
                    </div>
                </div>
                <div class="container-fluid panel f-bar">

                    <div class="step-control">
                        <a class="item active" href="#1">
                            <span class="bullet">1</span>
                            <span class="title">Church Details</span>
                        </a>
                    </div>
                </div>
                <div class="container-fluid">
                    {!! Form::open(['method'=>'post', 'route'=>'insertChurch', 'class'=>'form-horizontal']) !!}
                    <div class="steps">
                        <div class="item active" id="1">
                            <div class="container">
                                <div class="col-md-6">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-3">Church Name</label>
                                            <div class="col-md-9">
                                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3">Parish</label>
                                            <div class="col-md-9">
                                                {!! Form::text('parish',null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-3">Archdeaconry</label>
                                            <div class="col-md-9">
                                                {!! Form::text('archdeaconry',null,['class'=>'form-control']) !!}
                                            </div>
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