<!doctype html>
<html class="no-js" lang="zxx">
<head>
    @include('includes.head')
</head>
<body>
<!-- Pre-Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- End Pre-Loader -->

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

<!-- Page Heading -->
<section class="p-heading text-center">
    <div class="container">
        <div class="page-bg">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-content">
                        <h4></h4>
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="{{ route('welcome') }}">ACCUEIL</a></li>
                            <li class="list-inline-item"><i class="fa fa-long-arrow-right"></i><a href="{{ route('category.single', ['id' => $post->category->id]) }}">{{ $post->category->name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Page Heading -->

<!-- News Details -->
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="news-heading">
                    <h4>{{ $post->title }}</h4>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><i class="fa fa-user"></i><a href="">Admins</a></li>
                        <li class="list-inline-item"><i class="fa fa-calendar"></i> {{ $post->created_at->toFormattedDateString() }}</li>
                        <li class="list-inline-item"><i class="fa fa-comments"></i>(<a href="">13 Comments</a>)</li>
                    </ul>
                    <img src="{{ asset('uploads/post/'.$post->featured) }}" alt="" class="img-fluid">
                    <p> {!! $post->content !!}</p>
                </div>
                <div class="news-dsn">
                    <i class="fa fa-quote-right"></i>
                    <p>Test</p>
                    <h6>ANDRU JAMES</h6>
                </div>
                <div class="row">
                    <div class="col-lg-5 padding-fix-r">
                        <div class="news-box-img">
                            <img src="images/details-2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="news-box-txt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit tempora animi esse asperiores! Quibusdam facere eaque rem doloremque, iure velit nulla quo? Harum molestias officia magnam nam eius nisi illum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium perspiciatis asperiores ullam, tempora quae doloribus, voluptas iure laborum eveniet ipsa natus aspernatur.Sit tempora animi esse asperiores! Quibusdam facere eaque rem.</p>
                        </div>
                    </div>
                </div>
                <div class="news-btm-txt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet necessitatibus laudantium est delectus reprehenderit hic maxime, inventore repudiandae culpa quam? Ratione earum dolorum dolorem soluta aliquam possimus commodi numquam voluptatibus?</p>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="social-share">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="">Facebook</a></li>
                                <li class="list-inline-item"><a href="">Twitter</a></li>
                                <li class="list-inline-item"><a href="">Google +</a></li>
                                <li class="list-inline-item"><a href="">Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="news-tag text-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">TAGS :</li>

                                @foreach($post->tags as $tag)
                                    <li class="list-inline-item"><a href="">{{ $tag->tag }},</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="news-author">
                    <img src="images/author.jpg" alt="" class="img-fluid">
                    <h6>AUTHOR: <span>MD TAHMIDUR RAHMAN</span></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi doloribus unde molestias laborum delectus adipisci, eos repellat in debitis cum impedit numquam, architecto, facilis.</p>
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>

                <!-- Pagination -->


                <!-- End pagination -->

                <div class="news-comment">
                    <h4>COMMENTS <span>(03)</span></h4>
                    <div class="comment-box d-flex">
                        <div class="comment-img">
                            <img src="images/comment-1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="img-content">
                            <h6><a href="">DAVID BOJE</a> September 24, 2017 at 3:15pm</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate distinctio temporibus deleniti officiis recusandae eius explicabo, harum totam voluptate.</p>
                            <span><a href="">Reply</a></span>
                        </div>
                    </div>
                    <div class="comment-box comment-box2 d-flex">
                        <div class="comment-img">
                            <img src="images/comment-1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="img-content">
                            <h6><a href="">DAVID BOJE</a> September 24, 2017 at 3:15pm</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate distinctio temporibus deleniti officiis recusandae eius explicabo.</p>
                            <span><a href="">Reply</a></span>
                        </div>
                    </div>
                    <div class="comment-box d-flex">
                        <div class="comment-img">
                            <img src="images/comment-1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="img-content">
                            <h6><a href="">DAVID BOJE</a> September 24, 2017 at 3:15pm</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate distinctio temporibus deleniti officiis recusandae eius explicabo, harum totam voluptate.</p>
                            <span><a href="">Reply</a></span>
                        </div>
                    </div>
                </div>
                <div class="comment-reply">
                    <h4>LEAVE A COMMENT</h4>
                    <form id="ajax-contact" method="post" action="send.php">
                        <div class="row">
                            <div class="col-lg-6">
                                <p><input type="text" id="name" name="name" placeholder="NAME"></p>
                            </div>
                            <div class="col-lg-6">
                                <p><input type="text" id="email" name="email" placeholder="EMAIL"></p>
                            </div>
                            <div class="col-lg-12">
                                <p><textarea name="message" id="message" placeholder="COMMENT"></textarea></p>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit">SUBMIT</button>
                            </div>
                        </div>
                        <div id="form-messages"></div>
                    </form>
                </div>
                <div class="relate-news">
                    <h4>RELATED NEWS</h4>
                    <div class="owl-carousel relate-slider">
                        <div class="slider-content">
                            <img src="images/trending-2.jpg" alt="" class="img-fluid">
                            <div class="slider-layer">
                                <p><a href="">This handout will help you understand how paragraphs are formed.</a></p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">SPORTS</li>
                                    <li class="list-inline-item">September 24, 2017</li>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-content">
                            <img src="images/popular-6.jpg" alt="" class="img-fluid">
                            <div class="slider-layer">
                                <p><a href="">This handout will help you understand how paragraphs are formed.</a></p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">SPORTS</li>
                                    <li class="list-inline-item">September 24, 2017</li>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-content">
                            <img src="images/popular-2.jpg" alt="" class="img-fluid">
                            <div class="slider-layer">
                                <p><a href="">This handout will help you understand how paragraphs are formed.</a></p>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">SPORTS</li>
                                    <li class="list-inline-item">September 24, 2017</li>
                                </ul>
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
                <div class="add-widget">
                    <a href=""><img src="images/add-1.png" alt="" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News Details -->

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