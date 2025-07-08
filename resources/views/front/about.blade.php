@extends('front.master-page')

@section('content')
      <div class="breadcumb-wrapper" data-bg-src="{{asset('uploads/bg-qbout.jpg')}}">
         <div class="container">
            <div class="breadcumb-content">
               <h1 class="breadcumb-title">About Us</h1>
               <ul class="breadcumb-menu">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li>About Us</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="about-area overflow-hidden space-bottom position-relative space" id="about-sec">
         <div class="container">
            <div class="row gy-4">
               <div class="col-xxl-8 mb-30 mb-xl-0">
                  <div class="title-area">
                     <span class="sub-title text-anime-style-2" style="color:#000000; font-weight:800">About us</span>

                     <h2 class="sec-title text-anime-style-3"><span class="fw-normal">Massage Chairs</span>, Effortless Experience, Trusted Wellness</h2>
                  </div>
                  <div class="img-box1">
                     <div class="about-wrapper">
                        <div class="img1"><img src="{{asset('uploads/homeL50.jpg')}}" alt="About"> <a href="https://www.youtube.com/watch?v=4nC9npHkqOg" class="play-btn popup-video"><i class="fa-solid fa-play"></i></a></div>
                        <div class="">

                           <p class="fs-18 mb-30 wow fadeInUp" data-wow-delay=".1s">
                              At <strong>Wawa Fitness Center,</strong> we believe in the power of wellness — anytime,
                              anywhere. Since 2015, we’ve been dedicated to making relaxation more accessible
                              through our premium massage chair services.<br><br>

                              We offer high-quality, full-body massage chair experiences tailored for traveller’s,
                              busy professionals, and everyday individuals seeking comfort and relief. Whether
                              you&#39;re passing through an airport, taking a wellness break at work, or simply in need
                              of a few minutes of calm, our chairs deliver a revitalizing experience in minutes.
                              <br>
                              Beyond on-site services, we also:
                           </p>

                           <p class="fs-18 mb-30 wow fadeInUp">
                                 1.Hire out massage chairs for events, offices, and wellness programs<br>
                                 2.Partner with corporates to bring stress relief directly into their workplaces.<br>
                                 3.Sell premium massage chairs for personal and business use.<br>
                           </p>
                           <p class="fs-18 mb-30 wow fadeInUp">
                              From airports to boardrooms, homes to hospitality spaces, Wawa is helping people
                              pause, breathe, and recharge — one massage at a time.
                              <br>
                              <strong>Relax. Relief. Recover — with Wawa Fitness Center.</strong>
                           </p>
                           <div class="btn-group mt-40 wow fadeInUp" data-wow-delay=".4s">
                              <a href="about.html" class="th-btn style2">More About Us <i class="fa-light fa-arrow-right-long ms-2"></i></a>
                              <div class="call-info">
                                 <div class="call-icon"><a href="tel:+00123456789"><i class="fa-solid fa-phone-volume"></i></a></div>
                                 <div class="media-body">
                                    <span class="call-label">Get In Touch, Call Now</span>
                                    <p class="call-link"><a href="tel:+254 708 666 527">+254 708 666 527</a></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-4">
                  <div class="img-box2">
                     <div class="img-box-wrapp">
                        <div class="img1 reveal chair-1"><img src="{{asset('uploads/Notes-on-using-massage-chairs.jpg')}}" alt="About"></div>
                        <div class="img2 reveal chair-1"><img src="{{asset('uploads/Massage-chairs-give-life-a-sense-of-ceremony.jpeg')}}" alt="About"></div>
                     </div>
                     <div class="about-wrapp">
                        <div class="discount-wrapp">
                           <div class="logo"><img src="{{asset('uploads/logo.png')}}" alt=""></div>
                           <div class="discount-tag"><span class="discount-anime">Wawa Fitness Center * Massage services *</span></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape-mockup" data-bottom="7%" data-left="0%"><img src="{{asset('theme/assets/img/shape/element-1.png')}}" alt=""></div>
      </div>
    
@endsection