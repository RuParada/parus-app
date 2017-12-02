{{--
      @if($article)
        <div class="jumbotron">
          <h1>{{ $header }}</h1>
          <p class="lead">{{ $header_text }}</p>
          <a class="btn btn-large btn-success" href="{{ route('articleLast',['id' => $article->id]) }}">Get started today</a>
        </div>
      @endif
--}}
      @yield('content')