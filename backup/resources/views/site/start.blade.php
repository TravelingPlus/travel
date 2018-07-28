<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME | FRESH TRAVELLING</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/mobmenu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/jquery.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/mobmenu.js"></script>
    <script src="js/main.js"></script>
  </head>

<body>






<div class="wrapper home">
    <!--Вырезать логотип и вставить в соответствующий блок-->
    <div class="header">
        <div class="container">
            <a href="index.html" class="logo">
                <img src="img/logo.png" alt="" />
            </a>
            <!--Вырезать верхний баннер и вставить в соответствующий блок-->
            <a href="#" class="banner">
                <img src="img/banner.png" alt="" />
            </a>


            <div class="subscription">
                <div class="table-cell">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    <!--<input type="submit" class="btn" value="Sign Up">
                    <input type="submit" class="btn" value="Registration">!-->
                </div>
            </div>
        </div>
    </div><!--end header-->
    <div class="color-strip"></div>

    <div class="menu-wrap">
        <div class="container">
            <ul class="menu js_menu">
                <li class="active"><a href="index.html">HOME</a></li>
                <li><a href="">CRUISES</a></li>
                <li>
                    <a href="javascript:;">GATEWAY</a>
                    <ul class="submenu">
                        <li><a href="">Link 1</a></li>
                        <li><a href="">Link 2</a></li>
                        <li><a href="">Link 3</a></li>
                        <li><a href="">Link 4</a></li>
                        <li><a href="">Link 5</a></li>
                    </ul>
                </li>
                <li><a href="">ACTIVITIES & PLACES</a></li>
                <li><a href="">CURIOSITY</a></li>
                <li><a href="">Inspirations</a></li>
            </ul>
        </div><!--end container-->

        <div class="mob-menu"></div>
    </div><!--end menu-->
    <!--1. Вырезать изображения для слайдера и вставить в соответствующие блоки-->
    <div class="main-slider js_main-slider">
        <div class="main-slide">
            <img src="img/map_1.png" alt="beach" />
            <a href="#" class="slider-content">
                <span class="title-slide">Fresh Travelling</span>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
            </a>
        </div>
        <div class="main-slide">
            <img src="img/map_2.png" alt="beach" />
            <a href="#" class="slider-content">
                <span class="title-slide">Fresh Travelling</span>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
            </a>
        </div>
        <div class="main-slide">
            <img src="img/map_3.png" alt="beach" />
            <a href="#" class="slider-content">
                <span class="title-slide">Fresh Travelling</span>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</span>
            </a>
        </div>
    </div><!--end main slider-->
    <!--2. Вырезать изображения для статей и вставить в соответствующие блоки-->
    <div class="main">
        <div class="container">
            <div class="post-list">
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/funny.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/sea.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/most.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/legs.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/oblaka.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/beach.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/funny.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/sea.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/most.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/legs.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/oblaka.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
                <div class="post">
                    <a href="#">
							<span class="post-img">
								<img src="img/beach.png" alt="" />
							</span>
                        <span class="post-title">Lorem ipsum dolor sit ametnkfdm, consect adipiscing elit.</span>
                    </a>
                    <div class="post-txt">
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.  </p>
                    </div>
                </div><!--end post-->
            </div><!--end post list-->



            <div class="social-panel">
                <div class="share">
                    <p class="title-h2">SHARE</p>
                    <p>Get a story or a Photo to Share? We would love to hear from you.</p>
                    <a href="#">CONTACT US NOW >></a>
                </div>
                <div class="share-vk">
                    <p class="parachute"><strong>Fresh Travelling.</strong> Inspiration Everyday.</p>

                    <div id="vk_like"></div>

                </div>
                <div class="connect">
                    <p class="title-h2">CONNECT</p>
                    <p>Connect with us throught your favourite social network!</p>
                    <ul class="social-list">
                        <li><a href="" class="ico-fb">&nbsp;</a></li>
                        <li><a href="" class="ico-pinterest">&nbsp;</a></li>
                    </ul>
                </div>
            </div><!--end social panel-->
        </div><!--end container-->
    </div><!--end main-->






    <div class="apendix"></div>
</div>	<!--end wrapper-->

<div class="footer-wrap">


    <div class="subscription">
        <div class="table-cell">
            <p>GET MORE STUFF LIKE THIS IN YOUR INBOX! </p>
            <input type="email" placeholder="Enter you email ...">
            <input type="submit" class="btn" value="Sign Up">
        </div>
    </div>
    <!--Вырезать логотип и вставить в соответствующий блок-->
    <div class="footer">
        <div class="container">
            <div class="column-left">
                <a href="index.html" class="footer-logo">
                    <img src="img/logo.png" alt="" />
                </a>
                <div class="copiright">
                    <div class="table-cell">
                        <p>© 2015 . All rights reserved.</p>
                        <p><a href="#">www.freshtraveling.com</a></p>
                    </div>
                </div>
            </div>
            <div class="column-right">
                <div class="table-cell">
                    <ul class="footer-menu">
                        <li><a href="">CONTACT US</a></li>
                        <li><a href="">PRIVACY\DMCA</a></li>
                        <li><a href="">TERMS OF USE</a></li>
                        <li><a href="">CURATION POLICY</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div><!--end footer wrap-->

</body>
</html>