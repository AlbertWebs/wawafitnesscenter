@extends('front.master-page')

@section('content')
      <div class="breadcumb-wrapper" data-bg-src="{{asset('uploads/bg-qbout.jpg')}}">
         <div class="container">
            <div class="breadcumb-content">
               <h1 class="breadcumb-title">Contact Us</h1>
               <ul class="breadcumb-menu">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li>Contact Us</li>
               </ul>
            </div>
         </div>
      </div>
     <div class="space overflow-hidden" id="contact-sec">
         <div class="container">
            <div class="row gy-4">
               <div class="col-xl-4">
                  <div class="contact-media-wrap">
                     <div class="contact-media">
                        <div class="icon-btn"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="media-body">
                           <h5 class="box-title">Our Current Location</h5>
                           <p class="box-text">JKIA terminal 1B International Departures, Gate II</p>
                        </div>
                     </div>
                     <div class="contact-media">
                        <div class="icon-btn"><i class="fa-light fa-phone"></i></div>
                        <div class="media-body">
                           <h5 class="box-title">Phone Number</h5>
                           <p class="box-text"><a href="tel:+254 708 666 527">+254 708 666 527</a> <a href="tel:+00123888000222">+254 708 666 527</a></p>
                        </div>
                     </div>
                     <div class="contact-media">
                        <div class="icon-btn"><i class="fa-solid fa-envelope"></i></div>
                        <div class="media-body">
                           <h5 class="box-title">Email Address</h5>
                           <a href="mailto:info@wawafitnesscenter.co.ke">info@wawafitnesscenter.co.ke</a> <a href="mailto:info@wawafitnesscenter.co.ke">info@wawafitnesscenter.co.ke</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-8">
                  <form action="{{route('contact.send')}}" method="POST" class="contact-form ajax-contact">
                     @csrf
                     <h3 class="h4 mb-30 mt-n3">Do you have questions? Contact Us</h3>
                     <div class="row">
                        <div class="form-group col-md-6"><input type="text" class="form-control" name="name" id="name" placeholder="Name"> <i class="fal fa-user"></i></div>
                        <div class="form-group col-md-6"><input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i></div>
                        <div class="form-group col-12"><input type="email" class="form-control" name="email" id="email" placeholder="e-mail address*"> <i class="fal fa-envelope"></i></div>
                        <div class="form-group col-12">
                           <select name="subject" id="subject" class="form-select nice-select">
                              <?php
                                       $categories = \App\Models\Category::all();
                               ?>
                              <option value="" disabled="disabled" selected="selected" hidden>Select</option>
                              @foreach($categories as $cat)
                              <option value="{{$cat->name}}">{{$cat->name}}</option>
                              @endforeach
                            
                           </select>
                        </div>
                        <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea> <i class="fal fa-comment"></i></div>
                        <div class="form-btn mt-20 col-12"><button class="th-btn">Send Message</button></div>
                     </div>
                     <p class="form-messages mb-0 mt-3"></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="">
         <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9829342884304!2d36.8302636!3d-1.1724984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f22b4316f60d9%3A0x4da71135e437ed3c!2sWAWA%20Fitness%20Center!5e0!3m2!1sen!2ske!4v1749452626379!5m2!1sen!2ske" allowfullscreen="" loading="lazy"></iframe>
            <div class="contact-icon"><img src="assets/img/icon/location-dot.svg" alt=""></div>
         </div>
      </div>
    
@endsection