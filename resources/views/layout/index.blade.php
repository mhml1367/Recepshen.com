<!doctype html>
<html lang="fa">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>@yield ("title","رسپشن - فروش بلیط و رزرو اتاق")</title>
      <link rel="apple-touch-icon" href="asset/img/favicon/apple-touch-icon.png">
      <link rel="icon" href="asset/img/favicon/favicon.ico">
      <link href="asset/css/bootstrap.min.css" rel="stylesheet">
      <link href="asset/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
      <link href="asset/css/elements.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      <link href="responsive.css" rel="stylesheet">
      <meta name="_token" content="{{ csrf_token() }}">

      <style>
      .flex-form > * {
        border: 0;
        padding: 10px;
        background: white;
        line-height: 50px;
        font-size: 20px;
        border-radius: 0;
        outline: 1;
    }

    .flex-form > *:last-child {
        border-right: 0;
    }


    .cover {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .flex-form {
        display: flex;
        border: 10px solid rgba(0,0,0,0.3);
        border-radius: 5px;
    }
</style>
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

      <div class="full-slider">
      @include("layout.header")
      @yield ("search")
      </div>
      @yield ("content")

      @include('layout.footer')
      <!--FOOTER AREA  END-->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>
      <script src="asset/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="asset/js/swiper.js"></script>
      <script src="asset/js/plugins.js"></script>
      <script src="asset/js/ajax-mail.js"></script>
      <script src="asset/js/ajax-subscribe.js"></script>
      <script src="asset/js/main.js"></script>
      @yield ("js")

 <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.blog-slider', {
            spaceBetween: 30,
            effect: 'fade',
            loop: true,
            mousewheel: {
                invert: false,
            },
            // autoHeight: true,
            pagination: {
                el: '.blog-slider__pagination',
                clickable: true,
            }
        });

        $('.tab-links li').on('click', function () {
            var swiper = new Swiper('.blog-slider', {
                spaceBetween: 30,
                effect: 'fade',
                loop: true,
                mousewheel: {
                    invert: false,
                },
                // autoHeight: true,
                pagination: {
                    el: '.blog-slider__pagination',
                    clickable: true,
                }
            });

        });
    </script>
   </body>
</html>