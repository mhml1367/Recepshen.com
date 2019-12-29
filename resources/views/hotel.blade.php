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
                       <div class="cover">
                           <h2>جستجو هتل</h2>
                           <div class="flex-form ">
                               <select id="city" name="option">
                                    @foreach ($city as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                               </select>
                               <input id="date" class="domain-input">
                               <select id="date1" name="option">
                                   <option value="1">یک شب</option>
                                   <option value="2">دو شب</option>
                                   <option value="3">سه شب</option>
                                   <option value="4">چهار شب</option>
                                   <option value="5">پنج شب</option>
                                   <option value="6">شش شب</option>
                                   <option value="7">هفت شب</option>
                                   <option value="8">هشت شب</option>
                               </select>
                               <div class="domain-checkup-right">
                                   <button id="sub">
                                       <img src="/asset/img/icons/search-icon.png" alt="Search icon">
                                       جستجو
                                   </button>
                               </div>
                           </div>
                       </div>
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
                        <h2><span>Slake</span> Give you Best Price </h2>
                        <img src="/asset/img/section-shape.png" alt="section-shape">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-md-12 col-xs-12">
                        <div class="blog-detail blog-categories-right">
                            <h2>بازه قیمت </h2>
                            <div class="categories-right-list">
                                <div class="form-group" style="direction: rtl;">
                                    <label>بازه قیمت<span id="ex3SliderVal"></span><br> به ازای هرشب</label>
                                    <div style="padding: 18px"><input type="text" id="pricerange" value="" class="slider form-control" data-slider-min="0"
                                        data-slider-max="5000000" data-slider-step="1" data-slider-value="[0,5000000]"
                                        data-slider-orientation="horizontal" data-slider-selection="before"
                                        data-slider-tooltip="hide" data-slider-id="blue" ></div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-detail blog-categories-right">
                            <h2>نوع هتل</h2>
                            <div class="categories-right-list">
                                <ul>
                                    @foreach ($hotelTypes as $item)
                                        <li><input type="checkbox" value="{{$item->id}}"> <a>{{$item->name}} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="blog-detail blog-categories-right">
                            <h2>درجه هتل</h2>
                            <div class="categories-right-list">
                                <ul>
                                    <li><input type="checkbox" value="1"><a><i class="fa fa-star" style="color: #ffa726;"></i></a></li>
                                    <li><input type="checkbox" value="2"><a><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i></a></li>
                                    <li><input type="checkbox" value="3"><a><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i></a></li>
                                    <li><input type="checkbox" value="4"><a><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i></a></li>
                                    <li><input type="checkbox" value="5"><a><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i><i class="fa fa-star" style="color: #ffa726;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-detail blog-categories-right">
                            <h2>امکانات هتل</h2>
                            <div class="categories-right-list">
                                <ul>
                                    @foreach ($hotelSpecifications as $item)
                                        <li><input type="checkbox" value="{{$item->id}}"> <a>{{$item->name}} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="row" id="HOTELS">
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
$('#date').persianDatepicker({
    initialValue: true,
    initialValueType: 'persian',
    format: "YYYY/MM/DD",
    autoClose: true
});

$(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').slider(); 
    txt=[0,5000000];
    $('#pricerange').slider('setValue', txt);
    $("#ex3SliderVal").text(" ( "+txt[0]+" الی "+txt[1]+" ) ");
    $("#pricerange").on("slide", function(slideEvt) {
        var txt=slideEvt.value;
	$("#ex3SliderVal").text(" ( "+txt[0]+" الی "+txt[1]+" ) ");
});
})
var FIELD= "";

$(function () {
    var DateFrom= new persianDate($("#date").val()).toLocale('en').format('YYYY-MM-DD');
    var DateEnd= new persianDate().add('days', $("#date1").val()).toLocale('en').format("YYYY-MM-DD");

    $.ajax({
        type: 'POST',
        url: 'http://recepshen.ir/api/fetchRooms',
        data: {
            token: "mzoc1CEq401565108119FTd7QvbGea",
            hotel_id: {{$IDHotel}},
            from: {{request()->input('DateFrom')}},
            to: {{request()->input('DateEnd')}},
        },
        success: function (Data) {
            hotel(Data["data"])
        }
    });
});

var diHotel="";
var biHotel="";

function hotel(Data) {
    diHotel += "<div class=\"welcome-right\">";
    diHotel += "<h5 class=\"heading-title\">"+Data["type"]+"</h5>";
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
    biHotel += "<div class=\"slider-item slick-slide slick-current slick-active\" data-slick-index=\""+ b +"\" aria-hidden=\"false\" tabindex=\"0\" style=\"width: 445px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;\">";
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



    document.getElementById("diHotel").innerHTML = diHotel;
    document.getElementById("biHotel").innerHTML = biHotel;

};

 </script>
@endsection