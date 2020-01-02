@extends('layout.index')

@section('css')
<link rel="stylesheet" href="/asset/bootstrap-slider/slider.css">
<link rel="stylesheet" href="/asset/leaflet.css">
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
           <div class="col-xl-12 col-lg-7 col-md-12">
            <div class="welcome-right">
                <h5 class="heading-title">@for ($i = 0; $i < $rec->stars; $i++)
                        <i class="fa fa-star" style="color: yellow;"></i>
                    @endfor                {{$rec->type}}</h5>
                <h2 class="heading-title-default">{{$rec->name}}</h2>
                <div class="heading-text clearfix">
                <p>{{$rec->address}} <i class="fa fa-map-marker"></i></p>
                <p>{{$rec->description}}</p>
                </div>

           </div>
           {{-- <div class="col-xl-4 col-lg-5 col-md-12">

           </div> --}}
       </div>
        <div class="row">
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>ساعت ورود</span>
                            <h4>{{$rec->in_time}}</h4>
                            <p>هتل آپارتمان</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>ساعت خروج</span>
                            <h4>{{$rec->out_time}}</h4>
                            <p>هتل آپارتمان</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>تعداد طبقات</span>
                            <h4>{{$rec->floors}}</h4>
                            <p>هتل آپارتمان</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>تعداد اتاق ها</span>
                            <h4>{{$rec->roomsCount}}</h4>
                            <p>هتل آپارتمان</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>تعداد تخت ها</span>
                            <h4>{{$rec->beds}}</h4>
                            <p>هتل آپارتمان</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>سال ساخت</span>
                            <h4>{{$rec->construct_year}}</h4>
                            <p>هتل آپارتمان</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
 </section>

 <section class="homepage-2 blog-2-area">
     <div class="row">
         <div class="container">
                <h2 class="section-title" id="Hotelspecifications"> </h2>
                <div class="row">
                    @for ($c = 0; $c < count($rec->specifications); $c++)
                        <div class="col">
                            <div class="single-blog-1">
                                <img src="{{$rec->specifications[$c]->icon}}" alt="brand-icon">
                                <h2>{{$rec->specifications[$c]->name}}</h2>
                            </div>
                        </div>
                    @endfor
                </div>
         </div>
     </div>
 </section>




 <section class="domain-area homepage-2 ">
    <div class="clouds">
       <img src="asset/img/cloud/cloud-6.png" alt="cloud" class="cloud1">
       <img src="asset/img/cloud/cloud-2.png" alt="cloud" class="cloud3">
       <img src="asset/img/cloud/cloud-3.png" alt="cloud" class="cloud4">
       <img src="asset/img/cloud/cloud-4.png" alt="cloud" class="cloud5">
       <img src="asset/img/cloud/cloud-5.png" alt="cloud" class="cloud2">
       <img src="asset/img/cloud/cloud-6.png" alt="cloud" class="cloud6">
    </div>
   <div class="container domain-inner">
       <div class="row domain-checkup">
            <div class="domain-checkup-left" >
                <div id="mapid" class="" style="width: 600px; height: 400px;"></div>
            </div>
            {{-- <div class="domain-checkup-left" >
                <div id="mapi" class="pull-right"></div>
            </div> --}}
       </div>
   </div>
</section>

 <section class="about-blog">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-12 ">
                <div class="single-blog-1">
                    <img src="/image/Animal.png" alt="section-icon">
                    <h2>قوانین ورود حیوانات</h2>
                    <p>{{$rec->AnimalRule}}</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12 ">
                <div class="single-blog-1">
                    <img src="/image/cash_back.png" alt="section-icon">
                    <h2>قوانین استرداد رزرو</h2>
                    <p>{{$rec->refundRule}}</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-12 ">
                <div class="single-blog-1">
                    <img src="/image/Child.png" alt="section-icon">
                    <h2>قوانین کودک</h2>
                <p>{{$rec->childRule}}</p>
                </div>
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
                        <h2> لیست <span>اتاق ها</span> موجود </h2>
                        <img src="/asset/img/section-shape.png" alt="section-shape">
                     </div>
                  </div>
               </div>
               <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="row">
                            @for ($i = 0; $i < count($rec->rooms); $i++)
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <div class="single-pricing-table active">
                                        <span class="table-highlight\">{{$rec->rooms[$i]->beds}}</span>
                                        <div class="row no-gutters\">
                                            <div class="col-lg-4 col-md-12 col-xs-12">
                                                <img src="{{$rec->rooms[$i]->images["0"]}}" alt="pricing-icon">
                                            </div>
                                            <div class="col-lg-8 col-md-12 col-xs-12">
                                                <div class="row no-gutters\">
                                                    <div class="col-lg-10 col-md-12 col-xs-12 text-right">
                                                        <h2>{{$rec->rooms[$i]->name}}</h2>
                                                        <i class="fa fa-map-marker"
                                                            style="color:darkgray;"></i>{{$rec->rooms[$i]->id}}
                                                        <div class="col-lg-10 col-md-12 col-xs-12\">
                                                            <a class="pricing-btn blue-btn pull-left"
                                                            data-toggle="modal" data-target="#reserve"
                                                            onclick="Modal({{$rec->rooms[$i]->id}},{{$rec->rooms[$i]->name}})">رزرو اتاق</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </section>
      <section class="homepage-2 blog-2-area">
        <div class="row">
            <div class="container">
                <div class="row">
                    @for ($b = 0; $b < count($rec->images_sm); $b++)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-blog-1">
                                <img src="{{$rec->images_sm[$b]}}" alt="brand-icon">
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
      </section>


    <section class="testimonial-carousel testimonial-area">
        <div class="container">
            <div class=" slick-initialized slick-slider" style="direction: ltr;">
                <div class="slick-list draggable">
                    <div class="slick-track">
                        <div class="single-item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                            tabindex="-1" style="width: 555px;">
                            <div class="item-inner">
                                <img src="/image/parking.png" alt="testimonial quote" class="quote-img">
                            <p class="review">{{$rec->parking}}</p>
                            </div>
                        </div>
                        <div class="single-item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                            tabindex="-1" style="width: 555px;">
                            <div class="item-inner">
                                <img src="/image/Restoran.png" alt="testimonial quote" class="quote-img">
                                <p class="review">{{$rec->foods}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="reserve" tabindex="-1" role="dialog" aria-labelledby="reserve" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="roomReserve"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
                    <div class="row">
                            <div class="col">
                        <div class="form-group">
                          <label for="recipient-name" class="col-form-label">اقامت:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                            </div>
                            <div class="col">

                        <div class="form-group">
                          <label for="message-text" class="col-form-label">اقامت با صبحانه:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        </div>
                        <div class="col">

                        <div class="form-group">
                          <label for="message-text" class="col-form-label">فولبر:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        </div>
                        </div>
                <div class="row">
                    <div class="col">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">نام:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">موبایل:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">آقا/خانم:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                </div>
                <div class="col">
                        <div class="form-group">
                                <label for="recipient-name" class="col-form-label">نام خانوادگی</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                              <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">شهر مبدا:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                  </div>
                                  <div class="form-group">
                                        <label for="message-text" class="col-form-label">خارحی:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                      </div>
                </div><div class="col">
                        <div class="form-group">
                                <label for="recipient-name" class="col-form-label">کدملی</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                              <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">قصد از مسافرت:</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                  </div>
                </div>
                </div>
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف از رزرو</button>
              <button type="button" class="btn btn-primary">درخواست رزرو</button>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('js')
<script src="/asset/bootstrap-slider/bootstrap-slider.js"></script>
<script src="/asset/leaflet.js"></script>
<script>
// $(function () {
//     $.ajax({
//         type: 'POST',
//         url: 'http://recepshen.ir/api/fetchRooms',
//         data: {
//             token: "mzoc1CEq401565108119FTd7QvbGea",
//             hotel_id: ,
//             from: "",
//             to: "",
//         },
//         success: function (Data) {
//             hotel(Data["data"])
//         }
//     });
// });

var biHotel="";

function Modal(idRoom,nameRoom) {



            // for (b = 0; b < Data["images_sm"].length; b++) {
            //     biHotel += "<div class=\"col-lg-4 col-md-6 col-12\">";
            //     biHotel += "<div class=\"single-blog-1\">";
            //     biHotel += "<img src=\""+ Data["images_sm"][b] +"\" alt=\"brand-icon\">";
            //     biHotel += "</div>";
            //     biHotel += "</div>";
            //     biHotel += "</div>";
            // }


   

    document.getElementById("roomReserve").innerHTML = "اتاق "+ nameRoom;
    // document.getElementById('#Hotels').style.background-image = "url("+Data["images"]["0"]+")";
};




    var as = "{{$rec->location}}";
    var loc = as.split(",");;
    map(loc["0"],loc["1"],"{{$rec->name}}");

    function map(lat,lan,name)
    {
        var map = L.map('mapid').setView([lat,lan], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);


        L.marker([lat,lan]).addTo(map)
            .bindPopup(name).openPopup();

        var popup = L.popup();

    }
 </script>
@endsection