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
        						<h4>CATAGORIE</h4>
        						<ul class="list-unstyled list-inline">
        							<li class="list-inline-item"><a href="">Acceuil</a></li>
        							<li class="list-inline-item"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{ $category->name }}</li>
        						</ul>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!-- End Page Heading -->

        <!-- Catagory -->
        <section class="catagory">
        	<div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            @foreach($category->posts as $post)
                            <div class="col-md-6 col-sm-12">
                                <div class="catagory-two">
                                    <img src="{{ asset('uploads/post/'.$post->featured) }}" alt="" class="img-fluid">
                                    <h6><a href="">{{$post->title}}</a></h6>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">{{ $post->category->name }}</li>
                                        <li class="list-inline-item">September 24, 2017</li>
                                    </ul>
                                    <p>{{ substr($post->content, 0, 180) }}... </p>
                                    <a class="btn btn-default btn-sm text-right" href="{{ route('post.single', ['slug' => $post->slug]) }}">Lire plus</a>
                                </div>
                            </div>

                            @endforeach

                        </div>
                        <div class="pagi pagi2">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item active"><a href="">1</a></li>
                                <li class="list-inline-item"><a href="">2</a></li>
                                <li class="list-inline-item"><a href="">3</a></li>
                                <li class="list-inline-item"><a href="">...</a></li>
                                <li class="list-inline-item"><a href="">15</a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-angle-right"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
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
                    </div>
                </div>   
            </div>
        </section>
        <!-- End Catagory -->

        <!-- Footer --> 
        <footer>
            <div class="container">
                <div class="footer-c">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-about">
                                <h4>ABOUT</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, ex, ea. Mollitia consequuntur dolorum cum sed ea cupiditate nisi in quis animi. Accusantium magni impedit, magnam! Similique cumque labore illum.</p>
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
                                <p>Copyright &copy; 2017 <a href="">TenNews</a>. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="designer-text text-right">
                                <p>Designed With <i class="fa fa-heart"></i> By <a href="">SnazzyTheme</a></p>
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