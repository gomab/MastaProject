<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('uploads/setting/'.$fav) }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('uploads/setting/'.$fav) }}" type="image/x-icon">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/assets/bootstrap.min.css') }}">

    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/css/assets/font-awesome.min.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/assets/animate.css') }}">

    <!-- Mean Menu -->
    <link rel="stylesheet" href="{{ asset('frontend/css/assets/meanmenu.min.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/css/assets/owl.carousel.min.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/assets/magnific-popup.css') }}">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/assets/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/assets/responsive.css') }}">

</head>
<body>
<!-- Pre-Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- End Pre-Loader -->
<div id="bac"></div>

<div id="main">
    <!-- Top Bar -->
    <section class="top-bar">
        <div class="container">
            <div class="bar-content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="bar-left">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><i class="fa fa-calendar-check-o"></i>Sunday, Sep 24, 2017</li>
                                <li class="list-inline-item"><i class="fa fa-cloud"></i>New York, 19°C</li>
                                <li class="list-inline-item"><a href="">Advertise</a></li>
                                <li class="list-inline-item"><a href="">Write Us</a></li>
                                <li class="list-inline-item"><a href="">About</a></li>
                                <li class="list-inline-item"><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bar-social text-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-rss"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-skype"></i></a></li>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#loginModal">Login</button>
                            </ul>
                        </div>

                        <div class="oth-news">
                            <div class="container">
                                <div class="row">
                                    <!-- Modal -->
                                    <div class="modal fade" id="loginModal" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>


                                                <div class="modal-body">
                                                    <div class="login-widget">
                                                        <h4>LOG IN</h4>
                                                        <form method="post">
                                                            <input type="text" name="name" placeholder="User Name" required>
                                                            <input type="password" name="password" placeholder="********" required>
                                                            <label><input type="checkbox" checked="">Remember Me</label>
                                                            <button type="submit"  value="submit">Log In</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Sign in</button>
                                                </div>
                                            </div>
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
    <!-- End Top Bar -->

    <!-- Logo Area -->
    <section class="logo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <a href=""><img src="{{ asset('uploads/setting/'.$logo) }}" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="searchbar text-right">
                        <form action="#">
                            <input placeholder="Search Here" type="text" required="">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo Area -->

    <!-- Menu Area -->
        @include('includes.menu')
    <!-- End Menu Area -->

    <!-- Mobile Menu -->
    <section class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <a href=""><img src="{{ asset('frontend/images/mobile-logo.png') }}" alt="" class="img-fluid"></a>
                            <a href=""><i class="fa fa-home"></i></a>
                            <ul>
                                <li class="list-inline-item"><a href="index.html">HOME</a></li>
                                <li class="list-inline-item"><a href="">PAGES</a>
                                    <ul class="list-unstyled">
                                        <li><a href="index.html">HOME</a></li>
                                        <li><a href="about.html">ABOUT</a></li>
                                        <li><a href="">CATAGORY</a>
                                            <ul>
                                                <li><a href="catagory-one.html">CATAGORY ONE</a></li>
                                                <li><a href="catagory-two.html">CATAGORY TWO</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">NEWS DETAILS</a>
                                            <ul>
                                                <li><a href="news-details-one.html">NEWS DETAILS ONE</a></li>
                                                <li><a href="news-details-two.html">NEWS DETAILS TWO</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">CONTACT</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="coming-soon.html">COMING_SOON</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="">WORLD</a></li>
                                <li class="list-inline-item"><a href="">HEALTH</a></li>
                                <li class="list-inline-item"><a href="">TECHNOLOGY</a></li>
                                <li class="list-inline-item"><a href="">POLITICS</a></li>
                                <li class="list-inline-item"><a href="">SPORTS</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mobile Menu -->

    <!-- Web Ticker -->
    <section class="top-news">
        <div class="container">
            <div class="news-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ticker d-flex justify-content-between">
                            <div class="news-head">
                                <span>BREAKING NEWS<i class="fa fa-caret-right"></i></span>
                            </div>
                            <ul id="webTicker">
                                <li><a href=""><i class="fa fa-dot-circle-o"></i>These sentences are selected from various online news.</a></li>
                                <li><a href=""><i class="fa fa-dot-circle-o"></i>This handout will help you understand how paragraphs are formed.</a></li>
                                <li><a href=""><i class="fa fa-dot-circle-o"></i>It is usually composed of several sentences that together develop one.</a></li>
                                <li><a href=""><i class="fa fa-dot-circle-o"></i>The purpose of this handout is to give some basic instruction.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Web Ticker -->

    <!-- Slider Area -->
    <section class="slider-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 padding-fix-r">
                    <div class="owl-carousel owl-slider">
                        <div class="slider-content">
                              <!--<img src="{{ asset('uploads/post/'.$first_post->featured) }}" alt="" class="img-fluid" style="width-max:auto; height: 477px">-->
                              <img src="{{ asset('uploads/post/'.$first_post->featured) }}" alt="" class="img-fluid">
                              <div class="slider-layer">
                                <p><a href="{{ route('post.single', ['category' => $first_post->category->slug, 'slug'=>$first_post->slug]) }}"><strong>{{ $first_post->title}}</strong></a></p>
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
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#loginModal">Login</button>
                        </ul>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="loginModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="login-widget">
                                        <h4>LOG IN</h4>
                                        <form method="post">
                                            <input type="text" name="name" placeholder="User Name" required>
                                            <input type="password" name="password" placeholder="********" required>
                                            <label><input type="checkbox" checked="">Remember Me</label>
                                            <button type="submit"  value="submit">Log In</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
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
    <footer>
        <div class="container">
            <div class="footer-c">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about">
                            <h4>A PROPOS</h4>
                            <p>{{ $settings->about }}</p>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-rss"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-youtube"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-link">
                            <h4>ADDITIONAL</h4>
                            <ul class="list-unstyled">
                                <li><a href=""><i class="fa fa-caret-right"></i>Become A Member</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i>Legal Agreement</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i>Privacy Policy</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i>Terms & Condition</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i>Work For Us</a></li>
                                <li><a href=""><i class="fa fa-caret-right"></i>Newsletter Signup</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-twitter">
                            <h4>TWITTER</h4>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="">https://bh.com/</a></li>
                                <li><i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="">https://bh.com/</a></li>
                                <li><i class="fa fa-twitter"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="">https://bh.com/</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2018 <a href="">{{ $settings->name }}</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer-text text-right">
                            <p>{{ $settings->name }}</p>
                        </div>
                        <div class="back-to-top">
                            <i class="fa fa-angle-double-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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