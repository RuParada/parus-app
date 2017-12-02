<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $title or 'Home' }}">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>
      {{ $title or 'Home' }}
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/superfish.css') }}" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" >
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/parallax-slider/parallax-slider.css') }}" />
    <script type="text/javascript" src="{{URL::asset('js/parallax-slider/modernizr.custom.28468.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/menu.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/jquery-1.8.3.min.js')}}"></script>
    


    <!--external css-->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bxslider/jquery.bxslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/owlcarousel/owl.theme.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
  </head>

  <!--hello wwww-->

  <body>
    <!--header start-->
    @section('navbar')
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">A<span>cme</span></a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="{{ route('home') }}">Home <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('home') }}">Home Parallax</a>
                          </li>
                          <li>
                              <a href="index1.html">Home Seq-slider1</a>
                          </li>
                          <li>
                              <a href="index2.html">Home Seq-slider2</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Feature <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="typography.html">Typography</a>
                          </li>
                          <li>
                              <a href="button.html">Buttons</a>
                          </li>
                          <li>
                              <a href="form.html">Form</a>
                          </li>
                          <li>
                              <a href="table.html">Table</a>
                          </li>
                          <li class="dropdown-submenu">
                              <a href="#" tabindex="-1">More options</a>
                              <ul class="dropdown-menu">
                                  <li>
                                      <a href="#" tabindex="-1">Second level</a>
                                  </li>
                                  <li class="dropdown-submenu">
                                      <a href="#">Even More..</a>
                                      <ul class="dropdown-menu">
                                          <li>
                                              <a href="#">3rd level</a>
                                          </li>
                                          <li>
                                              <a href="#">3rd level</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li>
                                      <a href="#">Second level</a>
                                  </li>
                                  <li>
                                      <a href="#">Second level</a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Pages <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="about.html">About</a>
                          </li>
                          <li>
                              <a href="404.html">404 page</a>
                          </li>
                          <li>
                              <a href="career.html">career</a>
                          </li>
                          <li>
                              <a href="{{ route('myauth') }}">Login</a>
                          </li>
                          <li>
                              <a href="registration.html">Registration</a>
                          </li>
                          <li>
                              <a href="faq.html">FAQ</a>
                          </li>
                          <li class="dropdown-submenu">
                              <a href="#" tabindex="-1">Pricing table</a>
                              <ul class="dropdown-menu">
                                  <li class="dropdown-submenu"></li>
                                  <li>
                                      <a href="price-table-one.html">Pricing table one</a>
                                  </li>
                                  <li>
                                      <a href="price-table-two.html">Pricing table two</a>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <a href="service.html">Service</a>
                          </li>
                          <li>
                              <a href="{{ route('privacy') }}">Privacy policy</a>
                          </li>
                          <li>
                              <a href="{{ route('admin') }}">Admin</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Portfolio <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="portfolio-3-col.html">Portfolio 3 column</a>
                          </li>
                          <li>
                              <a href="portfolio-4-col.html">Portfolio 4 column</a>
                          </li>
                          <li>
                              <a href="portfolio-single-image.html">Portfolio Single Image</a>
                          </li>
                          <li>
                              <a href="portfolio-single-video.html">Portfolio Single Video</a>
                          </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Blog <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="{{ route('posts') }}">Blog</a>
                          </li>
                          <li>
                              <a href="{{ route('articles') }}">Blog two column</a>
                          </li>
                          <li>
                              <a href="{{ route('article', array('id'=>10)) }}">Blog Single Image</a>
                          </li>
                          <li>
                              <a href="blog-detail-video.html">Blog single video</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="{{ route('contact') }}">Contact</a>
                  </li>
                  <li><input class="form-control search" placeholder=" Search" type="text"></li>
              </ul>
          </div>
      </div>
    </header>
    @show
    <!--header end-->
    <div class='menu closed'>
        <div class='messages button'></div>
        <div class='music button'></div>
        <div class='home button'></div>
        <div class='places button'></div>
        <div class='bookmark button'></div>
        <div class='main button'>Menu</div>
    </div>


    @yield('slider')

    
    @yield('about')


    @yield('property')


    @yield('breadcrumbs')


    @yield('content')


      <!--recent work start-->
    <div class="bg-lg">
      @yield('recent')
      <!--recent work end-->
    </div>



    <div id="home-services">

      @yield('service')
      <!-- /container -->

    </div>
    <!-- service end -->
    <div class="hr">
      <span class="hr-inner"></span>
    </div>

    @yield('clients')




    <!--container end-->


    <!--footer start-->
    @section('footer')
    <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
              <h1>
                contact info
              </h1>
              <address>
                <p><i class="fa fa-home pr-10"></i>Address: No.XXXXXX street</p>
                <p><i class="fa fa-globe pr-10"></i>Mars city, Country </p>
                <p><i class="fa fa-mobile pr-10"></i>Mobile : (123) 456-7890 </p>
                <p><i class="fa fa-phone pr-10"></i>Phone : (123) 456-7890 </p>
                <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">support@example.com</a></p>
              </address>
            </div>
            <div class="col-lg-3 col-sm-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
              <h1>latest tweet</h1>
                <div class="tweet-box">
                  <i class="fa fa-twitter"></i>
                  <em>
                    Please follow
                    <a href="javascript:;">@example</a>
                    for all future updates of us!
                    <a href="javascript:;">twitter.com/acme</a>
                  </em>
                </div>
                <div class="tweet-box">
                  <i class="fa fa-twitter"></i>
                  <em>
                    Please follow
                    <a href="javascript:;">@example</a>
                    for all future updates of us!
                    <a href="javascript:;">twitter.com/acme</a>
                  </em>
                </div>
                <div class="tweet-box">
                  <i class="fa fa-twitter"></i>
                  <em>
                    Please follow
                    <a href="javascript:;">@example</a>
                    for all future updates of us!
                    <a href="javascript:;">twitter.com/acme</a>
                  </em>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
              <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                <h1>
                  Our Company
                </h1>
                <ul class="page-footer-list">
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="about.html">About Us</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="faq.html">Support</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="service.html">Service</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="privacy-policy.html">Privacy Policy</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="career.html">We are Hiring</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="terms.html">Term & condition</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-3">
              <div class="text-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
                <h1>
                  Text Widget
                </h1>
                <p>
                  This is a text widget.Lorem ipsum dolor sit amet.
                  This is a text widget.Lorem ipsum dolor sit amet.
                </p>
              </div>
            </div>
          </div>
      </div>
    </footer>

    @show
    <!-- footer end -->


    <!--small footer start -->
    @section('footer-small')
    <footer class="footer-small">
        <!--yield('footer-small')-->
        <div class="container">
          <div class="row">
              <div class="col-lg-6 col-sm-6 pull-right">
                  <ul class="social-link-footer list-unstyled">
                      <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>
                      <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>
                      <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
              </div>
              <div class="col-md-4">
                <div class="copyright">
                  <p>&copy; Copyright - Acme Theme by cosmic.</p>
                </div>
              </div>
          </div>
      </div>
    </footer>
    @show
    <!--small footer end-->

    <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
    <script src="js/jquery-1.8.3.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="js/hover-dropdown.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js">
    </script>

    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js">
    </script>
    <script src="js/wow.min.js">
    </script>
    <script src="assets/owlcarousel/owl.carousel.js">
    </script>

    <script src="js/jquery.easing.min.js">
    </script>
    <script src="js/link-hover.js">
    </script>
    <script src="js/superfish.js">
    </script>
    <script type="text/javascript" src="js/parallax-slider/jquery.cslider.js">
    </script>
    <script type="text/javascript">
      $(function() {

        $('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 100
        });

      });
    </script>



    <!--common script for all pages-->
    <script src="js/common-scripts.js">
    </script>

    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>


    <script>
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();

      $(".menu").mousedown(function(){
        $(this).toggleClass("closed");
        
        if($(this).hasClass("closed")) {
          $(".main.button").text("Menu");
        } else {
          $(".main.button").text("Close");
        }
      })


    </script>
    <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
  </body>
</html>
