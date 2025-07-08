 <header class="th-header header-layout2">
         <div class="header-top">
            <div class="container">
               <div class="row gy-2 justify-content-center justify-content-lg-between align-items-center">
                  <div class="col-auto">
                     <div class="header-links">
                        <ul>
                           <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@wawafitnesscenter.co.ke">info@wawafitnesscenter.co.ke</a></li>
                           <li class="d-none d-md-inline-block"><i class="fa-solid fa-location-dot"></i> <span>JKIA Terminal 1B International Departures, Gate 11</span></li>
                            <li class="d-none d-md-inline-block"><i class="fa-solid fa-phone"></i> <span>+254 708 666 527</span></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-auto">
                    <div class="social-links">
                            {{-- <span class="title">Social Media:</span> --}}
                           
                            <a target="new" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                             <a target="new" href="https://www.facebook.com/WAWAFitnessCenter"><i class="fab fa-facebook-f"></i></a> 
                              <a target="new" href="https://www.youtube.com/@wawafitnesscenter5166"><i class="fab fa-youtube"></i></a>
                             <a target="new" href="https://x.com/WAWAfcKENYA"><i class="fab fa-twitter"></i></a>
                              <a target="new" href="https://www.linkedin.com/company/massage-chairs-kenya/"><i class="fab fa-linkedin-in"></i></a>
                              <a target="new" href="https://wa.me/254708666527"><i class="fab fa-whatsapp"></i></a>
                        </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="sticky-wrapper" style="background-color: #EBF5DE">
            <div class="container">
               <div class="menu-area">
                  <div class="row align-items-center justify-content-between">
                     <div class="col-auto">
                        <div class="header-logo"><a class="header-logo-link" href="{{url('/')}}"><img src="{{asset('uploads/logo.png')}}" alt="Wawa Fitness Center "></a></div>
                     </div>
                     <div class="col-auto">
                        <nav class="main-menu style2 d-none d-lg-inline-block">
                              @include('front.partials.menu')
                        </nav>
                        <div class="header-button"><button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button></div>
                     </div>
                     <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="{{route('contact')}}" class="th-btn style2">Contact Us<i class="fa-solid fa-envelope ms-2"></i></a> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>