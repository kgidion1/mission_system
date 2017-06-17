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
        <div class="col-sm-4 col-md-4">
             <input id="search_missioner" class="form-control col-sm-3" placeholder="search_missioner....">
        </div>
        <div class="col-sm-4 col-md-4">
             <!-- <input id="search_missioner" class="form-control col-sm-3" placeholder="search_missioner...."> -->
        </div>
        <div class="col-md-4">
            <div class=" text-right pull-right" style="text-align:right">
               <a class="btn btn-success btn-md" href="{{url('/missioners/addMissioner')}}"> <i class="fa fa-plus"></i> New Missioner</a>
            </div>
        </div>
    </div>
      <div class="content-wrapper" style="height: 680px;">
        <div class="content-body">
          <div class="container-fluid">
            <table class="table scrolled">
                <thead>
                    <tr >
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact</th>
                        <th>Email Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                {{ csrf_field() }}
                @foreach($missioners as $missioner)
                {{--<tbody id="churches">--}}
                <tr>
                   <td>{{$missioner->firstname}}</td>
                   <td>{{$missioner->lastname}}</td>
                   <td>{{$missioner->contact}}</td>
                   <td>{{$missioner->email}}</td>
                   <td>
                       <a href="#" data-toggle="modal" data-target="#view{{$missioner->id}}"  class="btn btn-xs  btn-info">View</a>
                       <a href="#" data-toggle="modal" data-target="#edit{{$missioner->id}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;
                       <a href="#" class="btn btn-danger">Remove</a>
                   </td>
                </tr>
                {{--</tbody>--}}
                @endforeach
            </table>
          </div>
        </div>
      </div>
        <!-- edit modal -->
        @foreach($missioners as $missioner)
            <div id="edit{{$missioner->id}}" class="modal fade" tabindex="-1"  role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Missioner Info</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" role="form" >
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="id">Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="{{$missioner->firstname." ".$missioner->lastname}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="title">Contact</label>
                                    <div class="col-sm-4">
                                        <input type="name" class="form-control" value="{{$missioner->contact}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="description">Email</label>
                                    <div class="col-sm-6">
                                        <input type="name" class="form-control" value="{{$missioner->email}}">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success waves-effect" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection