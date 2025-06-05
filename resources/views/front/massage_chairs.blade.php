@extends('front.master-page')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{asset('uploads/bg-qbout.jpg')}}">
         <div class="container">
            <div class="breadcumb-content">
               <h1 class="breadcumb-title">{{$Category->name}}</h1>
               <ul class="breadcumb-menu">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('/')}}">Shop</a></li>
                  <li>{{$Category->name}}</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="container space-top">
            <div class="row">
               <div class="col-lg-12">
                  <div class="title-area">
                    <h2 class="sec-title text-anime-style-3">Proudly Brought to you by <span class="fw-normal">Wawa Fitness Center</span></h2>
                     <p class="fs-18 wow fadeInUp" style="font-size: 22px !important; font-weight: 500; color: #000; line-height: 1.3;">
                        {{$Category->description}}
                     </p>
                    </div>
               </div>
            </div>
      </div>
      <section class="th-blog-wrapper space-top space-extra-bottom">
         <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-lg-3">
                    <aside class="sidebar-area style2">
                   
                     <div class="widget">
                        <h3 class="widget_title" style="text-align: center">Product Categories</h3>
                        <hr>
                        <div class="recent-post-wrap">
                           <?php
                              $Category = \App\Models\Category::all();
                            ?>
                           @foreach($Category as $cat)
                           <div class="recent-post feature-cards th-ani">
                              <div class="media-body">
                               
                                 <h4 class="post-title">
                                    <a class="text-inherit" href="{{route('massage-chairs-categories', $cat->slug)}}">{{$cat->name}}</a>
                                </h4>
                              </div>
                           </div>
                           @endforeach
                           
                           
                        </div>
                     </div>
                     <div class="widget widget_quote">
                        <h3 class="widget_title">Get Free Consultation</h3>
                        <form action="https://html.themeholy.com/medova/demo/mail.php" method="POST" class="widget-form">
                           <div class="form-group"><input type="text" class="form-control" name="name" id="name" placeholder="Full Name"> <i class="fal fa-user"></i></div>
                           <div class="form-group"><input type="email" class="form-control" name="email" id="email" placeholder="Your Email"> <i class="fal fa-envelope"></i></div>
                           <div class="form-group"><input type="tel" class="form-control" name="phone" id="phone2" placeholder="Your Phone"> <i class="fal fa-phone"></i></div>
                           <div class="form-group"><textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea> <i class="fal fa-comment"></i></div>
                           <div class="form-btn"><button class="th-btn">Send Us</button></div>
                           <p class="form-messages mb-0 mt-3"></p>
                        </form>
                     </div>
                     
                  </aside>
                </div>
               <div class="col-xxl-9 col-lg-9">
                    <div class="row">
                        @foreach($chairs as $chair)
                        <div class="col-xl-4 col-md-6">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <?php
                                        $img = \App\Models\MassageChairImage::where('massage_chair_id', $chair->id)->first();
                                    ?>
                                    <img style="width:100%; height:390px; object-fit:cover;" src="{{ asset('storage/' . $img->image_path) }}" alt="Product Image">
                                </div>
                                <div class="product-content">
                                    <h3 class="product-title text-center" style="min-height:90px;"><a href="#">{{$chair->name}}</a></h3>
                                    
                                    <div class="btn-group justify-content-center">

                                    <a href="{{route('massage-chairs-single', ['category' => $chair->category->slug, 'slug' => $chair->slug])}}" class="th-btn btn-text">Request Quotation <i class="btn-text fa-light fa-arrow-right-long ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
               </div>
            </div>
            
         </div>
      </section>
@endsection