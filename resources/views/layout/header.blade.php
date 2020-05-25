<header class="header-top-area">
    <div class="container">
       <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-6 col-12">
             <div class="header-top-left">
                <ul>
                   <li>
                      <select name="name" id="option">
                        <option value="Eng">Fa</option>
                        {{-- <option value="Eng">En</option>
                        <option value="Eng">Ar</option> --}}
                      </select>
                   </li>
                   <li> <a href="tel:09152040749"> <span class="ti-headphone-alt"></span>09152040749</a> </li>
                   <li> <a> <span class="ti-email"></span>info[@]Recepshen.com</a> </li>
                </ul>
             </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-6 col-12">
             <div class="header-top-right">
                <ul>
                   {{-- <li><a href="#">رزرو آنلاین <span class="ti-comments"></span></a></li> --}}
                   <li id="loginMenu"><a href="{{ url('login') }}">عضویت/ورود</a></li>
				   <li id="logoutMenu"><a href="{{ url('logout') }}">خروج</a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </header>
 <div class="navigation-bar stick">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="logo">
                    <a href="/"><img src={{ asset('asset/img/logo/logo.png') }} alt="logo"></a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="navigation">
                    <ul class="list-inline text-right" id="mainmenu">
                        <li><a href="/hotels">رزرو هتل</a></li>
                        <li><a href="/ecotourisms/">رزرو بوم گردی</a></li>
                        <li><a href="/trains/">بلیط قطار</a></li>
                        <li><a href="/flight/">بلیط پرواز</a></li>
                        <li><a href="/tours/">تور</a></li>
                        <li><a href="#">تماس باما</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
