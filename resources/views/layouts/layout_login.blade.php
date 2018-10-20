<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>{{trans("front_lang.TITLE_OFICIAL")}}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/plugins/simple-line-icons/simple-line-icons.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/plugins/bootstrap-switch/css/bootstrap-switch.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset("css/plugins/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("css/plugins/select2/css/select2-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset("css/components.css")}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset("css/plugins.css")}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{asset("css/pages/admin/login-4.css")}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        
    @yield('container')
    @yield('footer')
        <!--[if lt IE 9]>
<script src="{{asset("js/respond.min.js")}}"></script>
<script src="{{asset("js/excanvas.min.js")}}"></script> 
<script src="{{asset("js/ie8.fix.min.js")}}"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset("js/jquery.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/js.cookie.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/jquery-slimscroll/jquery.slimscroll.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/jquery.blockui.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js")}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset("js/plugins/jquery-validation/js/jquery.validate.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/jquery-validation/js/localization/messages_es.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/jquery-validation/js/additional-methods.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/select2/js/select2.full.min.js")}}" type="text/javascript"></script>
        <script src="{{asset("js/plugins/backstretch/jquery.backstretch.min.js")}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset("js/app.js")}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset("js/pages/admin/login/login-4.js")}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>