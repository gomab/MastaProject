<section class="menu-area">
    <div class="container">
        <div class="menu-content">
            <div class="row">
                <div class="col-lg-10 col-md-12">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item active"><a href="index.html">HOME</a></li>

                        @foreach($categories as $category)
                            <li class="list-inline-item"><a href="">{{ $category->name }}</a></li>
                        @endforeach


                        <li class="list-inline-item"><a href="">VIDEO</a></li>

                        <li class="list-inline-item"><a>PAGES<i class="fa fa-angle-down"></i></a>
                            <ul class="list-unstyled">
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="about.html">ABOUT</a></li>
                                <li><a>CATAGORY<i class="fa fa-angle-right"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="catagory-one.html">CATAGORY ONE</a></li>
                                        <li><a href="catagory-two.html">CATAGORY TWO</a></li>
                                    </ul>
                                </li>
                                <li><a>NEWS DETAILS<i class="fa fa-angle-right"></i></a>
                                    <ul class="list-unstyled">
                                        <li><a href="news-details-one.html">NEWS DETAILS ONE</a></li>
                                        <li><a href="news-details-two.html">NEWS DETAILS TWO</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="coming-soon.html">COMING SOON</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="list-inline-item static"><a>MEGA MENU<i class="fa fa-angle-down"></i></a>
                            <ul class="mega-menu list-unstyled">
                                <li>
                                    <h4>CATAGORIES</h4>
                                    <a href="">WORLD & BUSINESS</a>
                                    <a href="">TECH & POLITICS</a>
                                    <a href="">SPORTS &ENVIRONMENT</a>
                                    <a href="">LIFESTYLE & FASHION</a>
                                    <a href="">ANIMAL & POLITICS</a>
                                    <a href="">HEALTH & NATIONAL</a>
                                    <a href="">CULTURE & MUSIC</a>
                                </li>
                                <li>
                                    <h4>ACCESSORIES</h4>
                                    <a href="">LEATHER & SHOES</a>
                                    <a href="">GLASSES & WATCHES</a>
                                    <a href="">MEN ACCESSORIES</a>
                                    <a href="">WOMEN ACCESSORIES</a>
                                    <a href="">EARRING & NECKLACES</a>
                                    <a href="">BEACH CLOTHING</a>
                                    <a href="">GLOVES & SCARVES</a>
                                </li>
                                <li>
                                    <h4>TOP LINKS</h4>
                                    <a href="">BECOME A MEMBER</a>
                                    <a href="">LEGAL INFORMATION</a>
                                    <a href="">PEIVACY POLICY</a>
                                    <a href="">TERMS & CONDITION</a>
                                    <a href="">PRESS RELEASE</a>
                                    <a href="">WORK FOR US</a>
                                    <a href="">NEWSLETTER SIGNUP</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-12">
                    <div class="clock text-right">
                        <span id="dg-clock"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>