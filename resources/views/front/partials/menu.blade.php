<ul>
                                    <li>
                                       <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li><a href="{{route('about-us')}}">About Us</a></li>
                                    <li class="menu-item-has-children">
                                       <a href="#">Masserge Chairs</a>
                                       <ul class="sub-menu">
                                          <?php 
                                                $Categories = \App\Models\Category::all();   
                                            ?>
                                          @foreach($Categories as $category)
                                             <li><a href="{{route('massage-chairs-categories', $category->slug)}}">{{ $category->name }}</a></li>
                                          @endforeach
                                       </ul>
                                    </li>
                                    <li><a href="{{route('about-us')}}">Health Benefits</a></li>
                                    <li><a href="{{route('about-us')}}">Careers</a></li>
                                   
                                     <li><a href="{{route('about-us')}}">News Updates</a></li>
                                      <li><a href="{{route('about-us')}}">Contact Us</a></li>
                              </ul>