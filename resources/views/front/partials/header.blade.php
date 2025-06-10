 <header class="th-header header-layout2">
         {{-- <div class="header-top">
            <div class="container">
               <div class="row gy-2 justify-content-center justify-content-lg-between align-items-center">
                  <div class="col-auto">
                     <div class="header-links">
                        <ul>
                           <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@wawafitnesscenter.co.ke">info@wawafitnesscenter.co.ke</a></li>
                           <li class="d-none d-md-inline-block"><i class="fa-solid fa-location-dot"></i> <span>JKIA terminal 1B International Departures, Gate II</span></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-auto">
                     <div class="header-button">
                        <a href="{{route('contact')}}" class="th-btn"><img style="width:20px" src="{{asset('theme/assets/img/icon/cursor.svg')}}" alt="">Visit Us today</a>
                        <form class="search-form"><input type="text" placeholder="Search..."> <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button></form>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
         <div class="sticky-wrapper">
            <div class="container">
               <div class="menu-area">
                  <div class="row align-items-center justify-content-between">
                     <div class="col-auto">
                        <div class="header-logo"><a href="{{url('/')}}"><img style="max-width:300px" src="{{asset('uploads/logo.png')}}" alt="Wawa Fitness Center "></a></div>
                     </div>
                     <div class="col-auto">
                        <nav class="main-menu style2 d-none d-lg-inline-block">
                              @include('front.partials.menu')
                        </nav>
                        <div class="header-button"><button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button></div>
                     </div>
                     <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="{{route('contact')}}" class="th-btn style2">Make Appointment <i class="fa-solid fa-calendar-days ms-2"></i></a> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>