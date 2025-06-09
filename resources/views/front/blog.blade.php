@extends('front.master-page')

@section('content')
     @foreach($Blog as $blog)
      <div class="breadcumb-wrapper" data-bg-src="{{asset('uploads/bg-qbout.jpg')}}">
         <div class="container">
            <div class="breadcumb-content">
               <h1 class="breadcumb-title">{{$blog->title}}</h1>
               <ul class="breadcumb-menu">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li>{{$blog->title}}</li>
               </ul>
            </div>
         </div>
      </div>
       <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
         <div class="container">
            <div class="row">
               <div class="col-xxl-8 col-lg-10" style="margin:0 auto">
                  <div class="th-blog blog-single">
                     <div class="blog-img global-img"><img src="{{url('/')}}/uploads/{{ $blog->image }}" alt="Blog Image"></div>
                     <div class="blog-content">
                        
                        <h2 class="blog-title">{{ $blog->title }}</h2>
                        <p class="blog-desc text-body">
                            {!!html_entity_decode($blog->description)!!}
                        </p>
                        <p class="blog-desc text-body">Hypertension, commonly known as high blood pressure, often develops without noticeable symptoms, making it a "silent killer." If left untreated, it can lead to serious health complications such as heart disease, stroke, and kidney failure.</p>
                        {{-- <blockquote>
                           <p>
                             {!!html_entity_decode($blog->meta)!!}
                           </p>

                        </blockquote> --}}
                           
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </section>

      @endforeach
    
@endsection