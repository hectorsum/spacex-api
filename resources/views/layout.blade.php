<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SpaceX</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('') ? 'active' : '' }}" aria-current="page" href="/">Launches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteNamed('rocket') ? 'active' : '' }}" aria-current="page" href="/rocket">Rockets</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@yield('content')