@extends("layouts/layout_login")

@section("container")
<!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="images/pages/logo-big.png" alt="" /> 
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            @if(session()->has("response"))
            
            <div class="alert alert-block {{session("response.status")}} fade in ">
                <button type="button" class="close" data-dismiss="alert"></button>
                <strong>{{session("response.contentMessage")}}</strong> {{session("response.message")}} 
            </div>
            @endif
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="index.html" method="post">
                 {!!csrf_field()!!}
                <h3 class="form-title">{{trans("front_lang.LOGIN_TO_YOUR_ACCOUNT")}}</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span>{{trans("front_lang.ENTER_ANY_PASSWORD")}}</span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_USER")}}</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{trans("placeholder_lang.PLACEHOLDER_USER")}}" name="username" /> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_PASS")}}</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="{{trans("placeholder_lang.PLACEHOLDER_PASS")}}" name="password" /> </div>
                </div>
                <div class="form-actions">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" /> {{trans("label_lang.CHECK_REMEMBERME")}}
                        <span></span>
                    </label>
                    <button type="submit" class="btn green pull-right"> {{trans("front_lang.BTN_LOGIN")}} </button>
                </div>
                <div class="login-options">
                    <h4>{{trans("front_lang.LOGIN_WITH")}}</h4>
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" data-original-title="facebook" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="twitter" data-original-title="Twitter" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="googleplus" data-original-title="Goole Plus" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="linkedin" data-original-title="Linkedin" href="javascript:;"> </a>
                        </li>
                    </ul>
                </div>
                <div class="forget-password">
                    <h4>{{trans("front_lang.FORGOT_PASSWORD")}}</h4>
                    <p>{{trans("front_lang.FORGOT_PASSWORD_TEXT1")}}
                        <a href="javascript:;" id="forget-password"> {{trans("front_lang.FORGOT_PASSWORD_HERE")}} </a> {{trans("front_lang.FORGOT_PASSWORD_TEXT2")}} </p>
                </div>
                <div class="create-account">
                    <p> {{trans("front_lang.CREATE_ACCOUNT_TEXT")}}&nbsp;
                        <a href="javascript:;" id="register-btn"> {{trans("front_lang.CREATE_ACCOUNT_NOW")}} </a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            @include('system.admin.forgotPass')
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            @include('system.admin.registerUser')
            <!-- END REGISTRATION FORM -->
        </div>
        <script>
            var label_arr=[]; var el_module_settings=[];

            label_arr.LABEL_ACCEPT_TNC='{{trans("label_lang.LABEL_ACCEPT_TNC")}}';
            label_arr.PLACEHOLDER_CONTRY='{{trans("placeholder_lang.PLACEHOLDER_CONTRY")}}';
            label_arr.PLACEHOLDER_CITY='{{trans("placeholder_lang.PLACEHOLDER_CITY")}}';

            el_module_settings.asyncUrl='{{route("login.listingCity")}}';
        </script>
        <!-- END LOGIN -->
        @stop