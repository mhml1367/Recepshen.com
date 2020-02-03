@extends('layout.index')

@section('css')
<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
<link rel="stylesheet" href="/asset/leaflet.css">
<script src="/asset/js/vue.js"></script>

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
       <div class="row">
        @if (count($rec->images) != null)
                <div class="col">
                    <img src="{{$rec->images["0"]}}" width="500px" v-show="!show">   
                    <img v-bind:src="curentselect" width="500px" v-bind:class="show" v-show="show">
                </div>
        @endif
    
                <div class="col">
                    <div class="welcome-right">
            
                <h5 class="heading-title">{{$rec->type}}   @for ($i = 0; $i < $rec->stars; $i++)
                    <i class="fa fa-star" style="color: yellow;"></i>
                @endfor</h5>
                <h2 class="heading-title-default">{{$rec->name}}</h2>
                <div class="heading-text clearfix">
                    <p><i class="fa fa-map-marker"></i> {{$rec->address}} </p>
                    <p>{{$rec->description}}</p>
                </div>

            </div>
            </div>

    </div>
    </div>
</section>
<section class="homepage-5 blog-2-area">
    <div class="container">
    <div class="row">
        @if (count($rec->images_sm) != null)
        @for ($b = 0; $b < count($rec->images_sm); $b++)
            <div class="col single-blog-1">
                <img @click="itemclick({{$b}})" src="{{$rec->images_sm[$b]}}" class="single-blog-img" width="150px" alt="Hotel Image {{$b}}">
            </div>
        @endfor
        @endif

    </div>
    </div>
</section>
       <section class="welcome-area">
        <div class="container">
           <div class="row">
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>ساعت ورود</span>
                            <h4>{{$rec->in_time}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>ساعت خروج</span>
                            <h4>{{$rec->out_time}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>تعداد طبقات</span>
                            <h4>{{$rec->floors}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>تعداد اتاق ها</span>
                            <h4>{{$rec->roomsCount}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>تعداد تخت ها</span>
                            <h4>{{$rec->beds}}</h4>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="data-wedged">
                        <div class="data-single-wedged">
                            <span>سال ساخت</span>
                            <h4>{{$rec->construct_year}}</h4>
                        </div>
                    </div>
                </div>
    </div>
    </div>
 </section>

 <section class="testimonial-carousel testimonial-area">
    <div class="container">
        <div class=" slick-initialized slick-slider">
            <div class="slick-list draggable">
                <div class="slick-track">
                    <div class="single-item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                        tabindex="-1" style="width: 555px;">
                        <div class="row item-inner">
                            <div class="col">
                            <img src="/image/parking.png" alt="testimonial quote" class="quote-img">
                            </div>
                            <div class="col-md-8">
                                <p class="review">{{$rec->parking}}</p>
                            </div>
                        </div>
                    </div>


                    <div class="single-item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                    tabindex="-1" style="width: 555px;">
                    <div class="row item-inner">
                        <div class="col">
                        <img src="/image/Restoran.png" alt="testimonial quote" class="quote-img">
                        </div>
                        <div class="col-md-8">
                            <p class="review">{{$rec->foods}}</p>
                        </div>
                    </div>
                </div>
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
               <div class="col-lg-12 col-md-12 col-xs-12">
                {{-- <div class="lds-ellipsis-Box" id="loadigBox" style="display: none">
                    <div></div><div></div><div></div><div></div>
                </div>    --}}
                   @for ($i = 0; $i < count($rec->rooms); $i++)
                   <div class="row single-table ">
                       <div class="col my-auto"><img src="@isset($rec->rooms[$i]->images["0"]) {{$rec->rooms[$i]->images["0"]}} @endisset @empty($rec->rooms[$i]->images["0"])
                           /image/imageNotFound.jpg
                           @endempty"></div>
                       <div class="col my-auto">{{$rec->rooms[$i]->name}}</div>
                       <div class="col my-auto">{{$rec->rooms[$i]->beds}}</div>
                       <div class="col col-lg-5 col-sm-6 my-auto">
                           @for ($b = 0; $b < count($rec->rooms[$i]->contracts); $b++)
                               <div class="row">
                                   <div class="col-4">{{$rec->rooms[$i]->contracts[$b]->name}}</div>
                                   <div class="col-8">
                                       @if ($rec->rooms[$i]->contracts[$b]->discount_price == null)
                                       {{ number_format($rec->rooms[$i]->contracts[$b]->price) }} ريال
                                       @else
                                       <strike>{{ number_format($rec->rooms[$i]->contracts[$b]->price) }}</strike> {{ number_format($rec->rooms[$i]->contracts[$b]->discount_price) }} ريال 
                                       @endif
                                        </div>
                               </div>
                           @endfor
                       </div>
                       <div class="col my-auto"><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#reserve"
                           data-idRoom="{{$rec->rooms[$i]->id}}" data-id="{{$i}}" data-nameRoom="{{$rec->rooms[$i]->name}}"
                           data-capacity="{{$rec->rooms[$i]->details->capacity}}"
                           >رزرو اتاق</button></div>
                   </div>
                   @endfor
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
                            <div class="list-specifications">
                                @if ($rec->specifications[$c]->icon != null)
                                    <img src="{{$rec->specifications[$c]->icon}}" alt="brand-icon">
                                @endif
                                <p>{{$rec->specifications[$c]->name}}</p>
                            </div>
                        </div>
                    @endfor
                </div>
         </div>
     </div>
 </section>


@if ($rec->location != null)
    
 <section class="domain-area homepage-2 ">
   <div class="container domain-inner">
       <div class="domain-checkup">
       <div class="row">
           <div class="col">
                <div id="mapid" class="" style="width: 100%; height: 400px;"></div>
            </div>
            <div class="col-md-4">
                <b>مراکز و خیابان های نزدیک با خودرو:</b>
                <div class="scroll-bar-wrap">
                    <div class="scroll-box">
                <div class="categories-right-list">
                    <ul>
                        @for ($c = 0; $c < count($rec->places); $c++)
                            <li><i class="fa fa-map-marker"></i> {{$rec->places[$c]->name}}   <i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i>   {{$rec->places[$c]->distance}} دقیقه</li>
                        @endfor
                    </ul>
                </div>
                </div>
                </div>
            </div>
       </div>
       </div>
   </div>
</section>
@endif
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
                                    <label for="Sir_Madam" class="col-form-label">آقا/خانم:</label>
                                    <select name="Sir_Madam" id="Sir_Madam">
                                            <option value="M" selected>اقا</option>
                                            <option value="F">خانم</option>
                                          </select>
                                </div>
                        <div class="form-group">
                            <label for="city" class="col-form-label">شهر مبدا:</label>
                            <input type="text" class="form-control" id="city">
                        </div>
    
                    </div>
                </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">انصراف از رزرو</button>
              <button type="button" class="btn btn-primary" id="send">درخواست رزرو</button>
            </div>
          </div>
        </div>
      </div>
    @endsection

@section('js')
<script src="/asset/leaflet.js"></script>
<script src="/asset/js/notify.js"></script>
<script>
    new Vue({
    el: "#app",
    data:{
        images: <?php echo json_encode($rec->images, JSON_PRETTY_PRINT) ?>,
        curentselect : '',
        show: "",
        timeLoading: 2,
    },
    methods: {
        itemclick(index) {
            this.curentselect = this.images[index];
            this.show = "animated bounce";
            setTimeout(() => { this.show = "animated"; }, this.timeLoading * 400)
        }
    },
    // mounted () {
    //    this.curentselect = this.images[0]
    // }
    });

    var idRoom="";
    var start_date="{{$rec->start_date}}";
    var end_date="{{$rec->end_date}}";
    var rooms=<?php echo json_encode($rec->rooms, JSON_PRETTY_PRINT) ?>;

    $('#reserve').on('show.bs.modal', function (event) {
        var nameRoom = event.relatedTarget.dataset.nameroom;
            idRoom = event.relatedTarget.dataset.idroom;
        var id = event.relatedTarget.dataset.id;
        var from = event.relatedTarget.dataset.from ;
        var to = event.relatedTarget.dataset.to;
        var capacity = event.relatedTarget.dataset.capacity;

        var calc="";

            calc += "<div class=\"col\">";
            calc += "<div class=\"form-group\">";
            calc += "<lable> تاریخ رفت: "+start_date+"</lable>";
            calc += "</div>";
            calc += "</div>";

            calc += "<div class=\"col\">";
            calc += "<div class=\"form-group\">";
            calc += "<lable> تاریخ برگشت: "+end_date+"</lable>";
            calc += "</div>";
            calc += "</div>";

            calc += "<div class=\"col\">";
            calc += "<div class=\"form-group\">";
            calc += "<lable > تعداد نفرات: "+capacity+"</lable>";
            calc += "</div>";
            calc += "</div>";


        var contracts="";
        var Titelcontracts = "<div class=\"col\"><label>انتخاب نوع اقامت:</label></div>";

        for (az = 0; az < rooms[id].contracts.length; az++) {
            var breakfast="";
            var lunch="";
            var dinner="";
            var stay="";
            
            if (rooms[id].contracts[az].stay = 1) {
                 stay = "اقامت";
            }
            if (rooms[id].contracts[az].breakfast == 1) {
                 breakfast = "صبحانه";
            }
            if (rooms[id].contracts[az].lunch == 1) {
                lunch = "نهار";
            }
            if (rooms[id].contracts[az].dinner == 1) {
                dinner = "شام";
            }
            
            contracts += "<div class=\"col\">";
            contracts += "<div class=\"form-group\">";
            contracts += "<input type=\"radio\" name=\"gender\" value=\""+rooms[id].contracts[az].id+"\"> "+ stay +" "+ breakfast +" "+ lunch +" "+ dinner +"<br>";
            if (rooms[id].contracts[az].discount_price == null) {
                contracts += (rooms[id].contracts[az].price + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
            }else{
                contracts += (rooms[id].contracts[az].discount_price + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                contracts += "<strike>"+(rooms[id].contracts[az].price + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+"</strike>";
            }
            contracts += " ريال </input>";
            contracts += "</div>";
            contracts += "</div>";
        }
        var modal = $(this)
        // modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('#roomReserve').text("رزرو "+nameRoom);
        modal.find('#Titelcontracts').html(Titelcontracts);
        modal.find('#contracts').html(contracts);
        modal.find('#calc').html(calc);
        // modal.find('nameRoom').text(nameRoom)
    });
    $("#send").click(function () {
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
    $.ajax({
        type: 'POST',
        url: "{{ route('post.hotels.reserve') }}",
        data: {
            hotel_id: "{{$rec->id}}",
            room_id: idRoom,
            contracts: $('input[name="gender"]:checked').val(),
            first_name: $("#first_name").val(),
            last_name: $("#last_name").val(),
            national_code: $("#national_code").val(),
            phone_number: $("#phone_number").val(),
            phone_number: $("#phone_number").val(),
            Sir_Madam: $("#Sir_Madam").val(),
            city: $("#city").val(),
            Foreign: $("#Foreign").val(),
            start_date: "{{$rec->start_date}}",
            end_date: "{{$rec->end_date}}",
        },
        success: function (Data) {
            if (Data["status"] == 0) {
                $("#send").notify(
                    Data["error"], "error",
                    { position:"right" }
                );
            }
            if (Data["status"] == 1) {
                window.location.replace(Data["data"]["payLink"]);
            }
        }
    });
});



    var as = "{{$rec->location}}";
    var loc = as.split(",");;
    map(loc["0"],loc["1"],"{{$rec->name}}");

    function map(lat,lan,name)
    {
        var map = L.map('mapid').setView([lat,lan], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);


        L.marker([lat,lan]).addTo(map)
            .bindPopup(name).openPopup();

        var popup = L.popup();

    }

    function Gallery(imgs) {
        var expandImg = document.getElementById("expandedImg");
            expandImg.src = imgs;
    }
 </script>
@endsection