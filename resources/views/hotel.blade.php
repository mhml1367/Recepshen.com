@extends('layout.index')

@section('css')
    <link rel="stylesheet" href="/asset/bootstrap-slider/slider.css">
@endsection

@section('search')
<section class="slider-1-bg">
   <div class="homepage-slider-1">
       <div class="single-slider-item">
           <div class="container">
               <div class="row slider-content-area">
                   <div class="col-xl-12 col-lg-7 col-md-12 col-12">
                      
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
@endsection

@section('content')
<section class="welcome-area">
    <div class="container">
       <div class="row" style="direction: ltr;">
           <div class="col-xl-7 col-lg-7 col-md-12" id="diHotel">

           </div>
           <div class="col-xl-5 col-lg-5 col-md-12" id="biHotel">

           </div>
       </div>
    </div>
 </section>

      <section class="blog-1-area about-blog">
         <div class="container">
            <div class="homepage-2 homepage-4 pricing-table-area">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title">
                        <h2><span>اتاق ها</span> لیست اتاق های موجود </h2>
                        <img src="/asset/img/section-shape.png" alt="section-shape">
                     </div>
                  </div>
               </div>
               <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="row" id="ROOMS">
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @endsection

@section('js')
<script src="/asset/bootstrap-slider/bootstrap-slider.js"></script>

<script>
$(function () {
    $.ajax({
        type: 'POST',
        url: 'http://recepshen.ir/api/fetchRooms',
        data: {
            token: "mzoc1CEq401565108119FTd7QvbGea",
            hotel_id: {{$IDHotel}},
            from: "{{$from}}",
            to: "{{$to}}",
        },
        success: function (Data) {
            hotel(Data["data"])
        }
    });
});

var diHotel="";
var biHotel="";
var Rooms="";

function hotel(Data) {
    diHotel += "<div class=\"welcome-right\">";
    diHotel += "<h5 class=\"heading-title\">"
    for (b = 0; b < Data["stars"]; b++) {
        diHotel += "<i class=\"fa fa-star\" style=\"color: yellow;\"></i>";
    }
    diHotel +=" "+Data["type"] +"</h5>";
    diHotel += "<h2 class=\"heading-title-default\">"+Data["name"]+"</h2>";
    diHotel += "<div class=\"heading-text clearfix\">";
    diHotel += "<p>"+Data["address"]+"</p>";
    diHotel += "<p>آدرس هتل</p>";
    diHotel += "</div>";

    biHotel += "<div class=\"about-slider-wrapper\">";
    biHotel += "<div class=\"about-slider slick-initialized slick-slider\"><button class=\"slick-prev slick-arrow\" aria-label=\"Previous\" type=\"button\" >Previous</button>";
    biHotel += "<div class=\"about-slider-wrapper\">";
    biHotel += "<div class=\"slick-track\" style=\"opacity: 1; width: 1335px;\">";

    for (b = 0; b < Data["images"].length; b++) {
        if (b == 0) {
            classActiv = "slider-item slick-slide slick-current slick-active";
            hidden = "false";
            tabindex = "0";
            opacity = "1";
            left = "0";
        }else{
            classActiv="slider-item slick-slide";
            hidden = "true";
            tabindex = "-1";
            opacity = "0";
            left = -445*b;
        }
            biHotel += "<div class=\""+ classActiv +"\" data-slick-index=\""+ b +"\" aria-hidden=\""+hidden+"\" tabindex=\""+tabindex+"\" style=\"width: 445px; position: relative; left: "+left+"px; top: 0px; z-index: 999; opacity: "+opacity+";\">";
            biHotel += "<img src="+ Data["images"][b] +">";
            biHotel += "</div>";
    }
    
    biHotel += "</div>";
    biHotel += "</div>";
    biHotel += "<button class=\"slick-next slick-arrow\" aria-label=\"Next\" type=\"button\" >Next</button>";
    biHotel += "</div>";
    biHotel += "<div class=\"bg-shadow-img\">";
    biHotel += "<img src=\"http://marveltheme.com/tf/html/slake/slake/asset/img/slider-img/about-slider-bg-img.jpg\" >";
    biHotel += "</div>";
    biHotel += "</div>";


    for (i = 0; i < Data["rooms"].length; i++) {

        Rooms += "<div class=\"col-lg-12 col-md-12 col-xs-12\">";
        Rooms += "<div class=\"single-pricing-table active\">";
        Rooms += "<span class=\"table-highlight\">"+ Data["rooms"][i]["beds"] +"</span>";
        Rooms += "<div class=\"row no-gutters\">";
        Rooms += "<div class=\"col-lg-4 col-md-12 col-xs-12\">";
        Rooms += "<img src=\""+ Data["rooms"][i]["images"]["0"] +"\" alt=\"pricing-icon\">";
        Rooms += "</div>";
        Rooms += "<div class=\"col-lg-8 col-md-12 col-xs-12\">";
        Rooms += "<div class=\"row no-gutters\">";
        Rooms += "<div class=\"col-lg-10 col-md-12 col-xs-12 text-right\">";
        Rooms += "<h2>"+ Data["rooms"][i]["name"]+"</h2>";
        Rooms += "<i class=\"fa fa-map-marker\" style=\"color:darkgray;\"></i>"+ Data["rooms"][i]["id"];
        Rooms += "<div class=\"col-lg-10 col-md-12 col-xs-12\">";
        Rooms += "<a class=\"pricing-btn blue-btn pull-left\" href=/hotels/" + Data["rooms"][i]["id"] + ">رزرو اتاق</a>";
        Rooms += "</div>";
        Rooms += "</div>";
        Rooms += "</div>";
        Rooms += "</div>";
        Rooms += "";
        Rooms += "</div>";
        Rooms += "</div>";

    }
    document.getElementById("ROOMS").innerHTML = Rooms;
    document.getElementById("diHotel").innerHTML = diHotel;
    document.getElementById("biHotel").innerHTML = biHotel;

};

 </script>
@endsection