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

                     <h2 class="sec-title text-anime-style-3"><span class="fw-normal">Massage Seats</span>, Effortless Experience, Trusted Wellness</h2>
                  </div>
                  <div class="img-box1">
                     <div class="about-wrapper">
                        <div class="img1"><img src="{{asset('uploads/homeL50.jpg')}}" alt="About"> <a href="https://www.youtube.com/watch?v=4nC9npHkqOg" class="play-btn popup-video"><i class="fa-solid fa-play"></i></a></div>
                        <div class="">
                           <p class="fs-18 mb-30 wow fadeInUp" data-wow-delay=".1s">
                            <strong>Our advanced massage chair is perfectly suited for both commercial and personal use.</strong>
                            It can be conveniently installed in high-traffic areas such as shopping malls, barbershops, and beauty salons, or placed at home for individual relaxation—particularly beneficial for individuals experiencing back discomfort.<br><br>

                            Engineered for comfort and effectiveness, the chair delivers a comprehensive neck and back massage using a variety of techniques, including kneading, tapping, pressing, knocking, and Shiatsu.
                           </p>
                           <div class="checklist mb-50">
                              <ul>
                                 <li class="wow fadeInUp" data-wow-delay=".1s">Affordable full-body massage in 10 to 30-minute sessions.</li>
                                 <li class="wow fadeInUp" data-wow-delay=".3s">Selling massage chairs and spa massage chairs.</li>
                                 <li class="wow fadeInUp" data-wow-delay=".3s">Hire massage chairs for corporate functions.</li>
                              </ul>
                           </div>
                           <div class="btn-group mt-40 wow fadeInUp" data-wow-delay=".4s">
                              <a href="about.html" class="th-btn style2">More About Us <i class="fa-light fa-arrow-right-long ms-2"></i></a>
                              <div class="call-info">
                                 <div class="call-icon"><a href="tel:+00123456789"><i class="fa-solid fa-phone-volume"></i></a></div>
                                 <div class="media-body">
                                    <span class="call-label">Get In Touch, Call Now</span>
                                    <p class="call-link"><a href="tel:+254 772 188 540">+254 772 188 540</a></p>
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