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
        <div class="container-fluid f-bar" style="padding:15px;">
            <div class="col-xs-4 col-md-4">
                <input id="search_church" class="form-control" placeholder="search_member.....">
            </div>
            <div class="col-xs-4 col-md-4">
                <!-- <input id="search_church" class="form-control" placeholder="search_church....."> -->
            </div>
            <div class="col-md-4">
                <div class=" text-right" style="text-align:right">
                    <a class="btn btn-primary btn-md" data-toggle="modal" data-target="#addMember" href="#"> <i class="fa fa-plus"></i> New Member</a>
                </div>
            </div>
        </div>
        <div class="content-wrapper" style="height: 680px;">
            <div class="content-body">
                <div class="container-fluid">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Church</th>
                            <th>Contact</th>
                            <th>Date Added</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        {{ csrf_field() }}
                        <tbody>
                        @foreach($new_members as $member)

                            <tr>
                                <td>{{$member->firstname}}</td>
                                <td>{{$member->lastname}}</td>
                                <td>{{$member->church}}</td>
                                <td>{{$member->contact}}</td>
                                <td>{{$member->created_at}}</td>
                                <td>
                                    {{--<a href="#" data-toggle="modal" data-target="#edit{{$member->id}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;--}}
                                    <a href="#" data-toggle="modal" data-target="#delete{{$member->id}}" class="btn btn-danger">Remove</a>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @foreach($new_members as $member)
        <!---- edit Modal ---->
            {{--<div id="edit{{$church->id}}" class="modal fade" tabindex="-1"  role="dialog">--}}
                {{--<div class="modal-dialog">--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="modal-header">--}}
                            {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                            {{--<h4 class="modal-title">Edit Church Info</h4>--}}
                        {{--</div>--}}
                        {{--<div class="modal-body">--}}
                            {{--<form class="form-horizontal" role="form" >--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label col-sm-2" for="id">Name</label>--}}
                                    {{--<div class="col-sm-4">--}}
                                        {{--<input type="text" class="form-control" value="{{$church->church}}">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label col-sm-2" for="title">Parish</label>--}}
                                    {{--<div class="col-sm-4">--}}
                                        {{--<input type="name" class="form-control" value="{{$church->parish}}">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label col-sm-2" for="description">Archdeaconry</label>--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<input type="name" class="form-control" value="{{$church->archdeaconry}}">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label col-sm-2" for="description">Diocese</label>--}}
                                    {{--<div class="col-sm-6">--}}
                                        {{--<input type="name" class="form-control" value="Namirembe">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                        {{--<div class="modal-footer">--}}
                            {{--<button type="submit" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!------------------------- delete (Confirm)? Modal ------------------------------>
            <div id="delete{{$member->id}}" class="modal fade" tabindex="-1"  role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        {!! Form::open(['method'=>'post', 'route'=>['Member.remove',$member->id]]) !!}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to remove {{$member->firstname}}, {{$member->lastname}}?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger waves-effect" onclick="$('.modal').modal('hide')">Yes</button>
                            <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">No</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        @endforeach

        <!--------------------- Add New Member --------------------------->
        <div id="addMember" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">

                    {!! Form::open(['method' => 'POST', 'url' => 'addMember', 'class' => 'form-horizontal']) !!}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add Member</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">FirstName</div>
                                {!! Form::text('firstname',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">LastName</div>
                                {!! Form::text('lastname',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">Church</div>
                                {!! Form::text('church',null,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">Contact</div>
                                {!! Form::text('contact',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" >Add</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection

<script type="text/javascript">
    swal({
        title: 'Error!',
        text: 'Do you want to continue',
        type: 'error',
        confirmButtonText: 'Cool'
    })

</script>