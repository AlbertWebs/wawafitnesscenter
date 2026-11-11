 <header class="th-header header-layout2">
         <div class="header-top">
            <div class="container">
               <div class="row gy-2 justify-content-center justify-content-lg-between align-items-center">
                  <div class="col-auto">
                     <div class="header-links">
                        <ul>
                           <li><i class="fa-solid fa-envelope"></i><a href="mailto:{{ $siteSettings->email }}">{{ $siteSettings->email }}</a></li>
                           <li class="d-none d-md-inline-block"><i class="fa-solid fa-location-dot"></i> <span><a href="https://www.google.com/maps/place/WAWA+Fitness+Center/@-1.3306552,36.9237889,17z/data=!3m1!4b1!4m6!3m5!1s0x182f22b4316f60d9:0x4da71135e437ed3c!8m2!3d-1.3306552!4d36.9237889!16s%2Fg%2F11b72326l6?entry=ttu&amp;g_ep=EgoyMDI2MTEwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">{{ $siteSettings->address }}</a></span></li>
                            <li class="d-none d-md-inline-block"><i class="fa-solid fa-phone"></i> <span><a href="tel:{{ preg_replace('/\\s+/', '', $siteSettings->phone) }}">{{ $siteSettings->phone }}</a> / <a href="tel:{{ preg_replace('/\\s+/', '', $siteSettings->phone_2) }}">{{ $siteSettings->phone_2 }}</a></span></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-auto">
                    <div class="social-links">
                            {{-- <span class="title">Social Media:</span> --}}

                            <a target="_blank" rel="noopener" href="{{ $siteSettings->instagram_url }}"><i class="fab fa-instagram"></i></a>
                             <a target="_blank" rel="noopener" href="{{ $siteSettings->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                              <a target="_blank" rel="noopener" href="{{ $siteSettings->youtube_url }}"><i class="fab fa-youtube"></i></a>
                             <a target="_blank" rel="noopener" href="{{ $siteSettings->x_url }}"><i class="fab fa-twitter"></i></a>
                              <a target="_blank" rel="noopener" href="{{ $siteSettings->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
                              <a target="_blank" rel="noopener" href="https://wa.me/{{ preg_replace('/\\D+/', '', $siteSettings->whatsapp_number ?: $siteSettings->phone) }}"><i class="fab fa-whatsapp"></i></a>
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
                        <div class="header-logo"><a class="header-logo-link" href="{{url('/')}}"><img src="{{ !empty($siteSettings->logo) ? asset('storage/' . $siteSettings->logo) : asset('uploads/logo.png') }}" alt="{{ $siteSettings->sitename }}"></a></div>
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
