@extends("layouts/front/layout_front");
@section("container")
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{asset("css/pages/admin/lock-2.css")}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<div class="page-lock">
    <div class="page-logo">
        <a class="brand" href="">
            <img src="{{asset("images/pages/logo-big.png")}}" alt="logo" /> </a>
    </div>
    <div class="page-body">
        <div class="alert alert-block alert-{{$response['status']}} fade in">
            <h4 class="alert-heading">{{$response['message']}}</h4>
            <p>{{$response['content']['message1']}}</p>
            <p>{{$response['content']['message2']}}</p>
            <p>
                <a class="btn blue" href="{{route("login.index")}}"> {{$response['content']['btnText']}}</a>
            </p>
        </div>
    </div>
    <div class="page-footer-custom"> 2014 &copy; Metronic. Admin Dashboard Template. </div>
</div>
         <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset("js/pages/admin/login/lock-2.js")}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        @stop