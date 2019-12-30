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
                               <select name="option">
                                   <option value="1">هتل آپارتان گل نرگس</option>
                               </select>
                               <input id="date" placeholder="تاریخ ورود">
                               <select name="option">
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
                                   <button>
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
                         <img src="/asset/img/brand-logo/brand-icon.png" alt="brand-icon">
                      </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/brand-icon-2.png" alt="brand-icon">
                    </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/brand-icon-3.png" alt="brand-icon">
                    </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/brand-icon-4.png" alt="brand-icon">
                    </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/brand-icon-5.png" alt="brand-icon">
                    </div>
                    </div>
                    <div class="brand-single-item">
                      <div class="brand-single-item-cell">
                       <img src="/asset/img/brand-logo/brand-icon-3.png" alt="brand-icon">
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
 </script>
@endsection
