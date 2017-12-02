@extends('layouts.site')

@section('breadcrumbs')
@endsection

@section('slider')          
    <!-- Sequence Modern Slider -->
    <!--
    <div id="da-slider" class="da-slider">

            <div class="da-slide">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
              <h2>
                <i>CLEAN &amp; FRESH</i>
                <br>
                <i>RESPONSIVE</i>
                <br>
                <i>DESIGN</i>
              </h2>
              <p>
                <i>Lorem ipsum dolor amet</i>
                <br />
                <i>veniam omnis</i>
              </p>
              <a href="#" class="btn btn-info btn-lg da-link">
                Read more
              </a>
              <div class="da-img">
                <img src="img/parallax-slider/images/2.png" alt="image01" />
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="da-slide">
            <div class="container">
        <div class="row">
          <div class="col-md-12">
        <h2>
          <i>RESPONSIVE VIDEO</i>
            <br />
          <i>SUPPORT AND</i>
            <br />
          <i>MANY MORE</i>
        </h2>
        <p>
          <i>Lorem ipsum dolor amet</i>
            <br />
          <i>tempor incididunt ut</i>
        </p>
        <a href="#" class="btn btn-info btn-lg da-link">
          Read more
        </a>
        <div class="da-img">
          <img src="img/parallax-slider/images/3.png" alt="image01" />
        </div>
      </div>
          </div>
        </div>
      </div>


    <div class="da-slide">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
        <h2>
          <i>USING BEST WEB</i>
            </br>
          <i>SOLUTIONS WITH</i>
            </br>
          <i>HTML5/CSS3</i>
        </h2>
        <p>
          <i>Lorem ipsum dolor amet</i>
          <br />
          <i>tempor incididunt ut</i>
          <br />
          <i>veniam omnis </i>
        </p>
        <a href="#" class="btn btn-info btn-lg da-link">
          Read more
        </a>
        <div class="da-img">
          <img src="img/parallax-slider/images/1.png" alt="image01" />
        </div>
      </div>
      </div>
      </div>
    </div>

      <nav class="da-arrows">
        <span class="da-arrows-prev">
        </span>
        <span class="da-arrows-next">
        </span>
      </nav>
    </div>-->
<div class="slider-container">
  <div class="slider-control left inactive"></div>
  <div class="slider-control right"></div>
  <ul class="slider-pagi"></ul>
  <div class="slider">
    <div class="slide slide-0 active">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Project name 1</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a class="slide__text-link">Project link</a>
        </div>
      </div>
    </div>
    <div class="slide slide-1 ">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Project name 2</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a class="slide__text-link">Project link</a>
        </div>
      </div>
    </div>
    <div class="slide slide-2">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Project name 3</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a class="slide__text-link">Project link</a>
        </div>
      </div>
    </div>
    <div class="slide slide-3">
      <div class="slide__bg"></div>
      <div class="slide__content">
        <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
          <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
        </svg>
        <div class="slide__text">
          <h2 class="slide__text-heading">Project name 4</h2>
          <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
          <a class="slide__text-link">Project link</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('about')

    <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="">
              welcome to Acme
            </h1>

          </div>


          <div class="feature-box">
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                <img src="img/1.png" alt="" width="100" height="100">

                </em>
                <h4>
                  <b>Multipurpose Template</b>
                </h4>
              </div>
              <p class="text-center">
                Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris.
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="img/2.png" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>Well Documented</b>
                </h4>
              </div>
              <p class="text-center">
                Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris.
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="img/3.png" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>Responsive Design</b>
                </h4>
              </div>
              <p class="text-center">
                Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris.
              </p>
            </div>
          </div>

          <!--feature end-->
        </div>
      </div>
    </div>

@endsection

@section('property')
    <!--property start-->
    <div class="property gray-bg">
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
            <img src="img/tab1.png" alt="">
          </div> -->
          <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
            <img src="img/tab1.png" alt="">
          </div>

          <div class="col-lg-6 col-sm-6 wow fadeInRight">
            <h1>
              Mobile ready
            </h1>
            <hr>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantiu.
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantiu.
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.
            </p>
            <hr>
            <a href="javascript:;" class="btn btn-purchase">
              Purchase now
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--property end-->
@endsection

@section('recent')
    <div class="container">
        <div class="row">
          <div class="col-lg-12 recent">
            <h3 class="recent-work">
              Recent Work
            </h3>
            <p>Some of our work we have done earlier</p>
            <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">

              <div class="item view view-tenth">
                <img src="img/works/img8.jpg" alt="work Image">
                <div class="mask">
                  <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="img/works/img9.jpg" alt="work Image">
                <div class="mask">
                  <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="img/works/img10.jpg" alt="work Image">
                <div class="mask">
                  <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="img/works/img11.jpg" alt="work Image">
                <div class="mask">
                  <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="img/works/img12.jpg" alt="work Image">
                <div class="mask">
                  <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>
              <div class="item view view-tenth">
                <img src="img/works/img13.jpg" alt="work Image">
                <div class="mask">
                  <a href="blog-detail.html" class="info" data-toggle="tooltip" data-placement="top" title="Details">
                    <i class="fa fa-link">
                    </i>
                  </a>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>

@endsection

@section('service')

<div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>
              In case you need any help
            </h2>
          </div>

          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-question">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  PRESALE QUESTION
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim  laborum.
                  <br>
                  <a href="#">
                    Learn more
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-h-square">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  NEED SUPPORT?
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim  laborum.
                  <br>
                  <a href="#">
                    Learn more
                  </a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-users">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  CHECK FORUM
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim  laborum.
                  <br>
                  <a href="#">
                    Learn more
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->

      </div>

@endsection

@section('clients')

<div class="container">
      <div class="row mar-b-50 our-clients">
        <div class="col-md-3">
          <h2>
            Our Clients
          </h2>
          <p>
            Lorem dipsum folor margade sitede lametep eiusmod psumquis dolore.Margade sitede lametep eiusmod.
            lametep eiusmod psumquis dolore.
          </p>
        </div>
        <div class="col-md-9">
          <div class="outside">
            <p>
              <span id="slider-prev">
              </span>
              |
              <span id="slider-next">
              </span>
            </p>
          </div>

          <ul class="bxslider1 clients-list">
            <li>
              <a href="#">
                <img src="img/clients/graylogo6.png" alt="" />

                <img src="img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="img/clients/graylogo6.png" alt="" />

                <img src="img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="img/clients/graylogo6.png" alt="" />

                <img src="img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="img/clients/graylogo6.png" alt="" />

                <img src="img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="img/clients/graylogo6.png" alt="" />

                <img src="img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="img/clients/graylogo6.png" alt="" />

                <img src="img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>
            <li>
              <a href="#">
                <img src="img/clients/graylogo6.png" alt="" />

                <img src="img/clients/newlogo6.png" class="color-img" alt="" />
              </a>
            </li>

          </ul>


        </div>
      </div>
      <!-- END CLIENTS -->
    </div>

@endsection

@section('breadcrumbs')

@endsection

@section('content')

    @include('blocks.index_content')

@endsection
