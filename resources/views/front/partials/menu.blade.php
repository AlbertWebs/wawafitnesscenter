<ul>
                                    <li>
                                       <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li><a href="{{route('about-us')}}">About Us</a></li>
                                    <li><a href="{{route('massage-chairs-for-hire')}}">Massage Chairs for Hire</a></li>
                                    <li class="menu-item-has-children">
                                       <a href="#">Massage Chairs</a>
                                       <ul class="sub-menu">
                                          <?php 
                                                $Categories = \App\Models\Category::all();   
                                            ?>
                                          @foreach($Categories as $category)
                                             <li><a href="{{route('massage-chairs-categories', $category->slug)}}">{{ $category->name }}</a></li>
                                          @endforeach
                                       </ul>
                                    </li>
                                    <li><a href="{{route('health-benefits')}}">Health Benefits</a></li>
                                    <li><a href="{{route('about-us')}}">Careers</a></li>
                                   
                                     <li><a href="{{route('news')}}">News Updates</a></li>
                                      <li><a href="{{route('contact')}}">Contact Us</a></li>
                              </ul>