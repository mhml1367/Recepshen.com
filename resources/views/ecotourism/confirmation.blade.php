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
      <section class="blog-1-area about-blog">
         <div class="container">
            @isset ($rest->info)
            <div class="homepage-2 homepage-4 pricing-table-area">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title">
                        <h2><span>پرداخت</span> انجام شد </h2>
                        <img src="/asset/img/section-shape.png" alt="section-shape">
                     </div>
                  </div>
               </div>
               <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        
                        شماره رزرو شما {{$rest->info->factor_number}} و در تاریخ {{$rest->info->hotel->start_date}} در ساعت {{$rest->info->hotel->in_time}} حضور رسانید 
                        <br>
                        و تایید رزرو از طرف هتل برای شما پیامک می شود.
                        
                    </div>
                </div>
            </div>
            @endisset
            @isset ($rest->error)
            <div class="homepage-2 homepage-4 pricing-table-area">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2><span>پرداخت</span> انجام نشد </h2>
                            <img src="/asset/img/section-shape.png" alt="section-shape">
                        </div>
                    </div>
                </div>
            </div>
            @endisset
            @if ($rest == "")
            <div class="homepage-2 homepage-4 pricing-table-area">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2><span>پرداخت</span> کنسل کردید </h2>
                            <img src="/asset/img/section-shape.png" alt="section-shape">
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    </div>
</section>
@endsection

@section('js')
<script src="/asset/bootstrap-slider/bootstrap-slider.js"></script>

<script>

 </script>
@endsection