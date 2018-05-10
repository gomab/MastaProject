<section class="slider-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 padding-fix-r">
                <div class="owl-carousel owl-slider">
                    <div class="slider-content">
                    <!--<img src="{{ asset('uploads/post/'.$first_post->featured) }}" alt="" class="img-fluid" style="width-max:auto; height: 477px">-->
                        <img src="{{ asset('uploads/post/'.$first_post->featured) }}" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <p><a href="#"><strong>{{ $first_post->title}}</strong></a></p>
                            <p><a href="">{{ substr($first_post->content, 0, 180) }}...</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">{{ $first_post->category->name }}</li>
                                <li class="list-inline-item"> {{ $first_post->created_at->diffForHumans() }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="slider-content">
                        <img src="{{ asset('uploads/post/'.$second_post->featured) }}" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <p><a href="#"><strong>{{ $second_post->title}}</strong></a></p>
                            <p><a href="">{{ substr($second_post->content, 0, 180) }}...</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">{{ $second_post->category->name }}</li>
                                <li class="list-inline-item"> {{ $second_post->created_at->diffForHumans() }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="slider-content">
                        <img src="{{ asset('uploads/post/'.$third_post->featured) }}" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <p><a href="#"><strong>{{ $third_post->title}}</strong></a></p>
                            <p><a href="">{{ substr($third_post->content, 0, 180) }}...</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">{{ $third_post->category->name }}</li>
                                <li class="list-inline-item"> {{ $third_post->created_at->diffForHumans() }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="slider-content">
                        <img src="{{ asset('frontend/images/slider-2.jpg') }}" alt="{{ $first_post->title }}" class="img-fluid">
                        <div class="slider-layer">
                            <p><a href="">The purpose of this handout is to give some basic instruction. It is usually composed of several sentences that together develop one.</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">LIFE STYLE</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <img src="{{ asset('frontend/images/slider-3.jpg') }}" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <p><a href="">It is usually composed of several sentences that together develop one. It is usually composed of several sentences that together develop one.</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">FOOD</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 slider-fix">
            <!--<div class="slider-sidebar sidebar-o">
                        <img src="{{ asset('frontend/images/tech.jpg') }}" alt="" class="img-fluid">
                        <div class="sidebar-layer">
                            <p><a href="">It is usually composed of several sentences that together develop one.</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">TECHNOLOGY</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                        </div>
                     </div>-->
                <div class="owl-carousel owl-slider">
                    <div class="slider-content">
                        <img src="{{ asset('uploads/post/'.$first_slider->featured) }}" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <p><a href="#">{{ $first_slider->title}}</a></p>
                        <!--<p><a href="">{{ substr($first_slider->content, 0, 50) }}...</a></p>-->
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">{{ $first_slider->category->name }}</li>
                                <li class="list-inline-item"> {{ $first_slider->created_at->diffForHumans() }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <img src="{{ asset('frontend/images/health.jpg') }}" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <p><a href="">{{ $first_post->title}}</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">{{ $first_post->category->name }}</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <img src="{{ asset('frontend/images/slider-2.jpg') }}" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <p><a href="">The purpose of this handout is to give some basic instruction. It is usually composed of several sentences that together develop one.</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">LIFE STYLE</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <img src="{{ asset('frontend/images/slider-3.jpg') }}" alt="" class="img-fluid">
                        <div class="slider-layer">
                            <p><a href="">It is usually composed of several sentences that together develop one. It is usually composed of several sentences that together develop one.</a></p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">FOOD</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="slider-sidebar">
                    <img src="{{ asset('frontend/images/health.jpg') }}" alt="" class="img-fluid">
                    <div class="sidebar-layer">
                        <p><a href="">These sentences are selected from various online news.</a></p>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">HEALTH</li>
                            <li class="list-inline-item">September 24, 2017</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>