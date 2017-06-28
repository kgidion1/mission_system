@extends('includes.app')
    <!-- Horizontal navigation and top css-->
@section('content')

    <div class="app-content content container-fluid"  style="background: #fff;">
      <div class="content-wrapper" style="height: 620px;">
        <!-- <div class="content-header row">
        </div> -->
        <div class="content-body"><!--fitness stats-->
<!-- activity charts -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
    <div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="card-block">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">
                            <div class="media px-1">
                                <div class="media-left media-middle">
                                    <!-- <i class="icon-box font-large-1 blue-grey"></i> -->
                                </div>
                                <p class="text-muted">Active Church Members
                                <span class="info float-xs-right font-large-1 text-bold-300"></span></p>
                                <div class="media-body text-xs-right">
                                    <span class="font-large-2 text-bold-300 info">5,879</span>
                                </div>
                                <a href="{{ url('/church/Members') }}" class="btn btn-success">View All</a>
                            </div>
                        </div>
                        {{--<div class="col-xl-4 col-lg-6 col-sm-12 border-right-blue-grey border-right-lighten-5">--}}
                            {{--<div class="media px-1">--}}
                                {{--<div class="media-left media-middle">--}}
                                    {{--<!-- <i class="icon-tag3 font-large-1 blue-grey"></i> -->--}}
                                {{--</div>--}}

                                {{--<p class="text-muted">Total System Users<span class="deep-orange float-xs-right"></span></p>--}}
                                {{--<div class="media-body text-xs-right">--}}
                                    {{--<span class="font-large-2 text-bold-300 deep-orange">423</span>--}}
                                {{--</div>--}}
                               {{--<a href="{{ url('/users/viewUsers') }}" class="btn btn-warning">View All</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-xl-4 col-lg-6 col-sm-12">
                            <div class="media px-1">
                                <div class="media-left media-middle">
                                    <!-- <i class="icon-shuffle3 font-large-1 blue-grey"></i> -->
                                </div>
                               
                                <p class="text-muted">Mission_Coordinators<span class="danger float-xs-right"></span></p>
                                 <div class="media-body text-xs-right">
                                    <span class="font-large-2 text-bold-300 danger">1600</span>
                                </div>
                                 <a href="{{ url('/mission/Coordinators') }}" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card notification-box" style="height: 621.5px;">
        <p class="title">Notifications (0)</p>
            <div class="card-body mt-2">
                <!-- <div class="card-block">
                    <div id="activity-division" class="height-250 echart-container"></div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!--/ activity charts -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection