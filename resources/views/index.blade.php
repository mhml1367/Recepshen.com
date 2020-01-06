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
<section class="brand-area" style="direction: ltr;">
   <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="brand-inner">
                 <div class="owl-carousel all-brand-carsouel">
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                         <img src="/asset/img/brand-logo/1.png" alt="brand-icon">
                      </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/2.png" alt="brand-icon">
                    </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/3.png" alt="brand-icon">
                    </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/4.png" alt="brand-icon">
                    </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/5.png" alt="brand-icon">
                    </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/6.png" alt="brand-icon">
                    </div>
                    </div>
                 </div>
              </div>
          </div>
      </div>
   </div>
</section>
<section class="blog-details latest-blog-area wow fadeUpIn animated" data-wow-duration="2s" data-wow-delay="0.2s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="/image/resev.jpg" style="width: 100%">
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
 </script>
@endsection
