<!doctype html>
<html class="no-js" lang="zxx">
<head>
    @include('includes.head')
</head>
<body>
<!-- Pre-Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- End Pre-Loader -->
<div id="bac"></div>

<div id="main">
    <!-- Top Bar -->
        @include('includes.sidebar')
    <!-- End Top Bar -->

    <!-- Logo Area -->
        @include('includes.header')
    <!-- End Logo Area -->

    <!-- Menu Area -->
        @include('includes.menu')
    <!-- End Menu Area -->

    <!-- Mobile Menu -->
        @include('includes.mobilemenu')
    <!-- End Mobile Menu -->

    <!-- Web Ticker -->
        @include('includes.tinker')
    <!-- End Web Ticker -->

    <!-- Slider Area -->
        @include('includes.slider')
    <!-- End Slider Area -->

    <!-- All News -->
    <section class="allnews">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="latest-top">
                        <h4>MUSIQUE</h4>
                    </div>
                    <div class="owl-carousel latest-slider">
                        <div class="latest-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="latest-content">
                                        <img src="{{ asset('uploads/post/'.$first_music->featured) }}" alt="" class="img-fluid">
                                        <h6><a href="">These sentences are selected from various online news.</a></h6>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">{{ $first_music->category->name }}</li>
                                            <li class="list-inline-item">September 24, 2017</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Ex tenetur, quasi, provident animi magni voluptas fugit quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    @foreach($music->posts()->orderBy('created_at', 'desc')->skip(1)->take(5)->get() as $post)
                                        <div class="slider-content">
                                            <div class="slider-img">
                                                <a href=""><img src="{{ asset('uploads/post/'.$post->featured) }}" alt="" class="img-responsive" width="130px" height="70px"></a>
                                            </div>
                                            <div class="img-content">
                                                <p><a href="">{{ $post->title }}</a></p>
                                                <span>{{ $post->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="latest-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="latest-content">
                                        <img src="images/latest-2.jpg" alt="" class="img-fluid">
                                        <h6><a href="">These sentences are selected from various online news.</a></h6>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item">COMPUTER</li>
                                            <li class="list-inline-item">September 24, 2017</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque labore, quam voluptatibus ipsum. Ex tenetur, quasi, provident animi magni voluptas fugit quae ad........</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/latest-7.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/latest-5.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/latest-6.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/latest-3.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news.</a></p>
                                            <span>September 24, 2017</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-top">
                        <h4>POPULAR NEWS</h4>
                    </div>
                    <div class="owl-carousel popular-slider">
                        <div class="popular-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-1.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-2.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FAMILY</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-3.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">FOOD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-4.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">WORLD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-5.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">LIFESTYLE</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-6.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">WORLD</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popular-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-3.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-1.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-4.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-6.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-2.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="slider-content">
                                        <div class="slider-img">
                                            <a href=""><img src="images/popular-5.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="img-content">
                                            <p><a href="">These sentences are selected from various online news....</a></p>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item">SPORTS</li>
                                                <li class="list-inline-item">September 24, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="follow-widget">
                        <h4>FOLLOW US</h4>
                        <ul class="list-unstyled clearfix">
                            <li>
                                <a href="">
                                    <i class="fa fa-facebook"></i>
                                    <p><span>44,410</span>fans</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-twitter"></i>
                                    <p><span>31,219</span>subscriber</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-rss"></i>
                                    <p><span>11,209</span>subscriber</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-linkedin"></i>
                                    <p><span>19,323</span>follower</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-google-plus"></i>
                                    <p><span>29,559</span>follower</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-youtube"></i>
                                    <p><span>56,717</span>subscriber</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="add-widget">
                        <a href=""><img src="images/add-1.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="tab-widget">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#m-view" role="tab">Most Viewed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#comment" role="tab">Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#catagory" role="tab">Catagories</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="m-view" role="tabpanel">
                                <div class="m-view-content">
                                    <div class="m-view-img">
                                        <a href=""><img src="images/latest-5.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-view-content">
                                    <div class="m-view-img">
                                        <a href=""><img src="images/latest-6.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-view-content">
                                    <div class="m-view-img">
                                        <a href=""><img src="images/latest-4.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <ul class="list-unstyled list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="comment" role="tabpanel">
                                <div class="comment-content">
                                    <div class="comment-img">
                                        <a href=""><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href=""><span>Jamy : </span>These sentences are selected from various online news....</a></p>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-img">
                                        <a href=""><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href=""><span>Jamy : </span>These sentences are selected from various online news....</a></p>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-img">
                                        <a href=""><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href=""><span>Jamy : </span>These sentences are selected from various online news....</a></p>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-img">
                                        <a href=""><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href=""><span>Jamy : </span>These sentences are selected from various online news....</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="catagory" role="tabpanel">
                                <div class="catagory-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><a href="">Business <span>19</span></a></li>
                                                <li><a href="">World <span>21</span></a></li>
                                                <li><a href="">Tech <span>23</span></a></li>
                                                <li><a href="">Politics <span>27</span></a></li>
                                                <li><a href="">Sports <span>11</span></a></li>
                                                <li><a href="">Entertainment <span>19</span></a></li>
                                                <li><a href="">Lifestyle <span>21</span></a></li>
                                                <li><a href="">Fashion <span>21</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><a href="">Animal <span>23</span></a></li>
                                                <li><a href="">Politics <span>27</span></a></li>
                                                <li><a href="">Health <span>11</span></a></li>
                                                <li><a href="">National <span>19</span></a></li>
                                                <li><a href="">Culture <span>21</span></a></li>
                                                <li><a href="">Music <span>23</span></a></li>
                                                <li><a href="">Food <span>27</span></a></li>
                                                <li><a href="">Travel <span>11</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End All News -->

    <!-- Latest Videos -->
    <section class="videos">
        <div class="container">
            <div class="vodeo-c">
                <div class="row">
                    <div class="col-md-12">
                        <div class="video-top">
                            <h4>LATEST VIDEOS</h4>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="video-content text-center">
                            <a href="https://www.youtube.com/watch?v=uXFUl0KcIkA" id="video-btn"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-12">
                        <div class="video-list">
                            <div class="list-content">
                                <img src="images/latest-4.jpg" alt="" class="img-fluid">
                                <p><a href="">These sentences are selected from various online news.</a></p>
                            </div>
                            <div class="list-content">
                                <img src="images/latest-5.jpg" alt="" class="img-fluid">
                                <p><a href="">These sentences are selected from various online news.</a></p>
                            </div>
                            <div class="list-content">
                                <img src="images/latest-7.jpg" alt="" class="img-fluid">
                                <p><a href="">These sentences are selected from various online news.</a></p>
                            </div>
                            <div class="list-content">
                                <img src="images/latest-6.jpg" alt="" class="img-fluid">
                                <p><a href="">These sentences are selected from various online news.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Videos -->

    <!-- Other News -->
    <section class="oth-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending-top">
                        <h4>TRENDING NEWS</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="trending-content">
                                <img src="images/trending-1.jpg" alt="" class="img-fluid">
                                <div class="trending-layer">
                                    <p><a href="">This handout will help you understand how paragraphs are formed.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">LIFESTYLE</li>
                                        <li class="list-inline-item">September 24, 2017</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="trending-content">
                                <img src="images/trending-2.jpg" alt="" class="img-fluid">
                                <div class="trending-layer">
                                    <p><a href="">This handout will help you understand how paragraphs are formed.</a></p>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">TECHNOLOGY</li>
                                        <li class="list-inline-item">September 24, 2017</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="trending-s">
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="images/latest-4.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="images/latest-5.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="images/latest-6.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="trending-s">
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="images/latest-3.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="images/latest-7.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                                <div class="trending-s-content">
                                    <div class="trending-img">
                                        <a href=""><img src="images/latest-4.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="img-content">
                                        <p><a href="">These sentences are selected from various online news.</a></p>
                                        <span>September 24, 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more-top">
                        <h4>MORE NEWS</h4>
                    </div>
                    <div class="more-content">
                        <div class="more-img">
                            <a href=""><img src="images/more-1.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="img-content">
                            <h6><a href="">It is usually composed of several sentences that together develop one.</a></h6>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">FAMILY</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi debitis suscipit nesciunt nihil deleniti dolorum reiciendis aspernatur recusandae in, dolore quod pariatur......</p>
                        </div>
                    </div>
                    <div class="more-content">
                        <div class="more-img">
                            <a href=""><img src="images/more-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="img-content">
                            <h6><a href="">It is usually composed of several sentences that together develop one.</a></h6>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">LIFESTYLE</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi debitis suscipit nesciunt nihil deleniti dolorum reiciendis aspernatur recusandae in, dolore quod pariatur......</p>
                        </div>
                    </div>
                    <div class="more-content">
                        <div class="more-img">
                            <a href=""><img src="images/more-3.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="img-content">
                            <h6><a href="">It is usually composed of several sentences that together develop one.</a></h6>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">WORLD</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi debitis suscipit nesciunt nihil deleniti dolorum reiciendis aspernatur recusandae in, dolore quod pariatur......</p>
                        </div>
                    </div>
                    <div class="more-content">
                        <div class="more-img">
                            <a href=""><img src="images/more-4.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="img-content">
                            <h6><a href="">It is usually composed of several sentences that together develop one.</a></h6>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">TECHNOLOGY</li>
                                <li class="list-inline-item">September 24, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi debitis suscipit nesciunt nihil deleniti dolorum reiciendis aspernatur recusandae in, dolore quod pariatur......</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="login-widget">
                        <h4>LOG IN</h4>
                        <form method="post">
                            <input type="text" name="name" placeholder="User Name" required>
                            <input type="password" name="password" placeholder="********" required>
                            <label><input type="checkbox" checked="">Remember Me</label>
                            <button type="submit"  value="submit">Log In</button>
                        </form>
                    </div>
                    <div class="tag-widget">
                        <h4>TAG LIST</h4>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="">News</a></li>
                            <li class="list-inline-item"><a href="">Article</a></li>
                            <li class="list-inline-item"><a href="">Online</a></li>
                            <li class="list-inline-item"><a href="">Tags</a></li>
                            <li class="list-inline-item"><a href="">World</a></li>
                            <li class="list-inline-item"><a href="">Google</a></li>
                            <li class="list-inline-item"><a href="">Wordpress</a></li>
                            <li class="list-inline-item"><a href="">National</a></li>
                            <li class="list-inline-item"><a href="">Food</a></li>
                            <li class="list-inline-item"><a href="">Health</a></li>
                            <li class="list-inline-item"><a href="">News</a></li>
                            <li class="list-inline-item"><a href="">Article</a></li>
                            <li class="list-inline-item"><a href="">Online</a></li>
                            <li class="list-inline-item"><a href="">Tags</a></li>
                            <li class="list-inline-item"><a href="">World</a></li>
                            <li class="list-inline-item"><a href="">Google</a></li>
                            <li class="list-inline-item"><a href="">Wordpress</a></li>
                            <li class="list-inline-item"><a href="">National</a></li>
                        </ul>
                    </div>
                    <div class="add-widget">
                        <a href=""><img src="images/add-1.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="newsletter-widget">
                        <img src="images/apps.jpg" alt="" class="img-fluid">
                        <div class="widget-layer">
                            <p>Stay Updated With <strong>TenNews</strong></p>
                            <h4>ANYTIME ANYWHERE</h4>
                            <span>Available On</span>
                            <ul class="list-unstyled">
                                <li><a href=""><i class="fa fa-android"></i></a></li>
                                <li><a href=""><i class="fa fa-apple"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Other News -->

    <!-- Footer -->
        @include('includes.footer')
    <!-- End Footer -->
</div>

<!-- =========================================
JavaScript Files
========================================== -->

<!-- jQuery JS -->
<script src="{{ asset('frontend/js/assets/vendor/jquery-1.12.4.min.js') }}"></script>

<!-- Poppers Js -->
<script src="{{ asset('frontend/js/assets/popper.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('frontend/js/assets/bootstrap.min.js') }}"></script>

<!-- Sticky Js -->
<script src="{{ asset('frontend/js/assets/jquery.sticky.js') }}"></script>

<!-- WOW JS -->
<script src="{{ asset('frontend/js/assets/wow.min.js') }}"></script>

<!-- Smooth Scroll -->
<script src="{{ asset('frontend/js/assets/smooth-scroll.js') }}"></script>

<!-- Mean Menu -->
<script src="{{ asset('frontend/js/assets/jquery.meanmenu.min.js') }}"></script>

<!-- News Ticker -->
<script src="{{ asset('frontend/js/assets/jquery.newsticker.min.js') }}"></script>

<!-- Owl Carousel -->
<script src="{{ asset('frontend/js/assets/owl.carousel.min.js') }}"></script>

<!-- Magnific Popup -->
<script src="{{ asset('frontend/js/assets/jquery.magnific-popup.min.js') }}"></script>

<!-- Syotimer -->
<script src="{{ asset('frontend/js/assets/jquery.syotimer.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('frontend/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>

</body>
</html>