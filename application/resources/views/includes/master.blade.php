<?php /**
 * Created by PhpStorm.
 * User: TO-002
 * Date: 15/04/2017
 * Time: 10:19 PM
 */  ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mission - Login </title>
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('images.png') !!}">
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" type="text/css"/>
    <link rel="stylesheet" href="{!! asset('css/datepicker/css/bootstrap-datepicker3.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('css/index_custom.css') !!} " type="text/css" />
    <link rel="stylesheet" href="{!! asset('css/text-color.css') !!} " type="text/css" />
    <!-- <link rel="stylesheet" href="css/inputs.css" type="text/css" /> -->
    <link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!} " type="text/css" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/sweetalerts/sweetalert.css') !!}">
</head>

<body>
    @yield('content')

    <div class="modal" id="notif-dialog" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">

                <div class="modal-body container form-horzontal">
                    <div class="col-md-12">
                        <h5><b id="head"><a href="leaves.php?v=leave_details&id=0" >Leave rejected</a></b></h5>
                        <p id="body" class="document_description">Where you can lounge on a Lamu bed, looking out to the sparkling waters of Lake Victoria. Where you can charter a fishing-boat and head off with rod and tackle to fish for the legendary Nile Perch</p>

                        <p><small id="date" >Monday, 3 June 2017</small></p>
                    </div>
                </div>
                <div class="modal-footer">

                    <button data-dismiss='modal' class=" btn  btn-outline-primary btn-sm" id="del_document"><i class="fa fa-close"></i> Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <script src="{!! asset('js/tether.min.js') !!}" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="{!! asset('js/bootstrap.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/validate.js?v=449990')!!}" type="text/javascript"></script>
    <script src="{!! asset('js/moment.min.js?v=449') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/datepicker/js/bootstrap-datepicker.min.js') !!}"></script>
    <script src="{!! asset('js/custom.js?v=9992') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/sweetalerts/sweetalert.min.js') !!}"></script>

</body>
</html>
