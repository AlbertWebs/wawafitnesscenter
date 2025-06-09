@extends('front.master-page')

@section('content')
      <div class="breadcumb-wrapper" data-bg-src="{{asset('uploads/bg-qbout.jpg')}}">
         <div class="container">
            <div class="breadcumb-content">
               <h1 class="breadcumb-title">News Updates</h1>
               <ul class="breadcumb-menu">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li>News Updates</li>
               </ul>
            </div>
         </div>
      </div>
     <section class="th-blog-wrapper space-top space-extra-bottom">
         <div class="container">
            <div class="row">
               
               @foreach($Blog as $blog)
               <div class="col-lg-6 col-xl-4">
                  <div class="th-blog blog-single has-post-thumbnail single-grid">
                     <div class="blog-img global-img"><a href="{{ route('blogs.show', $blog->slug) }}"><img style="height:300px; width:100%; object-fit:cover;" src="{{url('/')}}/uploads/{{ $blog->image }}" alt="blog image"></a></div>
                     <div class="blog-content">
                        <div class="blog-meta"><a class="author" href="blog.html"><i class="fa-solid fa-user"></i>Erp Team {{ $blog->created_at->format('Y') }}</a> </div>
                        <h2 class="box-title"><a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a></h2>
                        <a href="contact.html" class="line-btn">Read More <i class="fa-light fa-arrow-right-long ms-2"></i></a>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            
         </div>
      </section>
  @endsection