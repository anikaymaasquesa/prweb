            <form class="register-form" action="{{route("login.registerUser")}}" method="post">
                   {!!csrf_field()!!}
                <h3>{{trans("front_lang.TITLE_SIGN_UP")}}</h3>
                <p> {{trans("front_lang.ENTER_DETIAL_INFORMATION")}} </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_NAME")}}</label>
                    <div class="input-icon">
                        <i class="fa fa-font"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="{{trans("placeholder_lang.PLACEHOLDER_NAME")}}" name="name" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_LAST_NAME")}}</label>
                    <div class="input-icon">
                        <i class="fa fa-font"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="{{trans("placeholder_lang.PLACEHOLDER_LAST_NAME")}}" name="lastname" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_DATE_BIRTH")}}</label>
                    <div class="input-icon">
                        <i class="fa fa-calendar"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="{{trans("placeholder_lang.PLACEHOLDER_DATE_BIRTH")}}" name="dateOfBirth" id="dateOfBirth"/> </div>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_EMAIL")}}</label>
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="{{trans("placeholder_lang.PLACEHOLDER_EMAIL")}}" name="email" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_CONTRY")}}</label>
                    <select name="country" id="country_list" class="select2 form-control">
                       <option value=""></option>
                       @if($response['error']=="no")
                        @foreach($response['content'] as $country)
                              <option value="{{$country->acronymCountry}}" acr="{{$country->idCountry}}">
                                    {{$country->nameCountry}}
                              </option>
                        @endforeach
                       @else
                        <option value="">{{trans("front_lang.EMPTY_VALUE")}}</option>
                       @endif
                    </select>
                </div>                  
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_CITY")}}</label>
                    <div class="input-icon">
                        <i class="fa fa-location-arrow"></i>
                         <select name="city" id="city_list" class="select2 form-control">
                       <option value=""></option>
                       
                    </select>
                </div>
                <p> {{trans("front_lang.ENTER_DETAIL_ACCOUNT")}} </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_PASS")}}</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="{{trans("placeholder_lang.PLACEHOLDER_PASS")}}" name="password" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{trans("label_lang.LABEL_RE_PASSWORD")}}</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-check"></i>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="{{trans("placeholder_lang.PLACEHOLDER_RE_PASSWORD")}}" name="rpassword" /> </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="tnc" /> {{trans("front_lang.SIGN_UP_TEXT")}}
                        <a href="javascript:;">{{trans("front_lang.SIGN_UP_TERMS")}} </a> &
                        <a href="javascript:;">{{trans("front_lang.SIGN_UP_POLICY")}} </a>
                        <span></span>
                    </label>
                    <div id="register_tnc_error"> </div>
                </div>
                <div class="form-actions">
                    <button id="register-back-btn" type="button" class="btn red btn-outline">{{trans("front_lang.BTN_BACK")}}</button>
                    <button type="submit" id="register-submit-btn" class="btn green pull-right">{{trans("front_lang.TITLE_SIGN_UP")}}</button>
                </div>
            </form>