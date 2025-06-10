@extends('front.master')

@section('content')
<h1 class="breadcumb-title" style="display:none">Massage Chairs for Hire – Relaxation on Demand at Wawa Fitness Center</h1>
{{-- <div class="th-hero-wrapper hero-3" id="hero" data-bg-src="assets/img/bg/hero_bg_1.jpg"> --}}
      <div class="th-hero-wrapper hero-1" id="hero">
         <div class="swiper th-slider" data-slider-options='{"effect":"fade"}'>
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="hero-inner">
                     <div class="th-hero-bg" data-bg-src="/uploads/bg.jpg"></div>
                     <div class="container">
                        <div class="row align-items-end">
                           <div class="col-xl-7">
                              <div class="hero-style1">
                                 <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Relax, <span class="text-themes">Recharge</span>, Rejuvenate, After a Long Day</h1>
                                 <div class="btn-group justify-content-xl-start justify-content-center" data-ani="slideinup" data-ani-delay="0.8s">
                                    <a href="{{route('contact')}}" class="th-btn style1">Book an Appointment <i class="fa-solid fa-calendar-days ms-2"></i></a> 
                                    <a href="{{url('/')}}/massage-chairs/4d-massage-chair" class="th-btn th-border">Shop Massage Chairs <i class="fa-light fa-arrow-right-long ms-2"></i></a>
                                </div>
                              </div>
                           </div>
                           <div class="col-xl-5">
                              {{-- <div class="hero-image" data-ani="slideinup" data-ani-delay="0.4s"><img src="/theme/assets/img/hero/hero-image-1.png" alt=""></div> --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slider-controller">
               <div class="slider-pagination"></div>
            </div>
         </div>
         <div class="scroll-down"><a href="#about-sec" class="hero-scroll-wrap"><span></span></a> <span class="title">Scroll</span></div>
         <div class="social-links">
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/WAWAFitnessCenter"><i class="fab fa-facebook-f"></i></a> 
            <a href="https://x.com/WAWAfcKENYA"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/massage-chairs-kenya/"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://wa.me/254708666527"><i class="fab fa-whatsapp"></i></a>
         </div>
      </div>
      <div class="position-relative space">
         <div class="container">
            <div class="row gy-4 justify-content-center">
               <div class="col-md-6 col-xl-4 feature-card_wrapp wow fadeInLeft" data-wow-delay=".2s">
                  <div class="feature-card th-ani">
                     <h3 class="box-title text-anime-style-2">Need a Quick Reboot?</h3>
                     <p class="box-text"><strong>Recharge your body with our express massage sessions.</strong> Whether you're on a tight schedule, our chair massages are the perfect way to reduce tension and boost energy.</p>
                     <a href="{{route('contact')}}" class="th-btn black-border">Book a session today <i class="fa-regular fa-arrow-right ms-2"></i></a>
                  </div>
               </div>
               <div class="col-md-6 col-xl-4 feature-card_wrapp wow fadeInUp" data-wow-delay=".4s">
                  <div class="feature-card th-ani">
                     <h3 class="box-title text-anime-style-2">Clean. Safe. Professional.</h3>
                     <p class="box-text"><strong>Your wellness is our priority.</strong> We uphold the highest standards of hygiene, safety, and professionalism. You’re in good hands.</p>
                     <a href="#about-sec" class="th-btn black-border">More About Us <i class="fa-regular fa-arrow-right ms-2"></i></a>
                  </div>
               </div>
               <div class="col-md-6 col-xl-4 feature-card_wrapp wow fadeInRight" data-wow-delay=".6s">
                  <div class="feature-card th-ani">
                     <h3 class="box-title text-anime-style-2">Begin Your Wellness Transformation</h3>
                     <p class="box-text"><strong>From stress relief to full-body rejuvenation, we’ve got you covered.</strong> Explore our range of massage chairs and wellness packages tailored to your needs.</p>
                     <a href="{{route('contact')}}" class="th-btn black-border">Make Appointment <i class="fa-regular fa-arrow-right ms-2"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="about-area overflow-hidden space-bottom" id="about-sec">
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
                              <a href="{{route('about-us')}}" class="th-btn style2">More About Us <i class="fa-light fa-arrow-right-long ms-2"></i></a>
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
      <section class="position-relative overflow-hidden space" data-bg-src="{{asset('theme/assets/img/bg/service_bg_1.jpg')}}" id="service-sec">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-5">
                  <div class="title-area text-center">
                     <span class="sub-title text-anime-style-2" style="font-weight:800">Our Services</span>
                     <h2 class="sec-title text-anime-style-3">What We <span class="fw-normal">Do</span></h2>
                     <p class="fs-18 wow fadeInUp">
                        We work with skilled wellness assistants and top-tier equipment to ensure accurate, high-quality assessments. Our commitment to excellence guarantees reliable results for your wellness journey.
                     </p>
                  </div>
               </div>
            </div>
            <div class="service-list-area">
               <div class="row gy-3">
                  <div class="col-12">
                     <div class="service-grid2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-content">
                           <div class="box-wrapp">
                              <div class="box-icon"><img style="width:100px" src="{{asset('theme/assets/img/icon/L50massage-chair.png')}}" alt="Icon"></div>
                              <h3 class="box-title"><a href="{{route('contact')}}">Affordable full-body massage in 10 to 30-minute sessions.</a></h3>
                              <p class="box-text">Enjoy affordable full-body massage sessions tailored to your schedule, with flexible durations ranging from 10 to 60 minutes for ultimate relaxation and value.</p>
                           </div>
                           <div class="box-right-wrapp">
                              <div class="box-img global-img"><img style="width:300px; height:100%; object-fit:cover" src="{{asset('uploads/Choosing-the-right-massage-chair-is-important.jpg')}}" alt=""></div>
                              <div class="service-btn"><a href="{{route('contact')}}" class="th-btn black-border">Read More <i class="fa-regular fa-arrow-right ms-2"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="service-grid2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="service-content">
                           <div class="box-wrapp">
                              <div class="box-icon"><img style="width:100px" src="{{asset('theme/assets/img/icon/L50massage-chair.png')}}" alt="Icon"></div>
                              <h3 class="box-title"><a href="{{url('/')}}/massage-chairs/4d-massage-chair">Selling massage chairs and spa massage chairs.</a></h3>
                              <p class="box-text">We offer a range of high-quality massage and spa chairs for sale, perfect for personal use or enhancing your wellness business.</p>
                           </div>
                           <div class="box-right-wrapp">
                              <div class="box-img global-img"><img style="width:300px; height:100%; object-fit:cover" src="{{asset('uploads/sadgsdg.jpg')}}" alt=""></div>
                              <div class="service-btn"><a href="{{url('/')}}/massage-chairs/4d-massage-chair" class="th-btn black-border">Products <i class="fa-regular fa-arrow-right ms-2"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="service-grid2 wow fadeInUp" data-wow-delay=".5s">
                        <div class="service-content">
                           <div class="box-wrapp">
                              <div class="box-icon"><img style="width:100px" src="{{asset('theme/assets/img/icon/L50massage-chair.png')}}" alt="Icon"></div>
                              <h3 class="box-title"><a href="{{route('contact')}}">Hire massage chairs for corporate functions.</a></h3>
                              <p class="box-text">Enhance your events with our massage chair hire service—perfect for corporate functions, exhibitions, and wellness activations.</p>
                           </div>
                           <div class="box-right-wrapp">
                             <div class="box-img global-img"><img style="width:300px; height:100%; object-fit:cover" src="{{asset('uploads/Choosing-the-right-massage-chair-is-important.jpg')}}" alt=""></div>
                              <div class="service-btn"><a href="{{route('contact')}}" class="th-btn black-border">Read More <i class="fa-regular fa-arrow-right ms-2"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="text-center mt-60"><a href="{{route('health-benefits')}}" class="th-btn style2">Health Benefits<i class="fa-light fa-arrow-right-long ms-2"></i></a></div>
            </div>
         </div>
      </section>
      <div class="choose-area position-relative overflow-hidden space">
         <div class="container">
            <div class="row gy-5">
               <div class="col-xxl-5">
                  <div class="title-area pe-xl-5 text-lg-start text-center">
                     <span class="sub-title sub-title2 text-anime-style-1" style="font-weight:700">Why Choose Us</span>
                     <h2 class="sec-title text-anime-style-3"><span class="fw-normal d-block">Exceptional Services</span> For Every Client</h2>
                     <p class="fs-18 pe-xl-5 wow fadeInLeft">We have world class equipment. We are equipped with best massage seats & accessories. We ensure best quality.</p>
                  </div>
                  <div class="choose-item-wrap">
                     <div class="choose-item wow fadeInUp" data-wow-delay=".3s">
                        <div class="box-icon"><img src="{{asset('theme/assets/img/icon/choose_1_1.svg')}}" alt="Icon"></div>
                        <div class="media-body">
                           <h3 class="box-title">Expert Care</h3>
                           <p class="box-text">Our trained therapists and wellness assistants deliver personalized services with a professional touch.</p>
                        </div>
                     </div>
                     <div class="choose-item wow fadeInUp" data-wow-delay=".5s">
                        <div class="box-icon"><img src="{{asset('theme/assets/img/icon/choose_1_2.svg')}}" alt="Icon"></div>
                        <div class="media-body">
                           <h3 class="box-title"> Premium Equipment</h3>
                           <p class="box-text">We use top-quality massage chairs and wellness tools to ensure maximum comfort and effective results.</p>
                        </div>
                     </div>
                     <div class="choose-item wow fadeInUp" data-wow-delay=".7s">
                        <div class="box-icon"><img src="{{asset('theme/assets/img/icon/choose_1_3.svg')}}" alt="Icon"></div>
                        <div class="media-body">
                           <h3 class="box-title">Flexible & Affordable Packages</h3>
                           <p class="box-text">Whether it’s a 10-minute recharge or a full-hour session, our massage services are priced to suit every budget.</p>
                        </div>
                     </div>
                     <div class="choose-item wow fadeInUp" data-wow-delay=".9s">
                        <div class="box-icon"><img src="{{asset('theme/assets/img/icon/choose_1_4.svg')}}" alt="Icon"></div>
                        <div class="media-body">
                           <h3 class="box-title">Corporate & Personal Solutions</h3>
                           <p class="box-text">From individual sessions to event chair rentals, we cater to both personal relaxation and professional wellness needs.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xxl-7">
                  <div class="choose-img-box">
                     <div class="img1 wow fadeInLeft global-img" data-wow-delay=".3s"><img src="{{asset('/uploads/1.png')}}" alt=""></div>
                     <div class="img2 wow fadeInRight global-img" data-wow-delay=".6s"><img src="{{asset('/uploads/2.png')}}" alt=""></div>
                     <div class="img3 wow fadeInUp global-img" data-wow-delay=".9s"><img src="{{asset('/uploads/3.png')}}" alt=""></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="shape-mockup" data-bottom="10%" data-right="25%"><img src="assets/img/shape/shape-1.png" alt=""></div>
         <div class="shape-mockup jump" data-bottom="20%" data-right="0%"><img src="assets/img/shape/element-2.png" alt=""></div>
      </div>

      <section class="video-area overflow-hidden space" data-bg-src="{{asset('uploads/bg.jpg')}}">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7">
                  <div class="appointment-area-wrapper">
                     <form action="#" method="POST" class="appointment-form wow fadeInUp ajax-contact">
                        <div class="title-area mb-40">
                           <span class="sub-title">Appointment</span>
                           <h2 class="sec-title">Book an appointment  <span class="fw-normal">with us</span></h2>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6"><input type="text" class="form-control" name="name" id="name" placeholder="Clients name"> <i class="fal fa-user"></i></div>
                           <div class="form-group col-md-6"><input type="email" class="form-control" name="email" id="email" placeholder="Email address"> <i class="fal fa-envelope"></i></div>
                          <div class="form-group col-md-12"><input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile number"> <i class="fal fa-phone"></i></div>
                           <div class="form-group col-12">
                              <select name="subject" id="subject3" class="form-select nice-select">
                                 <option value="" disabled="disabled" selected="selected" hidden>Select Service</option>
                                 <option value="General Massage">General Massage</option>
                                 <option value="Deep Tissue Massage">Deep Tissue Massage</option>
                                 <option value="Aromatherapy Massage">Aromatherapy Massage</option>
                                 <option value="Sports Massage">Sports Massage</option>
                              </select>
                           </div>
                           <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Appointment note"></textarea> <i class="fal fa-comment"></i></div>
                           <div class="col-12 form-group"><input type="checkbox" id="html"> <label for="html">I agree to the Terms of Use and Privacy Policy</label></div>
                           <div class="btn-group col-12">
                              <button class="th-btn style2 style-radius">Make Appointment <i class="fa-light fa-arrow-right-long ms-2"></i></button>
                              <div class="call-info">
                                 <div class="call-icon"><a href="tel:+254 708 666 527"><i class="fa-solid fa-phone"></i></a></div>
                                 <div class="media-body">
                                    <span class="call-label">Get In Touch, Call Now</span>
                                    <p class="call-link"><a href="tel:+254 708 666 527">+254 708 666 527</a></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                     </form>
                  </div>
               </div>
               <div class="col-xl-5">
                  <div class="video-box1 wow fadeInRight text-center"><a href="https://www.youtube.com/watch?v=4nC9npHkqOg" class="video-play-btn popup-video"><i class="fa-solid fa-play"></i></a></div>
               </div>
            </div>
         </div>
      </section>
     

      <div class="marquee-area">
         <div class="marquee-content positive-relative overflow-hidden">
            <div class="marquee">
              <div class="marquee-group">
                <div class="item"><span>Full-Body Massage | </span></div>
                <div class="item"><span>Massage Chair Sales | </span></div>
                <div class="item"><span>Wellness Therapy | </span></div>
                <div class="item"><span>Event Chair Hire | </span></div>
                <div class="item"><span>Relaxation Packages | </span></div>
                <div class="item"><span>Full-Body Massage | </span></div>
                <div class="item"><span>Massage Chair Sales | </span></div>
                <div class="item"><span>Wellness Therapy | </span></div>
                <div class="item"><span>Event Chair Hire | </span></div>
                <div class="item"><span>Relaxation Packages | </span></div>
                <div class="item"><span>Full-Body Massage | </span></div>
                <div class="item"><span>Massage Chair Sales | </span></div>
                </div>
                <div aria-hidden="true" class="marquee-group">
                <div class="item"><span>Full-Body Massage  | </span></div>
                <div class="item"><span>Massage Chair Sales | </span></div>
                <div class="item"><span>Wellness Therapy | </span></div>
                <div class="item"><span>Event Chair Hire | </span></div>
                <div class="item"><span>Relaxation Packages | </span></div>
                <div class="item"><span>Full-Body Massage | </span></div>
                <div class="item"><span>Massage Chair Sales | </span></div>
                <div class="item"><span>Wellness Therapy | </span></div>
                <div class="item"><span>Event Chair Hire | </span></div>
                <div class="item"><span>Relaxation Packages | </span></div>
                <div class="item"><span>Full-Body Massage | </span></div>
                <div class="item"><span>Massage Chair Sales</span></div>
                </div>

            </div>
         </div>
      </div>
    
      <section class="download-area space overflow-hidden" data-bg-src="assets/img/bg/download-bg-1.png">
         <div class="container">
            <div class="row gy-5 align-items-center">
               <div class="col-xl-6">
                  <div class="download-img">
                     <div class="img1"><img src="{{asset('uploads/1423477305.jpg')}}" alt="img"></div>
                  </div>
               </div>
               <div class="col-xl-6">
                  <div class="ps-xl-4">
                     <div class="title-area mb-30 text-center text-xl-start pe-xl-5 me-xl-5">
                       
                        <h2 class="sec-title text-anime-style-3">You had <span class="fw-normal"> a long day?</span> We got you!!!</h2>
                        <p class="fs-18 pe-xl-5 wow fadeInUp">
                            WAWA Fitness Center takes pride in providing therapeutic and relaxing full body massage using high quality human touch massage chairs.<br><br> We also hire and supply high professional, high quality therapeutic and luxury massage chairs and products. Our massage chairs improve health and comfort based on the combined theory of natural healing, physical therapy and acupressure by adjusting the body through a natural formula of a healthy posture which stimulates blood circulation, relieves stress and relaxes muscles, nerves and joints.
                        </p>
                     </div>
                     <div class="btn-group download-btn mt-50 justify-content-center justify-content-xl-start wow fadeInUp" data-wow-delay=".2s"><a href="https://www.apple.com/app-store/"><img src="assets/img/icon/apple.svg" alt=""></a><a href="https://play.google.com/store/"><img src="assets/img/icon/google-play.svg" alt=""></a></div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <div class="overflow-hidden overflow-hidden">
         <div class="container">
            <div class="slider-area">
               <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"476":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"5"}}}'>
                  <div class="swiper-wrapper" style="visibility: hidden">
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                     <div class="swiper-slide">
                        <div class="brand-item"><a href="#"><img class="original" src="{{asset('theme/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo"> <img class="gray" src="{{asset('theme/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
  
      <section class="overflow-hidden space overflow-hidden" id="blog-sec">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-7">
                  <div class="title-area text-center">
                     <span class="sub-title text-anime-style-2" style="font-weight: 700;">news & blog</span>
                     <h2 class="sec-title text-anime-style-3"><span class="fw-normal">Wawa</span> Latest Articles & Blog</h2>
                     {{-- <p class="fs-18 wow fadeInUp">Demergo victus aveho. Amor caries comptus ulterius considero. Abbas trucido aegrotatio patria contego celo. Color vergo ante tres amplitudo numquam cultellus aurum thalassinus.</p> --}}
                  </div>
               </div>
            </div>
            <div class="slider-area">
               <div class="swiper th-slider has-shadow" id="blogSlider" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                  <div class="swiper-wrapper">
                    <?php
                       $Blogs = \App\Models\Blog::where('status', 1)->orderBy('created_at', 'desc')->take(6)->get();    
                    ?>
                    @foreach($Blogs as $blog)
                     <div class="swiper-slide">
                        <div class="blog-card wow fadeInUp">
                           <div class="box-img global-img">
                              <img style="height:300px; width:100%; object-fit:cover;" src="{{url('/')}}/uploads/{{ $blog->image }}" alt="blog image">
                           </div>
                           <div class="box-content">
                              <div class="blog-meta"><a href="{{ route('blogs.shows', $blog->slug) }}"><i class="fa-solid fa-user"></i>Erp Team {{ $blog->created_at->format('Y') }}</a> <a href="{{ route('blogs.shows', $blog->slug) }}"><i class="fa-solid fa-messages"></i>No Comment</a></div>
                              <h3 class="box-title"><a href="{{ route('blogs.shows', $blog->slug) }}">{{ $blog->title }}</a></h3>
                              <a href="{{ route('blogs.shows', $blog->slug) }}" class="line-btn">Read More <i class="fa-regular fa-arrow-right ms-2"></i></a>
                           </div>
                        </div>
                     </div>
                    @endforeach
                  </div>
               </div>
               <button data-slider-prev="#blogSlider" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#blogSlider" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
         </div>
      </section>
@endsection