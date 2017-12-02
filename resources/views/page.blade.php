@extends('layouts.site')

@section('content')
<!-- Jumbotron -->

<!--container start-->
<div class="container">
  <div class="row">
    <!--blog start-->
    @foreach($articles as $article)
    <div class="col-lg-9 ">
      <div class="blog-item">
        <div class="row">
          <div class="col-lg-2 col-sm-2">
            <div class="date-wrap">
              <span class="date">
                11
              </span>
              <span class="month">
                January
              </span>
            </div>

          </div>
          <div class="col-lg-10 col-sm-10">
            <div class="blog-img">
              <img src="img/blog/img7.jpg" alt=""/>
              <!--<img src="http://lara.loc/img/{{ $article->img }}" alt=""/>-->
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-lg-2 col-sm-2 text-right">
            <div class="author">
              By
              <a href="#">
                Admin
              </a>
            </div>
            <ul class="list-unstyled">
              <li>
                <a href="javascript:;">
                  <em>
                    travel
                  </em>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <em>
                    tour
                  </em>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <em>
                    recreation
                  </em>
                </a>
              </li>
              <li>
                <a href="javascript:;">
                  <em>
                    tourism
                  </em>
                </a>
              </li>
            </ul>
            <div class="st-view">
              <ul class="list-unstyled">
                <li>
                  <a href="javascript:;">
                    209 View
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    23 Share
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    15 comments
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-10 col-sm-10">
            <h1>
              <a href="{{ route('post',['id' => $article->id]) }}">
                {{ $article->title }}
              </a>
            </h1>
            <p>{!! $article->desc !!}</p>

            <p><a class="btn btn-primary" href="{{ route('post',['id' => $article->id]) }}">Читать статью &raquo;</a></p>
          </div>
        </div>
      </div>
    <!--blog end-->
  </div>
    @endforeach
</div>
</div>
@endsection
    <!--container end-->		
    <!--container start two colum-->
    <!--
    <div class="container">
      <div class="row">


        <div class="col-md-6">
          <div class="blog-left wow fadeInLeft">
            <div class="blog-img">
              <img src="img/blog/img8.jpg" alt=""/>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="blog-two-info">
                  <p>
                    <i class="fa fa-user">
                    </i>
                    by
                    <a href="#">
                      John
                    </a>

                    |
                    <i class="fa fa-calendar">
                    </i>
                    Sept 16th, 2012
                    |
                    <i class="fa fa-comment">
                    </i>

                    <a href="#">
                      3 Comments
                    </a>
                    |
                    <i class="fa fa-share">
                    </i>

                    <a href="#">
                      39 Shares
                    </a>
                    <br>
                    <i class="fa fa-tags">
                    </i>
                    Tags :
                    <a href="#">
                      <span class="label label-info">
                        Snipp
                      </span>
                    </a>

                    <a href="#">
                      <span class="label label-info">
                        Bootstrap
                      </span>
                    </a>

                    <a href="#">
                      <span class="label label-info">
                        UI
                      </span>
                    </a>

                    <a href="#">
                      <span class="label label-info">
                        growth
                      </span>
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="blog-content">
              <h3>
                This is heading
              </h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <button class="btn btn-primary">
              Read More
            </button>

          </div>

      </div>
     <div class="col-md-6">
			<div class="blog-left wow fadeInLeft">
            <div class="blog-img">
              <img src="img/blog/img8.jpg" alt=""/>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="blog-two-info">
                  <p>
                    <i class="fa fa-user">
                    </i>
                    by
                    <a href="#">
                      John
                    </a>

                    |
                    <i class="fa fa-calendar">
                    </i>
                    Sept 16th, 2012
                    |
                    <i class="fa fa-comment">
                    </i>

                    <a href="#">
                      3 Comments
                    </a>
                    |
                    <i class="fa fa-share">
                    </i>

                    <a href="#">
                      39 Shares
                    </a>
                    <br>
                    <i class="fa fa-tags">
                    </i>
                    Tags :
                    <a href="#">
                      <span class="label label-info">
                        Snipp
                      </span>
                    </a>

                    <a href="#">
                      <span class="label label-info">
                        Bootstrap
                      </span>
                    </a>

                    <a href="#">
                      <span class="label label-info">
                        UI
                      </span>
                    </a>

                    <a href="#">
                      <span class="label label-info">
                        growth
                      </span>
                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="blog-content">
              <h3>
                This is heading
              </h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <button class="btn btn-primary">
              Read More
            </button>

          </div>
        </div>
      </div>

    </div>-->
    <!--container two colum end-->