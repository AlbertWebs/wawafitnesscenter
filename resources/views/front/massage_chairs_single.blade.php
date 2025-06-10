@extends('front.master-product')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{asset('uploads/bg-qbout.jpg')}}">
        <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{$Chair->name}}</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/')}}">Shop</a></li>
                <li>{{$Chair->name}}</li>
            </ul>
        </div>
        </div>
    </div>
  <section class="product-details overflow-hidden space-top space-extra-bottom">
         <div class="container">
            <div class="row gx-60">
               <div class="col-lg-6">
                  <div class="productSlide">
                     <div class="swiper th-slider" id="productSlide1" data-slider-options='{"effect":"slide","spaceBetween":0,"thumbs":{"swiper":".product-grid2-thumb"},"breakpoints":{"0":{"autoHeight":true},"576":{"autoHeight":false}}}'>
                        <?php
                                        $img = \App\Models\MassageChairImage::where('massage_chair_id', $Chair->id)->get();
                                    ?>
                        <div class="swiper-wrapper">
                            @foreach($img as $im)
                           <div class="swiper-slide"><img style="max-height:600px; object-fit:contain" src="{{ asset('storage/' . $im->image_path) }}" alt=""></div>
                           @endforeach
                        </div>
                     </div>
                     <button data-slider-prev="#productSlide1" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#productSlide1" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
                     <div class="swiper th-slider product-grid2-thumb" data-slider-options='{"effect":"slide","slidesPerView":"3","spaceBetween":32,"breakpoints":{"0":{"slidesPerView":3},"576":{"slidesPerView":"3"}}}' data-slider-tab="#productSlide1">
                        <div class="swiper-wrapper">
                            @foreach($img as $im)
                           <div class="swiper-slide"><img src="{{ asset('storage/' . $im->image_path) }}" alt=""></div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 align-self-center">
                  <div class="product-about">
                     
                     <h4 class="product-title">{{$Chair->name}}</h4>
                   
                     <code>
                        <p class="text">
                           {!!html_entity_decode($Chair->meta)!!}
                        </p>
                     </code>
                  
                     <div class="actions">
                       <a href="https://wa.me/254708666527?text=Hello, I found {{$Chair->name}}, from your website, I would like to know more about it" class="th-btn btn-text">Request Quotation <i class="btn-text fa-light fa-arrow-right-long ms-2"></i></a>
                     </div>
                     
                  </div>
               </div>
            </div>
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
               {{-- <li class="nav-item" role="presentation"><a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Description</a></li> --}}
               {{-- <li class="nav-item" role="presentation"><a class="nav-link th-btn" id="additional-tab" data-bs-toggle="tab" href="#additional" role="tab" aria-controls="additional" aria-selected="false">Additional Information</a></li> --}}
               {{-- <li class="nav-item" role="presentation"><a class="nav-link th-btn active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Review (3)</a></li> --}}
            </ul>
             <h4 class="product-title">{{$Chair->name}}</h4>
            <div class="tab-content" id="productTabContent">
               <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  {{-- <h3 class="box-title">Description</h3> --}}
                  <p>
                          {!!html_entity_decode($Chair->description)!!}
                  </p>
               </div>
               <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                  <h3 class="box-title">Additional</h3>
                  <p>A device for measuring blood pressure is a medical instrument designed to monitor the pressure of blood flowing through the arteries. It consists of a cuff that is wrapped around the upper arm, a pump to inflate the cuff, and a pressure gauge that indicates the pressure of the blood flow. The device works by measuring the force of blood against the walls of the arteries during each heartbeat, known as systolic pressure, and the pressure between beats, known as diastolic pressure. Blood pressure is measured in millimeters of mercury (mmHg), and a healthy blood pressure reading is typically considered to be around 120/80 mmHg. There are various types of devices for measuring blood pressure, including manual devices that require a stethoscope to listen for the heartbeat, and automated devices that use sensors to detect the pulse and provide digital readings. Automated devices may be further classified as arm-cuff monitors or wrist-cuff monitors. Blood pressure monitors are an essential tool for individuals with hypertension, or high blood pressure, as well as for those with other cardiovascular conditions. They can also be used by healthcare professionals in clinical settings to monitor patients' blood pressure during routine check-ups or when assessing symptoms. When selecting a blood pressure monitoring device, it is important to consider factors such as accuracy, ease of use, and reliability. Many modern devices may also include additional features such as memory storage, Bluetooth connectivity, and mobile apps for tracking and analyzing blood pressure data over time.</p>
               </div>
             
            </div>
            <div class="space-extra-top mb-30">
               <div class="row justify-content-between align-items-center">
                  <div class="col-md-auto">
                     <span class="sub-title">shop products</span>
                     <h2 class="sec-title text-center"><span class="fw-normal">Your Might</span> Like This</h2>
                  </div>
               </div>
               <div class="swiper th-slider has-shadow" id="productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                  <div class="swiper-wrapper">
                    <?php
                       $Related = DB::table('massage_chairs')->where('category_id', $Chair->category_id)->get();  
                    ?> 
                    @foreach($Related as $rel)
                    <div class="swiper-slide">
                        <div class="th-product product-grid">
                           <div class="product-img">
                              <?php
                                        $img = \App\Models\MassageChairImage::where('massage_chair_id', $rel->id)->first();
                                    ?>
                                    <img style="width:100%; height:430px; object-fit: cover ;" src="{{ asset('storage/' . $img->image_path) }}" alt="Product Image">
                              {{-- <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a> <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a> <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a></div> --}}
                           </div>
                           <div class="product-content">
                                <h3 class="product-title text-center" style="min-height:90px;"><a href="#">{{$rel->name}}</a></h3>
                                
                                <div class="btn-group justify-content-center">
                                <?php $Category  = \App\Models\Category::where('id', $rel->category_id)->first(); ?>
                                <a href="{{route('massage-chairs-single', ['category' => $Category->slug, 'slug' => $rel->slug])}}" class="th-btn btn-text">Request Quotation <i class="btn-text fa-light fa-arrow-right-long ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <div class="d-block d-md-none mt-40 text-center">
                  <div class="icon-box"><button data-slider-prev="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button></div>
               </div>
            </div>
         </div>
      </section>
@endsection