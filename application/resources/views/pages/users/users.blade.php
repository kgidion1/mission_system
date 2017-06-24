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
             <input id="search_user" class="form-control" placeholder="search_user....">
        </div>
        <div class="col-sm-4 col-md-4">
             <!-- <input id="search_missioner" class="form-control col-sm-3" placeholder="search_missioner...."> -->
        </div>
        <div class="col-md-4 ">
            <div class=" text-right pull-right" style="text-align:right">
               <a class="btn btn-success btn-md" href="{{route('register')}}"> <i class="fa fa-plus"></i> New User</a>
            </div>
        </div>
    </div>
      <div class="content-wrapper" style="height: 680px;">
        <div class="content-body">
            <div class="container-fluid">
        <table class="table table-bordered scrolled">
            <thead>
                <tr data-toggle="modal" data-target="#leave-details">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Contact</th>
                </tr>
            </thead>

            {{ csrf_field() }}
            @foreach($users as $user)
                {{--<tbody id="churches" style="height: 642px;">--}}
                <tr>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->contact}}</td>
                </tr>
                {{--</tbody>--}}
            @endforeach
        </table>
    </div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection