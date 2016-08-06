<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('home')}}"class="{{ Request::is('/') ? "active":"" }}">Sports</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input class="form-control" placeholder="Search" type="text">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('signup') }}" class="{{ Request::is('/login') ? "active":"" }}">Sign Up</a></li>
        <li><a href="{{ route('login') }}" class="{{ Request::is('/signup') ? "active":"" }}">Login</a></li>
        <li><a href="{{ route('post.index') }}" class="{{ Request::is('/post') ? "active":"" }}">Post</a></li>
      </ul>
    </div>
  </div>
</nav>

