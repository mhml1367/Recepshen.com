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
                                       <img src="asset/img/icons/search-icon.png" alt="Search icon">
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
                     <div class="section-title">
                        <h2><span>Slake</span> Give you Best Price </h2>
                        <img src="asset/img/section-shape.png" alt="section-shape">
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
                     <div class="row">
                      <div class="col-lg-12 col-md-12 col-xs-12">
                          <div class="single-pricing-table active">
                              <span class="table-highlight">تخفیف 20%</span>
                              <h2>هتل آپارتمان گل نرگس <i class="fa fa-star" style="color: yellow;"></i><i
                                      class="fa fa-star" style="color: yellow;"></i><i class="fa fa-star"
                                      style="color: yellow;"></i></h2>

                                      {{-- <div class="lds-ellipsis">
                                            <div></div><div></div><div></div><div></div>
                                        </div> --}}

                              <div class="row no-gutters">
                                  <div class="col-lg-4 col-md-12 col-xs-12">
                                      <img src="image/small_IMG_3638.jpg" alt="pricing-icon">
                                  </div>
                                  <div class="col-lg-8 col-md-12 col-xs-12">

                                      <div class="row no-gutters">
                                          <div class="col-lg-10 col-md-12 col-xs-12">
                                              <p class="text-right">
                                                  <i class="fa fa-map-marker" style="color:darkgray;"></i>مشهد ، خیابان
                                                  امام خمینی بین چهارراه لشکر و میدان ده دی _ امام خمینی 39
                                              </p>
                                          </div>
                                          <div class="col-lg-10 col-md-12 col-xs-12">
                                              <a class="pricing-btn blue-btn pull-left" href="#">Select Plan</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row no-gutters">
                                  <div class="col">
                                      <div class="single-hosting-price">
                                          <ul>
                                              <li>نام اتاق</li>
                                              <li> $85</li>
                                              <li> $135</li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="single-hosting-price">
                                          <ul>
                                              <li>تعداد</li>
                                              <li> $185</li>
                                              <li> $235</li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="single-hosting-price">
                                          <ul>
                                              <li>قیمت برای یک شب</li>
                                              <li> $135</li>
                                              <li> $235</li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="col">
                                      <div class="single-hosting-price">
                                          <ul>
                                              <li>نوع اقامت</li>
                                              <li> $185</li>
                                              <li> $235</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
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
    $.ajax({
        type: 'POST',
        url: 'http://recepshen.ir/api/fetchHotels',
        data: {
            token: "mzoc1CEq401565108119FTd7QvbGea",
            adults: "2",
            childs: "0",
            from: new persianDate($("#date").val()).toLocale('en').format('YYYY-MM-DD'),
            to: new persianDate().add('days', $("#date1").val()).toLocale('en').format("YYYY-MM-DD"),
            city_id: $("#city").val(),
        },
        success: function (msg) {
            alert('wow' + msg);
        }
    });
});
 </script>
@endsection