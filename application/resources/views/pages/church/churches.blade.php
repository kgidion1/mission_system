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
            <input id="search_church" class="form-control" placeholder="search_church.....">
        </div>
        <div class="col-xs-4 col-md-4">
            <!-- <input id="search_church" class="form-control" placeholder="search_church....."> -->
        </div>
        <div class="col-md-4">
            <div class=" text-right" style="text-align:right">
               <a class="btn btn-primary btn-md" href="{{url('/church/addchurch')}}"> <i class="fa fa-plus"></i> New Church</a>
            </div>
        </div>
    </div>
      <div class="content-wrapper" style="height: 680px;">
      <div class="content-body">
        <div class="container-fluid">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Church</th>
                        <th>Parish</th>
                        <th>Archdeaconry</th>
                        {{--<th>Diocese</th>--}}
                        <th>Date Added</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                {{ csrf_field() }}
                <tbody>
                @foreach($data as $church)

                    <tr>
                        <td>{{$church->church}}</td>
                        <td>{{$church->parish}}</td>
                        <td>{{$church->archdeaconry}}</td>
                        {{--<td>Namirembe</td>--}}
                        <td>{{$church->created_at}}</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#edit{{$church->id}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;
                            <a href="#" data-toggle="modal" data-target="#delete{{$church->id}}" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        </div>
      </div>

      @foreach($data as $church)
      <!---- edit Modal ---->
        <div id="edit{{$church->id}}" class="modal fade" tabindex="-1"  role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Church Info</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" >
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="id">Name</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="{{$church->church}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="title">Parish</label>
                                <div class="col-sm-4">
                                    <input type="name" class="form-control" value="{{$church->parish}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="description">Archdeaconry</label>
                                <div class="col-sm-6">
                                    <input type="name" class="form-control" value="{{$church->archdeaconry}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="description">Diocese</label>
                                <div class="col-sm-6">
                                    <input type="name" class="form-control" value="Namirembe">
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
      <!------------------------- delete (Confirm)? Modal ------------------------------>
        <div id="delete{{$church->id}}" class="modal fade" tabindex="-1"  role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    {!! Form::open(['method'=>'post', 'route'=>['Church.remove',$church->id]]) !!}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete Confirmation</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to remove {{$church->church}}, {{$church->parish}}?</p>
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