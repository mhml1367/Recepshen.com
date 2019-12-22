@extends('layout.index')

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
                                <h2>نوع هتل</h2>
                                <div class="categories-right-list">
                                    <ul>
                                        @foreach ($hotelTypes as $item)
                                            <li><input type="checkbox" value="{{$item->id}}"> <a>{{$item->name}} </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>


                     <div class="single-pricing-table">
                        <h2>نوع هتل</h2>
                        @foreach ($hotelTypes as $item)
                            <div><p class="pull-right"><input type="checkbox" value="{{$item->id}}"></p>{{$item->name}}</div>
                        @endforeach
                        <div class="pricing-content">
                           <ul>
                              <li>10GB Space</li>
                              <li>1 Free Domain</li>
                              <li>300GB SSD Disk</li>
                              <li>Special Offers</li>
                              <li>Unlimited Support</li>
                           </ul>
                           <a class="pricing-btn blue-btn" href="#">Select Plan</a>
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
                      <div class="col-lg-12 col-md-12 col-xs-12 ">
                           <div class="single-pricing-table">
                              <h2>Enterprice</h2>
                              <img src="asset/img/pricing-icon/pricing-icon-4.png" alt="pricing-icon">
                              <div class="pricing-content">
                                 <ul>
                                    <li>10GB Space</li>
                                    <li>1 Free Domain</li>
                                    <li>300GB SSD Disk</li>
                                    <li>Special Offers</li>
                                    <li>Unlimited Support</li>
                                 </ul>
                                 <a class="pricing-btn blue-btn" href="#">Select Plan</a>
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
<script>
$('#date').persianDatepicker({
    initialValue: true,
    initialValueType: 'persian',
    format: "YYYY/MM/DD",
    autoClose: true
});

// $(document).ready(function () {
//     $.ajax({
//         type: 'POST',
//         url: 'http://recepshen.ir/api/cities',
//         data: {
//             token: "mzoc1CEq401565108119FTd7QvbGea",
//         },
//         success: function (opdata) {

//             $.each(opdata, function (key, value) {
//                 $('#city').append('<option value=' + value.id + '>' + value.name + '</option>');
//             });
//                 $('#city').niceSelect('update'); 
//         }
//     });
// });

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