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
                           <h2>جستجو پرواز</h2>
                           <div class="flex-form row ">
                            <div class="col">
                               <select id="fromCity" name="option">
                                    @foreach ($city as $key => $item)
                                        @if ($key == 1)
                                                <option selected value="{{$item->id}}">{{$item->name}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endif
                                    @endforeach
                               </select>
                                </div>
                                <div class="col">
                                    <select id="toCity" name="option">
                                        @foreach ($city as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                   </select>
                                </div>
                                <div class="col">
                                    <input id="date" class="domain-input">
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
                            <h2>نوع پرواز</h2>
                            <div class="categories-right-list">
                                <ul>
                                        <li><input type="checkbox" value="1"> <a>کوپه ای 4 نفره </a></li>
                                        <li><input type="checkbox" value="1"> <a>کوپه ای 6 نفره</a></li>
                                        <li><input type="checkbox" value="1"> <a>سالنی 4 ردیفه</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-detail blog-categories-right">
                            <h2>شرکت های ریلی</h2>
                            <div class="categories-right-list">
                                <ul>
                                    <li><input type="checkbox" value="1"> <a>رحا</a></li>
                                    <li><input type="checkbox" value="1"> <a>فدک</a></li>
                                    <li><input type="checkbox" value="1"> <a>نورالرضا</a></li>
                                    <li><input type="checkbox" value="1"> <a>بن ریل</a></li>
                                    <li><input type="checkbox" value="1"> <a>چوپار</a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="blog-detail blog-categories-right">
                            <h2>امکانات پرواز</h2>
                            <div class="scroll-bar-wrap">
                            <div class="scroll-box">
                            <div class="categories-right-list">
                                <ul>
                                        <li><input type="checkbox" value="1"> <a>چوپار</a></li>
                                </ul>
                            </div>
                            </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <div class="lds-ellipsis" id="loadig" style="display: none">
                            <div></div><div></div><div></div><div></div>
                        </div>
                            <div class="row" id="trains">

                            </div>
                    </div>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="reserve" tabindex="-1" role="dialog" aria-labelledby="reserve" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <b class="modal-title" id="roomReserve"></b>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
    
                <div class="modal-body">
                    <div class="row" id="calc"></div>
                    <hr>
                    <div class="row" id="Titelcontracts"></div>
                    <div class="row" id="contracts"></div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="first_name" class="col-form-label">نام:</label>
                                <input type="text" class="form-control" id="first_name">
                            </div>
                            <div class="form-group">
                                <label for="national_code" class="col-form-label">کدملی</label>
                                <input type="text" class="form-control" id="national_code">
                            </div>
                           
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="last_name" class="col-form-label">نام خانوادگی</label>
                                <input type="text" class="form-control" id="last_name">
                            </div>
                            <div class="form-group">
                                <label for="phone_number" class="col-form-label">موبایل:</label>
                                <input type="text" class="form-control" id="phone_number">
                            </div>
                            {{-- <div class="form-group">
                                <label for="Foreign" class="col-form-label">خارجی:</label>
                                <input type="checkbox" class="form-control" id="Foreign">
                            </div> --}}
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <div class="row no-gutters">
                                    <div class="col-8">
                                        <label for="Sir_Madam" class="col-form-label">آقا/خانم:</label>
                                        <select name="Sir_Madam" class="form-control" id="Sir_Madam">
                                            <option value="M" selected>آقا</option>
                                            <option value="F">خانم</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="Sir_Madam" class="col-form-label">ایمیل:</label>
                                        <input type="email" id="email" class="form-control">
                                    </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                
                                <label for="city" class="col-form-label">تاریخ تولد:</label>
                                    <div class="row no-gutters">
                                        <div class="col">
                                                <select id="dd" class="form-control"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                                        </div>
                                        <div class="col">
                                                <select id="mm" class="form-control"><option value="1">فروردین</option><option value="2">اردیبهشت</option><option value="3">خرداد</option><option value="4">تیر</option><option value="5">مرداد</option><option value="6">شهریور</option><option value="7">مهر</option><option value="8">آبان</option><option value="9">آذر</option><option value="10">دی</option><option value="11">بهمن</option><option value="12">اسفند</option></select>
                                        </div>
                                        <div class="col">
                                                <input width="50px" type="number" pattern=".{3,}" class="form-control" id="yy" placeholder="1370">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف خرید بلیط</button>
                  <button type="button" class="btn btn-primary" id="send">خرید بلیط</button>
                </div>
              </div>
            </div>
          </div>
      </section>
      @endsection

@section('js')
<script src="/asset/bootstrap-slider/bootstrap-slider.js"></script>
<script src="/asset/js/jalali-moment.browser.js"></script>

<script>
$('#date').persianDatepicker({
    initialValue: true,
    initialValueType: 'en',
    format: "YYYY/MM/DD",
    autoClose: true
});
// document.getElementById('search').style.display = "none";

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


function parseArabic(str) {
    return Number( str.replace(/[٠١٢٣٤٥٦٧٨٩]/g, function(d) {
        return d.charCodeAt(0) - 1632; // Convert Arabic numbers
    }).replace(/[۰۱۲۳۴۵۶۷۸۹]/g, function(d) {
        return d.charCodeAt(0) - 1776; // Convert Persian numbers
    }) );
}

    $("#sub").click(function () {
    // document.getElementById('search').style.display = "block";
    document.getElementById("trains").innerHTML = "";
    document.getElementById('loadig').style.display = "initial";

    var DateF = $("#date").val();
    var DateS = DateF.split("/");
    var DateFro = parseArabic(DateS[0])+"/"+parseArabic(DateS[1])+"/"+parseArabic(DateS[2]);

    var DateFrom = moment(DateFro).format('YYYY/MM/DD');
            
        dataSend = {
            token: "mzoc1CEq401565108119FTd7QvbGea",
            date : DateFrom,
            fromCity: $("#fromCity").val(),
            toCity: $("#toCity").val(),
        };
        DataHotel(dataSend);
    });
    
function DataHotel(dataSend) {
    $('html,body').animate({ scrollTop: 500 }, 'slow');
    var DateF = $("#date").val();
    var DateS = DateF.split("/");
    var DateFro = parseArabic(DateS[0])+"/"+parseArabic(DateS[1])+"/"+parseArabic(DateS[2]);

    var DateFrom = moment(DateFro).format('YYYY/MM/DD');
    var DateEnd = moment(DateFro).add($("#date1").val(),'d').format('YYYY/MM/DD');
    $.ajax({
        type: 'POST',
        url: 'http://recepshen.ir/api/flights/tickets',
        data: dataSend,
        success: function (D) {
                if(D["tickets"].length != 0){

                document.getElementById("title").innerHTML ="<h2>لیست پرواز ها <span>"+ D["tickets"]["0"]["from_city"]+"</span> به <span>"+ D["tickets"]["0"]["to_city"]+"</span></h2>";
                document.getElementById('loadig').style.display = "none";

            var FIELD= "";
            for (i = 0; i < D["tickets"].length; i++) {
                FIELD += "<div class=\"col-lg-12 col-md-12 col-xs-12\">";
                FIELD += "<div class=\"trains-table active\">";
                FIELD += "<div class=\"row no-gutters\">";
                FIELD += "<div class=\"col-lg-4 col-md-12 col-xs-12\">";
                FIELD += "<img class=\"imageTrains\" src="+ D["tickets"][i]["company"]["logo"] +" alt=\"icon\">";
                FIELD += "<p>"+ D["tickets"][i]["company"]["name"] +"</p>";
                FIELD += "</div>";
                FIELD += "<div class=\"col-lg-8 col-md-12 col-xs-12\">";
                FIELD += "<div class=\"row no-gutters\">";
                FIELD += "<div class=\"col-lg-10 col-md-12 col-xs-12\">";
                FIELD += "<p class=\"text-right\">";
                FIELD += "<i class=\"fa fa-train\" style=\"color:darkgray;\"></i>  "+ D["tickets"][i]["company"]["name"];
                FIELD += "</p>";
                FIELD += "<div class=\"row\">";
                FIELD += "<div class=\"col-lg-6 col-md-12 col-xs-12\">";
                FIELD += "<p>"+D["tickets"][i]["from_city"]+" "+D["tickets"][i]["start_time"]+" -----> "+D["tickets"][i]["to_city"]+" "+D["tickets"][i]["end_time"]+"</p>";
                FIELD += "</div>";
                    num = D["tickets"][i]["adult"];
                FIELD += "<div class=\"col-lg-6 col-md-12 col-xs-12\">";
                FIELD +=  "قیمت: " + (num + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + "ريال";
                FIELD += "<bottom class=\"btn btn-primary btn-block\">خرید بلیط</bottom>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
            }
                document.getElementById("trains").innerHTML = FIELD;
                }else{
                    document.getElementById("title").innerHTML ="<h2>در این تاریخ پروازیی موجود نیست</h2>";
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