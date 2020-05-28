@extends('layout.index')

@section('css')
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-slider/slider.css') }}">
@endsection

@section('search')
<section class="slider-1-bg">
   <div class="homepage-slider-1">
       <div class="single-slider-item">
           <div class="container">
               <div class="row slider-content-area">
                   <div class="col">
                       <div class="cover">
                           <h2>جستجو تور پکیجی</h2>
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
                                       <img src="{{ asset('asset/img/icons/search-icon.png') }}" alt="Search icon">
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
                    <h2><span>لطفا</span> بالا جستجو کنید </h2>
                        <img src="{{ asset('asset/img/section-shape.png') }}" alt="section-shape">
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
                            <h2>نوع قطار</h2>
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
                            <h2>امکانات قطار</h2>
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
                            <div class="row" id="tours">

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
                <div class="row" id="description"></div>
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
                                <div class="col-4">
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
<script src="{{ asset('asset/bootstrap-slider/bootstrap-slider.js') }}"></script>
<script src="{{ asset('asset/js/jalali-moment.browser.js') }}"></script>

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
    document.getElementById("tours").innerHTML = "";
    document.getElementById('loadig').style.display = "initial";

    var DateF = $("#date").val();
    var DateS = DateF.split("/");
    var DateFro = parseArabic(DateS[0])+"/"+parseArabic(DateS[1])+"/"+parseArabic(DateS[2]);

    var DateFrom = moment(DateFro).format('YYYY/MM/DD');

        dataSend = {
            token: "mzoc1CEq401565108119FTd7QvbGea",
            // date : DateFrom,
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
        type: 'GET',
        url: 'http://recepshen.ir/api/tours',
        data: dataSend,
        success: function (D) {
                if(D["data"].length != 0){

                document.getElementById("title").innerHTML ="<h2>لیست تور های <span>"+ D["data"]["0"]["from"]+"</span> به <span>"+ D["data"]["0"]["to"]+"</span></h2>";
                document.getElementById('loadig').style.display = "none";

            var FIELD= "";
            for (i = 0; i < D["data"].length; i++) {
                FIELD += "<div class=\"col-lg-12 col-md-12 col-xs-12\">";
                FIELD += "<div class=\"trains-table active\">";
                FIELD += "<div class=\"row no-gutters\">";
                FIELD += "<div class=\"col-lg-4 col-md-12 col-xs-12\">";
                FIELD += "<img class=\"imageTrains\" src="+ D["data"][i]["image"] +" alt=\"icon\">";
                FIELD += "<p>"+ D["data"][i]["name"] +"</p>";
                FIELD += "</div>";
                FIELD += "<div class=\"col-lg-8 col-md-12 col-xs-12\">";
                FIELD += "<div class=\"row no-gutters\">";
                FIELD += "<div class=\"col-lg-10 col-md-12 col-xs-12\">";
                FIELD += "<p class=\"text-right\">";
                FIELD += "<i class=\"fa fa-train\" style=\"color:darkgray;\"></i> رفت "+ D["data"][i]["go"]["type"];
                FIELD += "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                FIELD += "<i class=\"fa fa-train\" style=\"color:darkgray;\"></i> برگشت "+ D["data"][i]["return_info"]["type"];
                FIELD += "</p>";
                FIELD += "<div class=\"row\">";
                FIELD += "<div class=\"col-lg-6 col-md-12 col-xs-12\">";
                FIELD += "<p>"+D["data"][i]["from"]+" -----> "+D["data"][i]["to"]+"</p>";
                FIELD += "</div>";
                    num = D["data"][i]["adult"];
                FIELD += "<div class=\"col-lg-6 col-md-12 col-xs-12\">";
                FIELD +=  "قیمت: " + (num + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + "ريال";
                FIELD += "<bottom class=\"btn btn-primary btn-block\" data-toggle=\"modal\" data-target=\"#reserve\" data-go_type="+D["data"][i]["go"]["type"]+" data-return_type="+D["data"][i]["return_info"]["type"]+" data-go_company_name="+D["data"][i]["go"]["company_name"]+" data-return_company_name="+D["data"][i]["return_info"]["company_name"]+" data-start_date="+D["data"][i]["start_date"]+" data-end_date="+D["data"][i]["end_date"]+" data-ticket_id="+D["data"][i]["id"]+"  data-from="+D["data"][i]["from"]+" data-to="+D["data"][i]["to"]+" data-start_date="+D["data"][i]["start_date"]+" data-end_date="+D["data"][i]["end_date"]+"  data-adult="+D["data"][i]["adult"]+" data-infant="+D["data"][i]["infant"]+" data-child="+D["data"][i]["child"]+" data-total="+D["data"][i]["total"]+" data-description="+D["data"][i]["description"]+" data-cancel1="+D["data"][i]["cancel_tickets1"]+" data-cancel2="+D["data"][i]["cancel_tickets2"]+" data-cancel3="+D["data"][i]["cancel_tickets3"]+">خرید بلیط قطار</bottom>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
            }
                document.getElementById("tours").innerHTML = FIELD;
                }else{
                    document.getElementById("title").innerHTML ="<h2>در این تاریخ تور موجود نیست</h2>";
                    document.getElementById('loadig').style.display = "none";
                }


        },
        error: function (e) {
            document.getElementById("title").innerHTML ="<h2>خطایی رخ داده لطفا دوباره تلاش نمایید</h2>";
            document.getElementById('loadig').style.display = "none";
        }

    });
};


    var fromCity = '';
    var toCity = '';
    var start_date_field = '';
    var end_date_field = '';

    $('#reserve').on('show.bs.modal', function (event) {
        var start_date = $(event.relatedTarget).data('start_date');
        var end_date = $(event.relatedTarget).data('end_date');
        start_date_field = start_date;
        end_date_field = end_date;
        var goType = $(event.relatedTarget).data('go_type');
        var returnType = $(event.relatedTarget).data('return_type');
        var goCompanyName = $(event.relatedTarget).data('go_company_name');
        var goCompanyLogo = $(event.relatedTarget).data('goCompanyLogo');
        var returnCompanyName = $(event.relatedTarget).data('return_company_name');
        var returnCompanyLogo = $(event.relatedTarget).data('returnCompanyLogo');

        var ticket_id = $(event.relatedTarget).data('ticket_id');
        var adult = $(event.relatedTarget).data('adult');
        var child = $(event.relatedTarget).data('child');
        var infant = $(event.relatedTarget).data('infant');
        var total =  $(event.relatedTarget).data('total');
        var from = $(event.relatedTarget).data('from');
        fromCity = from;
        var to = $(event.relatedTarget).data('to');
        toCity = to;
        var descriptions = $(event.relatedTarget).data('description') || '';
        var cancel1 = $(event.relatedTarget).data('cancel_tickets1') || '';
        var cancel2 = $(event.relatedTarget).data('cancel_tickets1') || '';
        var cancel3 = $(event.relatedTarget).data('cancel_tickets1') || '';

        var calc="";

            // calc += "<input id=\"RailwayNumber\" value=\""+Railway+"\" type=\"hidden\">";
            calc += "<input id=\"ticket_id\" value=\""+ticket_id+"\" type=\"hidden\">";


            calc += "<div class=\"col\">";
            calc += "<div class=\"form-group\">";
            calc += "<lable> تاریخ رفت : <span id=\"start_date\">"+start_date+"</span></lable>";
            calc += "</div>";
            calc += "</div>";
            calc += "<div class=\"col\">";
            calc += "<div class=\"form-group\">";
            calc += "<lable> تاریخ برگشت : <span id=\"end_date\">"+end_date+"</span></lable>";
            calc += "</div>";
            calc += "</div>";
            calc += "<div class=\"col\">";
            calc += "<div class=\"form-group\">";
            calc += "<label> رفت: <span id=\"goType\">" + goType + " " + goCompanyName + "</span> <span></span></label>";
            calc += "</div>";
            calc += "</div>";
            calc += "<div class=\"col\">";
            calc += "<div class=\"form-group\">";
            calc += "<label> برگشت: <span id=\"goType\">" + returnType + " " + returnCompanyName + "</span> <span></span></label>";
            calc += "</div>";
            calc += "</div>";

            // calc += "<div class=\"col\">";
            // calc += "<div class=\"form-group\">";
            // calc += "<lable> ساعت رفت: <span id=\"start_time\">"+start_time+"</span></lable>";
            // calc += "</div>";
            // calc += "</div>";

            // calc += "<div class=\"col\">";
            // calc += "<div class=\"form-group\">";
            // calc += "<lable > اتمام پرواز: <span id=\"end_time\">"+end_time+"</span></lable>";
            // calc += "</div>";
            // calc += "</div>";

            calc += "<div class=\"col\">";
            calc += "<div class=\"form-group\">";
            calc += "<lable > از شهر: <span id=\"from\">"+from+"</span></lable>";
            calc += "</div>";
            calc += "</div>";

            calc += "<div class=\"col\">";
            calc += "<div class=\"form-group\">";
            calc += "<label > به شهر: <span id=\"to\">"+to+"</span></label>";
            calc += "</div>";
            calc += "</div>";


        var contracts="";
        var Titelcontracts = "<div class=\"col\"><label>قیمت ها:</label></div>";

        contracts += "<div class=\"col\">";
        contracts += "<div class=\"form-group\">";
        contracts += "<label> قیمت بزرگ سال: <span id=\"adult\">"+adult+"</span></label>";
        contracts += "</div>";
        contracts += "</div>";

        contracts += "<div class=\"col\">";
        contracts += "<div class=\"form-group\">";
        contracts += "<label> قیمت کودک: <span id=\"child\">"+child+"</span></label>";
        contracts += "</div>";
        contracts += "</div>";

        contracts += "<div class=\"col\">";
        contracts += "<div class=\"form-group\">";
        contracts += "<label> قیمت نوزاد: <span id=\"infant\">"+infant+"</span></label>";
        contracts += "</div>";
        contracts += "</div>";

        contracts += "<div class=\"col\">";
        contracts += "<div class=\"form-group\">";
        contracts += "<label > جمع قیمت: "+total+"</label>";
        contracts += "</div>";
        contracts += "</div>";

        var description="";

        // description += "<div class=\"col\">";
        // description += "<div class=\"form-group\">";
        // description += "<label> "+descriptions+"</label>";
        // description += "</div>";
        // description += "</div>";
        //
        // description += "<div class=\"col\">";
        // description += "<div class=\"form-group\">";
        // description += "<label> "+cancel1+"</label>";
        // description += "</div>";
        // description += "</div>";
        //
        // description += "<div class=\"col\">";
        // description += "<div class=\"form-group\">";
        // description += "<label> "+cancel2+"</label>";
        // description += "</div>";
        // description += "</div>";
        //
        // description += "<div class=\"col\">";
        // description += "<div class=\"form-group\">";
        // description += "<label> "+cancel3+"</label>";
        // description += "</div>";
        // description += "</div>";

        var modal = $(this)
        modal.find('#roomReserve').text("خرید بلیط ");
        modal.find('#Titelcontracts').html(Titelcontracts);
        modal.find('#contracts').html(contracts);
        modal.find('#description').html(description);
        modal.find('#calc').html(calc);
    });


    $("#send").click(function () {
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    $.ajax({
        type: 'POST',
        url: "{{ route('post.tours.reserve') }}",
        data: {
            // railwaynumber: $("#RailwayNumber").val(),
            ticket_id: $("#ticket_id").val(),
            start_date: start_date_field,
            end_date: end_date_field,
            adult: $("#adult").text(),
            child: $("#child").text(),
            infant: $("#infant").text(),
            from: fromCity,
            to: toCity,
            // date: $("#datee").text(),
            // company_name: $("#company_name").text(),
            first_name: $("#first_name").val(),
            last_name: $("#last_name").val(),
            national_code: $("#national_code").val(),
            phone_number: $("#phone_number").val(),
            email: $("#email").val(),
            Sir_Madam: $("#Sir_Madam").val(),
            city: $("#city").val(),
            Foreign: $("#Foreign").val(),
            yy: $("#yy").val(),
            dd: $("#dd").val(),
            mm: $("#mm").val(),
        },
        success: function (Data) {
            if (Data["status"] == 0) {
                $("#send").notify(
                    Data["error"], "error",
                    { position:"right" }
                );
            }
            if (Data["status"] == 1) {
                window.location = Data["payLink"];
            }
        }
    });
});
 </script>
@endsection
