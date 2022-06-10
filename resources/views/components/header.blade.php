<header class="pg-header">
  <nav style="background-color: #02ab24;" class="navbar navbar-expand-lg sm-text-center fixed-top justify-content-between">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Roto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="header-navs collapse navbar-collapse text-center" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a style="color: #fff;" class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a style="color: #fff;" class="nav-link" href="{{ route('services') }}">Services</a>
          </li>
          <li class="nav-item">
            <a style="color: #fff;" class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a style="color: #fff;" class="nav-link" href="{{ route('story') }}">Our Story</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>