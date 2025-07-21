@extends('front.master-airport')

@section('content')
        @include('front.partials.chairs')
     <h1 class="breadcumb-title" style="display:none">Wawa Fitness Center – Wellness at the Airport</h1>


    <div class="breadcumb-wrapper" data-bg-src="{{asset('uploads/bg-qbout.jpg')}}" style="padding:10px 0">
         <div class="container">
            <div class="breadcumb-content">
               <ul class="breadcumb-menu" style="margin:9px 0">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/')}}">Shop</a></li>
                  <li>Wawa Fitness Center – Wellness at the Airport</li>
               </ul>
            </div>
         </div>
      </div>
   

      {{--  --}}
      <div class="about-area overflow-hidden overflow-hidden space" id="about-sec">
         <div class="container">
            <div class="row gy-4">
               <div class="col-xxl-6">
                  <div class="img-box4 me-xl-3">
                     <div class="img1 reveal"><img src="{{asset('uploads/airport/20250531_21d4012.jpg')}}" alt="About"></div>
                     <div class="img1 reveal"><img src="{{asset('uploads/airport/202505aa31_213955.jpg')}}" alt="About"></div>
                    
                  </div>
               </div>
               <div class="col-xxl-6 mb-30 mb-xl-0">
                  <div class="title-area">
                     <h2 class="sec-title text-anime-style-3"><span class="fw-normal">Wawa Fitness Center</span> Wellness at the Airport</h2>
                     <p class="fs-18 mb-30 pe-xl-5 wow fadeInUp">
                        Welcome to Wawa Fitness Center, your wellness haven at Jomo Kenyatta International Airport (JKIA). Whether you're a frequent flyer, airport staff, or a traveler on a layover, we offer a convenient and revitalizing space to help you relax, recharge, and stay on top of your wellness goals—even while in transit.
                        <br><br>
                        Our unique location at Terminal 1B, Gate 11 allows you to take a meaningful wellness break right within the airport. We understand the stresses of travel, and that's why Wawa is designed to give your body and mind the relief it needs through our range of therapeutic services.

                        <h6>What We Offer</h6>
                        Full-body massage chairs: Experience the ultimate in automated relaxation. From a quick 5-minute session to a full 30-minute deep massage, our chairs are perfect for relieving travel fatigue.

                        <br><br>
                        Affordable wellness packages for both travelers and airport staff.<br><br>

                        Soothing ambiance with calming music, aromatherapy diffusers, and wireless charging stations for your convenience.<br><br>

                        Carefully curated wellness products including portable massagers and recovery tools available for sale.<br>

                     </p>
                  </div>
               
               </div>
            </div>
         </div>
      </div>
      {{--  --}}

       <section class="position-relative overflow-hidden space" data-bg-src="{{asset('theme/assets/img/bg/service_bg_1.jpg')}}" id="service-sec">
         <div class="container">
           
            <div class="service-list-area">
               <div class="row gy-3">
                  <div class="col-12">
                     <div class="service-grid2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-content">
                           <div class="box-wrapp">
                              <div class="box-icon"><img style="width:100px" src="{{asset('theme/assets/img/icon/L50massage-chair.png')}}" alt="Icon"></div>
                              <h3 class="box-title"><a href="{{route('contact')}}">Affordable full-body massage in 10 to 30-minute sessions.</a></h3>
                              <p class="box-text">Enjoy affordable full-body massage sessions tailored to your schedule, with flexible durations ranging from 10 to 30 minutes for ultimate relaxation and value.</p>
                           </div>
                           <div class="box-right-wrapp">
                              <div class="box-img global-img"><img style="width:300px; height:100%; object-fit:cover" src="{{asset('uploads/airport/20250531_21d4012.jpg')}}" alt=""></div>
                              <div class="service-btn"><a href="tel:+254 708 666 527" class="th-btn black-border"> Call Us<i class="fa-regular fa-arrow-right ms-2"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                 
               </div>
               {{-- <div class="text-center mt-60"><a href="{{route('health-benefits')}}" class="th-btn style2">Health Benefits<i class="fa-light fa-arrow-right-long ms-2"></i></a></div> --}}
            </div>
         </div>
      </section>
      {{--  --}}
        <div class="overflow-hidden space">
         <div class="container">
            <div class="title-area text-center mb-40">
               <span class="sub-title text-anime-style-2">Why Choose Wawa at the Airport?</span>
               <h2 class="sec-title text-anime-style-3"><strong>Relax • Relief • Recover</strong> </h2>
               <p class="sec-text wow fadeInUp">
                
                  Wawa Fitness Center at JKIA offers a convenient and calming space to relax, recharge, and relieve travel stress. Located at Terminal 1B, Gate 11, it’s the perfect wellness stop for travelers and staff on the move.

               </p>
            </div>
            <div class="row gy-4">
               <div class="col-xxl-8" style="margin: 0 auto">
                  <div class="accordion-area style2 accordion" id="faqAccordion2">
                     <div class="accordion-card style2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="accordion-header" id="collapse-item-6"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">1. Quick and effective relief from back pain, tension, and stress.</button></div>
                        <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion2">
                           <div class="accordion-body">
                              <p class="faq-text">
                                At Wawa Fitness Center, we understand how taxing travel can be on your body. Long flights, heavy luggage, and hours of sitting often lead to back pain and muscle tension. That’s why our wellness lounge at JKIA offers therapeutic massage chairs and services designed to target stress points quickly and effectively.

                                Whether you're in between flights or wrapping up a long shift, our solutions provide immediate relief. With just a few minutes in our advanced massage chairs, you’ll feel relaxed, refreshed, and ready to continue your journey—pain-free and stress-free.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-card style2 active wow fadeInUp" data-wow-delay=".4s">
                        <div class="accordion-header" id="collapse-item-7"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="true" aria-controls="collapse-7">2. No appointment needed. Just walk in and enjoy.</button></div>
                        <div id="collapse-7" class="accordion-collapse collapse show" aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion2">
                           <div class="accordion-body">
                              <p class="faq-text">
                                At Wawa Fitness Center, wellness is made simple and accessible. You don’t need to schedule ahead—just walk into our lounge at JKIA Terminal 1B, Gate 11 and enjoy instant access to our relaxing massage chairs and wellness services. Whether you have a few minutes or an hour, we’re here to help you unwind on your own schedule.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-card style2 wow fadeInUp" data-wow-delay=".6s">
                        <div class="accordion-header" id="collapse-item-8"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">3. Perfect for layovers, flight delays, or pre-boarding relaxation.</button></div>
                        <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="collapse-item-8" data-bs-parent="#faqAccordion2">
                           <div class="accordion-body">
                              <p class="faq-text">
                               
                                 Wawa Fitness Center is your go-to wellness spot during travel downtime. Whether you're facing a long layover, an unexpected flight delay, or simply want to relax before boarding, our airport lounge offers the ideal escape. Recharge your body and mind right at Terminal 1B, Gate 11—no hassle, just comfort.

                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-card style2 wow fadeInUp" data-wow-delay=".8s">
                        <div class="accordion-header" id="collapse-item-9"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9" aria-expanded="false" aria-controls="collapse-9">4. Open 24/7, serving you day and night.</button></div>
                        <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="collapse-item-9" data-bs-parent="#faqAccordion2">
                           <div class="accordion-body">
                              <p class="faq-text">
                               
                                  No matter what time your flight lands or departs, Wawa Fitness Center is always open. Our 24/7 wellness lounge at JKIA ensures you can enjoy relaxation and relief any hour of the day or night—because your comfort shouldn’t be limited by the clock.

                              </p>
                           </div>
                        </div>
                     </div>
                    
                  </div>
               </div>
               {{-- <div class="col-xxl-7">
                  <div class="stomatology-box wow fadeInRight">
                     <div class="stomatology-slide-image">
                        <div class="img background-img" data-bg-src="assets/img/normal/stomatology_1.jpg"></div>
                        <div class="img foreground-img" data-bg-src="assets/img/normal/stomatology_2.jpg"></div>
                        <input type="range" min="1" max="100" value="50" class="slider" name="slider" id="slider">
                        <div class="slider-button"></div>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
         <div class="shape-mockup faq-shape d-none d-xxl-block" data-top="6%" data-left="3%"><img src="{{asset('uploads/airport/202505aa31_213955.jpg')}}" alt=""></div>
         <div class="shape-mockup d-none d-xxl-block" data-top="6%" data-right="0%"><img src="{{asset('theme/assets/img/shape/element-1.png')}}" alt=""></div>
      </div>
    
@endsection