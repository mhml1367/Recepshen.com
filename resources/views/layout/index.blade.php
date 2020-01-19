<!doctype html>
<html lang="fa">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield ("title","رسپشن - رزرو آنلاین هتل  و رزرو اتاق")</title>
      <meta name="description" content="@yield ("description","رسپشن رزرو آنلاین هتل و رزرو اتاق آنلاین اتاق بوم گردی را با تخفیف ها متنوع انجام می دهد")">
      <meta name="Keywords" content="@yield ("Keywords","رزرو هتل مشهد , هتل کيش , هتل قشم , هتل تهران , رزرو هتل  , رزرو هتل آپارتمان , رزرو آنلاین , بوم گردی , رزرو اتاق")">
      <link rel="apple-touch-icon" href="/asset/img/favicon/apple-touch-icon.png">
      <link rel="icon" href="/asset/img/favicon/favicon.png">
      <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
      <link href="/asset/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
      <link href="/asset/css/elements.css" rel="stylesheet">
      <link href="/style.css" rel="stylesheet">
      <link href="/responsive.css" rel="stylesheet">
      <link rel="stylesheet" href="/asset/css/persian-datepicker.css" />
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

      <div class="{{ Request::is('ecotourisms/*') ? 'ecotourism' : '' }}{{ Request::is('ecotourism/*') ? 'ecotourism' : '' }}{{ Request::is('ecotourisms') ? 'ecotourism' : '' }}{{ Request::is('hotels/*') ? 'Hotels' : '' }}{{ Request::is('hotel/*') ? 'Hotels' : '' }}{{ Request::is('/') ? 'Hotels' : '' }}{{ Request::is('hotels') ? 'Hotels' : '' }}
      @if (url()->full() == "http://recepshen.com")
      Hotels
      @endif">
      @include("layout.header")
      @yield ("search")
      </div>
      
      @yield ("content")

      @include('layout.footer')
      
      <script src="/asset/js/jquery.min.js"></script>
      <script src="/asset/js/bootstrap.min.js"></script>
      <script src="/asset/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/asset/js/swiper.js"></script>
      <script src="/asset/js/plugins.js"></script>
      <script src="/asset/js/main.js"></script>
      <script src="/asset/js/persian-date.js"></script>
      <script src="/asset/js/persian-datepicker.js"></script>
      @yield ("js")

   </body>
</html>