<div class="container">
	<code>
{--!! $script !!--}

<!-- PHP ternarnyi operator -->
{{ isset($bvar) ? $bvar : $title }}
<!-- Blade ternarnyi operator -->
{{ $bvar or $title }}
<br>

@if(count($data) < 3)
	Array to - 3 element

@elseif(count($data) == 10)
	Array to 10 element

@else 
	Array to + 3 element

@endif

@for($i = 0; count($dataI) > $i; $i++)
	<li>{{ $dataI[$i] }}</li>
@endfor

@foreach($dataI as $key => $val)
	{{$key.' => '.$val}}<br>

@endforeach

@forelse($dataI as $key => $val)
	{{$key.' => '.$val}}<br>
@empty
	Not items

@endforelse

@while(false)
	todo
@endwhile

@each('list',$data,'value')

@dump($data)
</code>



      <div class="row mar-b-60">
        <div class="col-lg-6">
          <!--tab start-->
          <section class="tab wow fadeInLeft">
            <header class="panel-heading tab-bg-dark-navy-blue">
              <ul class="nav nav-tabs nav-justified ">
                <li class="active">
                  <a data-toggle="tab" href="#news">
                    News
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#events">
                    Events
                  </a>
                </li>
                <li class="">
                  <a data-toggle="tab" href="#notice-board">
                    Notice board
                  </a>
                </li>
              </ul>
            </header>
            <div class="panel-body">
              <div class="tab-content tasi-tab">
                <div id="news" class="tab-pane fade in active">
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="img/product1.jpg" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        News Tittle goes here
                      </a>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="img/product2.jpg" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        News Tittle goes here 2
                      </a>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. simsut dorlor
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="img/product1.jpg" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        News Tittle goes here 3
                      </a>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. sumon ahmed
                      </p>
                    </div>
                  </article>
                </div>
                <div id="events" class="tab-pane fade">
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <!--image goes here-->
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class="cmt-head">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      </a>
                      <p>

                        <i class="fa fa-time">
                        </i>
                        1 hours ago
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <!--image goes here-->
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class="cmt-head">
                        Nulla vel metus scelerisque ante sollicitudin commodo
                      </a>
                      <p>

                        <i class="fa fa-time">
                        </i>
                        23 mins ago
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <!--image goes here-->
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class="cmt-head">
                        Donec lacinia congue felis in faucibus.
                      </a>
                      <p>

                        <i class="fa fa-time">
                        </i>
                        15 mins ago
                      </p>
                    </div>
                  </article>
                </div>
                <div id="notice-board" class="tab-pane fade">
                  <p>
                    Notice board goes here Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.
                  </p>
                  <p>
                    Notice board goes here Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.
                  </p>
                </div>
              </div>
            </div>
          </section>
          <!--tab end-->
        </div>
        <div class="col-lg-6">
          <!--testimonial start-->
          <div class="about-testimonial boxed-style about-flexslider ">
            <section class="slider wow fadeInRight">
              <div class="flexslider">
                <ul class="slides about-flex-slides">
                  <li>
                    <div class="about-testimonial-image ">
                      <img alt="" src="img/person_1.png">
                    </div>
                    <a class="about-testimonial-author" href="#">
                      Russel Reagan
                    </a>
                    <span class="about-testimonial-company">
                      CCD Realestate
                    </span>
                    <div class="about-testimonial-content">
                      <p class="about-testimonial-quote">
                        Donec ut purus sed tortor malesuada venenatis eget eget lorem. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="about-testimonial-image ">
                      <img alt="" src="img/person_2.png">
                    </div>
                    <a class="about-testimonial-author" href="#">
                      Steven gerrard
                    </a>
                    <span class="about-testimonial-company">
                      Molt BVG
                    </span>
                    <div class="about-testimonial-content">
                      <p class="about-testimonial-quote">
                        Pellentesque et pulvinar enim. Quisque at tempor ligula. Maecenas augue ante, euismod vitae egestas sit amet, accumsan eu nulla. Nullam tempor lectus a ligula lobortis pretium. Donec ut purus sed tortor malesuada venenatis eget eget lorem.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </section>
          </div>
          <!--testimonial end-->
        </div>
        </div>
      </div>