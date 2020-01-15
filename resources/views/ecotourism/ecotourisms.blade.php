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
                   <div class="col">
                       <div class="cover">
                           <h2>جستجو بوم گردی</h2>
                           <div class="flex-form row ">
                            <div class="col">
                               <select id="city" name="option">
                                    @foreach ($city as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                               </select>
                                </div>
                                <div class="col">
                               <input id="date" class="domain-input">
                                </div>
                                <div class="col">
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
                                </div>
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
      <section class="blog-1-area about-blog">
         <div class="container">
            <div class="homepage-2 homepage-4 pricing-table-area">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title" id="title">
                        <h2><span>لطفا</span> بالا جستو جو کنید </h2>
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
                            <h2>درجه اقامتگاه</h2>
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
                            <h2>امکانات اقامتگاه</h2>
                            <div class="categories-right-list" style=" overflow: auto; height: 400px;">
                                <ul>
                                    @foreach ($hotelSpecifications as $item)
                                        <li><input type="checkbox" value="{{$item->id}}"> <a>{{$item->name}} </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="lds-ellipsis" id="loadig" style="display: none">
                            <div></div><div></div><div></div><div></div>
                        </div>
                        <div class="row" id="HOTELS">
                            @isset ($rec)
                            @for ($i = 0; $i < count($rec); $i++)
                             <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="single-pricing-table active">
                                    @if ($rec[$i]->discount != null) 
                                        <span class="table-highlight">{{$rec[$i]->discount}}%</span>
                                    @endif
                
                                    <h2> {{$rec[$i]->type}} {{$rec[$i]->name}}
                                        @for ($b = 0; $b < $rec[$i]->stars; $b++) 
                                            <i class="fa fa-star" style="color: #ffa726;"></i>
                                        @endfor
                                    </h2>
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 col-md-12 col-xs-12">
                                            <img src="{{$rec[$i]->image}}" alt="pricing-icon">
                                        </div>
                                        <div class="col-lg-8 col-md-12 col-xs-12">
                                            <div class="row no-gutters">
                                                <div class="col-lg-10 col-md-12 col-xs-12">
                                                    <p class="text-right">
                                                        <i class="fa fa-map-marker" style="color:darkgray;"></i>
                                                        {{$rec[$i]->address}}</p>
                                                    <div class="col-lg-10 col-md-12 col-xs-12">
                                                        <a class="pricing-btn blue-btn pull-left" href="/ecotourism/{{$rec[$i]->name_en}}">رزرو هتل</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            @endisset
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
    
    
        $("#sub").click(function () {
        document.getElementById("HOTELS").innerHTML = "";
        document.getElementById('loadig').style.display = "initial";
    
            dataSend = {
                token: "mzoc1CEq401565108119FTd7QvbGea",
                from: new persianDate($("#date").val()).toLocale('en').format('YYYY-MM-DD'),
                to: new persianDate().add('days', $("#date1").val()).toLocale('en').format("YYYY-MM-DD"),
                city_id: $("#city").val(),
            };
            DataHotel(dataSend);
        });
        
    function DataHotel(dataSend) {
        $('html,body').animate({ scrollTop: 500 }, 'slow');
    
        var DateFrom= new persianDate($("#date").val()).toLocale('en').format('YYYY-MM-DD');
        var DateEnd= new persianDate().add('days', $("#date1").val()).toLocale('en').format("YYYY-MM-DD");
        $.ajax({
            type: 'POST',
            url: 'http://recepshen.ir/api/boomgardi/list',
            data: dataSend,
            success: function (D) {
                if(D["error"] == undefined){
                    if(D["data"].length != 0){
    
                    document.getElementById("title").innerHTML ="<h2>لیست هتل و اقامتگاه های <span>"+ D["data"]["0"]["city"]+"</span></h2>";
                    document.getElementById('loadig').style.display = "none";
    
                var FIELD= "";
                for (i = 0; i < D["data"].length; i++) {
                    FIELD += "<div class=\"col-lg-12 col-md-12 col-xs-12\">";
                    FIELD += "<div class=\"single-pricing-table active\">";
                        if (D["data"][i]["discount"] != null) {
                            FIELD += "<span class=\"table-highlight\">"+ D["data"][i]["discount"] +"%</span>";
                        }
    
                    FIELD += "<h2>"+ D["data"][i]["type"] +" "+ D["data"][i]["name"];
    
                        for (b = 0; b < D["data"][i]["stars"]; b++) {
                            FIELD += "<i class=\"fa fa-star\" style=\"color: #ffa726;\"></i>";
                        }
    
                    FIELD += "</h2>";                
                    FIELD += "<div class=\"row no-gutters\">";
                    FIELD += "<div class=\"col-lg-4 col-md-12 col-xs-12\">";
                    FIELD += "<img src="+ D["data"][i]["image"] +" alt=\"pricing-icon\">";
                    FIELD += "</div>";
                    FIELD += "<div class=\"col-lg-8 col-md-12 col-xs-12\">";
                    FIELD += "<div class=\"row no-gutters\">";
                    FIELD += "<div class=\"col-lg-10 col-md-12 col-xs-12\">";
                    FIELD += "<p class=\"text-right\">";
                    FIELD += "<i class=\"fa fa-map-marker\" style=\"color:darkgray;\"></i>"+ D["data"][i]["address"];
                    FIELD += "</p>";
                    FIELD += "<div class=\"col-lg-10 col-md-12 col-xs-12\">";
                    FIELD += "<a class=\"pricing-btn blue-btn pull-left\" href=/ecotourism/" + D["data"][i]["name_en"] + "/?DateFrom=" + DateFrom + "&DateEnd=" + DateEnd + ">رزرو هتل</a>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                }
                    document.getElementById("HOTELS").innerHTML = FIELD;
                    }else{
                        document.getElementById("title").innerHTML ="<h2>در این شهر هتلی موجود نیست</h2>";
                        document.getElementById('loadig').style.display = "none";
                    }
                }else{
                    document.getElementById("title").innerHTML ="<h2>"+ D["error"]+"</h2>";
                    document.getElementById('loadig').style.display = "none";
                }
    
            },
            error: function (e) {
                document.getElementById("title").innerHTML ="<h2>خطایی رخ داده لطفا دوباره تلاش نمایید</h2>";
                document.getElementById('loadig').style.display = "none";
            }
    
        });
    };
     </script>
@endsection