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
<section class="brand-area" style="direction: ltr;" id="biHotel">
</section>
<section class="welcome-area">
    <div class="container">
       <div class="row" style="direction: ltr;">
           <div class="col-xl-7 col-lg-7 col-md-12" id="diHotel">

           </div>
           <div class="col-xl-5 col-lg-5 col-md-12">

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

            biHotel += "<div class=\"container\">";
            biHotel += "<div class=\"row\">";
            biHotel += "<div class=\"col-lg-12\">";
            biHotel += "<div class=\"brand-inner\">";
            biHotel += "<div class=\"owl-carousel all-brand-carsouel owl-loaded owl-drag\">";
            biHotel += "<div class=\"owl-stage-outer\">";
            biHotel += "<div class=\"owl-stage\" style=\"transform: translate3d(-1554px, 0px, 0px); transition: all 0.6s ease 0s; width: 3552px;\">";

            for (b = 0; b < Data["images"].length; b++) {
                biHotel += "<div class=\"owl-item cloned\" style=\"width: 222px;\">";
                biHotel += "<div class=\"brand-single-item\">";
                biHotel += "<div class=\"brand-single-item-cell\">";
                biHotel += "<img src=\""+ Data["images"][b] +"\" alt=\"brand-icon\">";
                biHotel += "</div>";
                biHotel += "</div>";
                biHotel += "</div>";
            }

            biHotel += "</div>";
            biHotel += "</div>";
            biHotel += "</div>";
            biHotel += "</div>";
            biHotel += "</div>";
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