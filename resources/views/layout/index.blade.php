<!doctype html>
<html lang="fa">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield ("title","رسپشن - رزرو آنلاین هتل  و رزرو اتاق")</title>
      <meta name="description" content="@yield ("description","رسپشن رزرو آنلاین هتل و رزرو اتاق آنلاین اتاق بوم گردی را با تخفیف ها متنوع انجام می دهد")">
      <meta name="Keywords" content="@yield ("Keywords","رزرو هتل مشهد , هتل کيش , هتل قشم , هتل تهران , رزرو هتل  , رزرو هتل آپارتمان , رزرو آنلاین , بوم گردی , رزرو اتاق")">
      <link rel="icon" href="{{ asset('asset/img/favicon/favicon.png') }}">
      <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="/{{ asset('asset/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
      <link href="{{ asset('asset/css/elements.css') }}" rel="stylesheet">
      <link href="{{ asset('style.css') }}" rel="stylesheet">
      <link href="{{ asset('responsive.css') }}" rel="stylesheet">
      <link href="{{ asset('asset/css/persian-datepicker.css') }}" rel="stylesheet">
      <meta name="_token" content="{{ csrf_token() }}">
@yield ("css")
   </head>
   <body id="homepage-3">

  <div class="preloader-wrapper">
    <div class="preloder">
      <div class="shape shape-1"></div>
      <div class="shape shape-2"></div>
      <div class="shape shape-3"></div>
      <div class="shape shape-4"></div>
    </div>
  </div>
  <div id="app">
      <div class="{{ Request::is('tours/*') ? 'tours' : '' }}{{ Request::is('tours') ? 'tours' : '' }}{{ Request::is('flight/*') ? 'flight' : '' }}{{ Request::is('flight') ? 'flight' : '' }}{{ Request::is('trains/*') ? 'train' : '' }}{{ Request::is('trains') ? 'train' : '' }}{{ Request::is('ecotourisms/*') ? 'ecotourism' : '' }}{{ Request::is('ecotourism/*') ? 'ecotourism' : '' }}{{ Request::is('ecotourisms') ? 'ecotourism' : '' }}{{ Request::is('hotels/*') ? 'Hotels' : '' }}{{ Request::is('hotel/*') ? 'Hotels' : '' }}{{ Request::is('/') ? 'Hotels' : '' }}{{ Request::is('hotels') ? 'Hotels' : '' }}
      @if (url()->full() == "http://recepshen.com")
      Hotels
      @endif">
      @include("layout.header")
      @yield ("search")
      </div>

      @yield ("content")

      @include('layout.footer')

{{-- <div id="register" tabindex="-1" role="dialog" class="modal fade">
    <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header"><b class="modal-title">ثبت نام</b> <button type="button"
                    data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <lable>چند نکته مهم جهت پرکردن فرم ثبت نام : </lable>
                            <p>
                              1 - در صورت صحیح بودن آدرس ایمیل، یک ایمیل فعال سازی بصورت خودکار دریافت خواهید کرد . بر روی لینک فعال سازی کلیک نمایید.
                              <br>2 - رمز عبور باید شش حرف یا بیشتر باشد.
                              <br>3 - برای وارد کردن نام کاربری و رمز عبور از حروف انگلیسی استفاده نمایید.
                              <br>4 - در تکمیل کردن فرم عضویت دقت کنید و نام کاربری و رمز عبور خود را به یاد داشته باشید تا برای ورود به سایت دچار مشکل نشوید.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                  <div class="col">
                     <div class="form-group"><label for="email" class="col-form-label">ایمیل:</label> <input
                            type="email" id="emailRegister" class="form-control"></div>
                        </div>
                        <div class="col">

                        <div class="form-group"><label for="national_code" class="col-form-label">پسورد:</label> <input
                                type="password" id="passwordRegister" class="form-control"></div>
                        </div>

                </div>
                <div class="row">

                    <div class="col">
                        <div class="form-group"><label for="first_name" class="col-form-label">نام:</label> <input
                                type="text" id="first_name" class="form-control"></div>
                        <div class="form-group"><label for="national_code" class="col-form-label">کدملی</label> <input
                                type="text" id="national_code" class="form-control"></div>
                    </div>
                    <div class="col">
                        <div class="form-group"><label for="last_name" class="col-form-label">نام خانوادگی</label>
                            <input type="text" id="last_name" class="form-control"></div>
                        <div class="form-group"><label for="phone_number" class="col-form-label">موبایل:</label> <input
                                type="text" id="phone_number" class="form-control"></div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="Sir_Madam" class="col-form-label">آقا/خانم:</label>
                            <select name="Sir_Madam" id="Sir_Madam">
                                    <option value="M" selected>اقا</option>
                                    <option value="F">خانم</option>
                                  </select>
                        </div>
                        <div class="form-group"><label for="city" class="col-form-label">شهر:</label> <input
                                type="text" class="form-control"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button type="button" data-dismiss="modal" class="btn btn-secondary">بستن</button> <button type="button" id="subRegister" class="btn btn-primary">ثبت نام</button></div>
        </div>
    </div>
</div> --}}
<div id="login" tabindex="-1" role="dialog" class="modal fade">
    <div role="document" class="modal-dialog modal-dialog-centered modal">
        <div class="modal-content">
            <div class="modal-header"><b class="modal-title">ورود به سایت</b> <button type="button"
                    data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col">
                     <div class="form-group"><label for="email" class="col-form-label">ایمیل:</label> <input
                            type="email" id="emailLogin" class="form-control"></div>

                        <div class="form-group"><label for="national_code" class="col-form-label">کلمه عبور:</label> <input
                                type="password" id="passwordLogin" class="form-control"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button type="button" data-dismiss="modal" class="btn btn-secondary">بستن</button> <button type="button" id="subLogin" class="btn btn-primary">ورود به سایت</button></div>
        </div>
    </div>
</div>
      <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
      <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('asset/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('asset/js/swiper.js') }}"></script>
      <script src="{{ asset('asset/js/plugins.js') }}"></script>
      <script src="{{ asset('asset/js/main.js') }}"></script>
      <script src="{{ asset('asset/js/persian-date.js') }}"></script>
      <script src="{{ asset('asset/js/persian-datepicker.js') }}"></script>
      @yield ("js")
      <script>
	  
		$(document).ready(function() {
			
			$("#loginMenu, #logoutMenu").hide(0);
			
			if(window.localStorage.getItem('RecepshenToken'))
				$("#logoutMenu").show(0);
			else 
				$("#loginMenu").show(0);
				
			
		});
	  
        $("#subRegister").click(function () {
        $.ajax({
            type: 'POST',
            url: 'http://recepshen.ir/api/fetchHotels',
            data: {
                email: $("#email").val(),
                password: $("#password").val(),
                first_name: $("#first_name").val(),
                last_name: $("#last_name").val(),
                national_code: $("#national_code").val(),
                phone_number: $("#phone_number").val(),
                Sir_Madam: $("#Sir_Madam").val(),
                city: $("#city").val(),
                Foreign: $("#Foreign").val(),
            },
            success: function (Data) {
                if (Data["status"] == 0) {
                    $("#subRegister").notify(
                        Data["error"], "error",
                        { position:"right" }
                    );
                }
                if (Data["status"] == 1) {
                    window.location.replace(Data["data"]["payLink"]);
                }

            },
            error: function (e) {
                $("#subRegister").notify(
                    "خطایی رخ داد مجدد تلاش نمایید!", "error",
                    { position:"right" }
                );
            }

        });
    });
        $("#subLogin").click(function () {
        $.ajax({
            type: 'POST',
            url: 'http://recepshen.ir/api/fetchHotels',
            data: {
                email: $("#email").val(),
                password: $("#password").val(),
                phone_number: $("#phone_number").val(),
            },
            success: function (Data) {
                if (Data["status"] == 0) {
                    $("#subLogin").notify(
                        Data["error"], "error",
                        { position:"right" }
                    );
                }
                if (Data["status"] == 1) {
                    window.location.replace(Data["data"]["payLink"]);
                }

            },
            error: function (e) {
                $("#subLogin").notify(
                    "خطایی رخ داد مجدد تلاش نمایید!", "error",
                    { position:"right" }
                );
            }

        });
    });
    </script>
   </div>
   </body>
</html>
