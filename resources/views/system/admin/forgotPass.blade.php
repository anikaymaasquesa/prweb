            <form class="forget-form" action="{{route("login.forgotPassword")}}" method="post">
                 {!!csrf_field()!!}
                <h3>{{trans("front_lang.FORGOT_PASSWORD")}}</h3>
                <p> {{trans("front_lang.INSTRUCTION_FORGOT_PASSWORD")}} </p>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="{{trans("placeholder_lang.PLACEHOLDER_USER")}}" name="email" /> 
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn red btn-outline">{{trans("front_lang.BTN_BACK")}} </button>
                    <button type="submit" class="btn green pull-right"> {{trans("front_lang.BTN_SEND")}} </button>
                </div>
            </form>