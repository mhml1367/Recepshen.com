@extends('layout.index')

{{--@section('css')--}}
{{--    <link rel="stylesheet" href="/asset/bootstrap-slider/slider.css">--}}
{{--@endsection--}}

@section('content')
    <section class="blog-1-area about-blog">
        <div class="container">
            <div class="row login-wrapper">
                <div class="col-md-4 box login-box" id="login-level-1">
                    <h3>ورود کاربر</h3>
                    <div class="form-group">
                        <input type="text" placeholder="شماره تلفن" id="phone_number" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-success" id="submitNumber" value="ورود" />
                    </div>
                    <br />
                    <div class="form-group" id="error-log"></div>
                </div>
                <div class="col-md-4 box verify-box" id="login-level-2">
                    <h3>کد تاییدیه</h3>
                    <p>کد ارسال شده را وارد کنید.  (<span id="phone_number_label"></span>) </p>
                    <div class="form-group">
                        <input type="text" placeholder="کد ارسال شده" id="verifyCode" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-success" id="verifyCodeButton" value="ارسال" />
                    </div>
                    <br />
                    <div class="form-group" id="error-log-2"></div>
                </div>
                <div class="col-md-4 box sign-up-box" id="login-level-3">
                    <h3>ثبت نام</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="email" class="form-control" id="email" placeholder="ایمیل" />
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="password" placeholder="کد عبور" />
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="first_name" placeholder="نام" />
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="last_name" placeholder="نام خانوادگی" />
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="national_code" placeholder="کد ملی" />
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="city" placeholder="شهر" />
                        </div>
                    </div>
                    <br />
                    <div class="form-group">
                        <input type="button" class="btn btn-success" id="signUpButton" value="ثبت نام" />
                    </div>
                    <div class="form-group" id="error-log-3"></div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('js')
    <script src="/asset/bootstrap-slider/bootstrap-slider.js"></script>

    <script>

        function switchLevel(level) {
            $(".login-wrapper > div").css('display', 'none');
            $("#login-level-" + level).css('display', 'block');
        }

        var phone_number = '';
        var is_registered = 0;
        $(document).ready(function() {

            if(window.localStorage.getItem('RecepshenToken')) {
                if(window.localStorage.getItem('RecepshenIsRegistered') == 0)
                    switchLevel(3);
                else
                    window.location = '{{ url('') }}';
            }


            $("#submitNumber").click(function() {

                $(".preloader-wrapper, .preloder").css('display', 'block');
                phone_number = $("#phone_number").val();

                $.post('http://recepshen.ir/api/login', {
                    phone_number: phone_number
                }).done(function(result) {

                    $(".preloader-wrapper, .preloder").css('display', 'none');

                    if(result.status) {

                        is_registered = result.is_registered;
                        window.localStorage.setItem('RecepshenIsRegistered', result.is_registered);
                        $("#phone_number_label").html(phone_number);
                        switchLevel(2);

                    } else {
                        $("#error-log").html(result.error);
                    }

                });

            });

            $("#verifyCodeButton").click(function() {

                $(".preloader-wrapper, .preloder").css('display', 'block');

                $.post('http://recepshen.ir/api/verify', {
                    phone_number: phone_number,
                    code: $("#verifyCode").val()
                }).done(function(result) {

                    $(".preloader-wrapper, .preloder").css('display', 'none');

                    if(result.status) {

                        window.localStorage.setItem('RecepshenToken', result.token);

                        if(is_registered == 0)
                            switchLevel(3);
                        else
                            window.location = '{{ url('/') }}';

                    } else {
                        $("#error-log-2").html(result.error);
                    }

                });

            });


            $("#signUpButton").click(function() {

                $(".preloader-wrapper, .preloder").css('display', 'block');

                $.ajax({
                    url: 'http://recepshen.ir/api/register',
                    type: 'post',
                    data: {
                        email: $("#email").val(),
                        first_name: $("#first_name").val(),
                        last_name: $("#last_name").val(),
                        password: $("#password").val(),
                        national_code: $("#national_code").val(),
                        city: $("#city").val()
                    },
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + window.localStorage.getItem('RecepshenToken')
                    },
                    dataType: 'json',
                    success: function (result) {

                        $(".preloader-wrapper, .preloder").css('display', 'none');

                        if(result.status) {

							window.localStorage.setItem('RecepshenIsRegistered', 1);
                            window.location = '{{ url('/') }}';

                        } else {
                            $("#error-log-3").html(result.error);
                        }

                    }
                });


            });

        });

    </script>

@endsection
