@extends('front.master-category')

@section('content')
      <style>
        /* Basic CSS for the image arrangement */
        .image-gallery {
            display: flex;
            justify-content: space-around; /* Distributes items evenly with space around them */
            align-items: center; /* Vertically aligns items in the center */
            width: 100%; /* Take full width of its parent */
            padding: 10px 0; /* Add some vertical padding */
            box-sizing: border-box; /* Include padding in the element's total width and height */
            flex-wrap: wrap; /* Allow items to wrap to the next line on smaller screens */
        }

        .image-gallery img {
            max-width: 12%; /* Adjust based on how many images and desired spacing */
            height: auto; /* Maintain aspect ratio */
            /* border: 1px solid #ccc;  */
            margin: 5px; /* Optional: spacing between images */
            /* box-shadow: 0 2px 4px rgba(0,0,0,0.1);  */
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
         .image-gallery{
            display:none;
         }
            .image-gallery img {
                max-width: 20%; /* More images per row on tablets */
            }
        }

        @media (max-width: 480px) {
            .image-gallery img {
                max-width: 30%; /* Fewer images per row on mobile phones */
            }
        }
    </style>
     <div class="container">
         <div class="image-gallery">
            <img src="{{url('/')}}/uploads/chairs/1.png" alt="Massage Chair 1">
            <img src="{{url('/')}}/uploads/chairs/2.png" alt="Massage Chair 2">
            <img src="{{url('/')}}/uploads/chairs/3.png" alt="Massage Chair 3">
            <img src="{{url('/')}}/uploads/chairs/L50massage-chair.png" alt="Massage Chair 4">
            <img src="{{url('/')}}/uploads/chairs/4.png" alt="Massage Chair 5">
            <img src="{{url('/')}}/uploads/chairs/5.png" alt="Massage Chair 6">
            <img src="{{url('/')}}/uploads/chairs/6.png" alt="Massage Chair 7">
         </div>
     </div>
     <h1 class="breadcumb-title" style="display:none">{{$Category->name}}</h1>


    <div class="breadcumb-wrapper" data-bg-src="{{asset('uploads/bg-qbout.jpg')}}" style="padding:10px 0">
         <div class="container">
            <div class="breadcumb-content">
               <ul class="breadcumb-menu" style="margin:9px 0">
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
                         {!!html_entity_decode($Category->description)!!}
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
                        <div class="col-xl-4 col-md-6" style="margin-bottom:30px">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <?php
                                        $img = \App\Models\MassageChairImage::where('massage_chair_id', $chair->id)->first();
                                    ?>
                                    <img style="width:100%; height:390px; object-fit:cover;" src="{{ asset('uploads/' . $img->image_path) }}" alt="Product Image">
                                </div>
                                <div class="product-content">
                                    <?php $Category  = \App\Models\Category::where('id', $chair->category_id)->first(); ?>
                                    <h3 class="product-title text-center" style="min-height:90px;"><a href="{{route('massage-chairs-single', ['category' => $Category->slug, 'slug' => $chair->slug])}}">{{$chair->name}}</a></h3>
                                    
                                    <div class="btn-group justify-content-center">

                                    <a href="https://wa.me/254708666527?text=Hello, I found {{$chair->name}}, from your website, I would like to know more about it" class="th-btn btn-text">Request Quotation <i class="btn-text fa-light fa-arrow-right-long ms-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    {{--  --}}
                    {{$chairs}}
                    {{--  --}}
               </div>
            </div>
            
         </div>
      </section>
@endsection