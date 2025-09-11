<nav id="topNav" class="navbar navbar-expand-lg fixed-top navbar-light transition-all">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
      <div class="logo-circle d-flex align-items-center justify-content-center">
        <img src="{{ asset('layouts/images/sshlogo.png') }}" alt="Smart Study Hub Logo" class="logo-img">
      </div>
      <span class="fw-bold text-lg md:text-xl">Smart Study Hub</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#courses">Courses</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
        @guest
          @if (Route::has('login'))
            <li class="nav-item">
              <a class="btn btn-primary btn-sm rounded-pill" href="{{ route('login') }}">Login</a>
            </li>
          @endif
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="btn btn-outline-primary btn-sm rounded-pill ms-lg-2 mt-2 mt-lg-0" href="{{ route('register') }}">Register</a>
            </li>
          @endif
        @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-primary btn-sm rounded-pill ms-lg-2 mt-2 mt-lg-0">Logout</button>
            </form>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
