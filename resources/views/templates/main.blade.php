
<!doctype html>
<html lang="en">
  <head>
    <title>Exalted Dragon Blooded Character Tracker</title>
    <link rel="stylesheet" href="/css/app.css" />
    <script src="/js/app.js"></script>
    <script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
  <body>
    <!--Header-->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Exalted Dragon Blooded Character Tracker</a>
      <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <!--<nav class="col-md-1 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            @include('inc.sidebarleft')
          </div>
        </nav>-->

        <main role="main" class="col-md-9 ml-sm-auto px-4 container">
          @yield('content')
        </main>

        <nav class="col-md-3 d-none d-md-block sidebar-right">
        <div class="alert alert-success noCharacter hide-on-load"></div>
          <div class="sidebar-sticky yes">
              @include('inc.sidebarright')
          </div>
        </nav>
      </div>
    </div>
  </body>
</html>
