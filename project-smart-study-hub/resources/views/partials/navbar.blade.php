<header class="site-header">
  <div class="container flex">
    <a class="brand" href="{{ route('home') }}">
      <img src="{{ asset('layouts/images/logo.svg') }}" class="logo" alt="Logo">
      <span>Smart Study Hub</span>
    </a>
    <nav class="nav">
      <a href="{{ route('home') }}">Home</a>
      @guest
        @if (Route::has('login'))
          <a href="{{ route('login') }}">Login</a>
        @endif
        @if (Route::has('register'))
          <a href="{{ route('register') }}">Register</a>
        @endif
      @endguest

      @auth
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <form method="POST" action="{{ route('logout') }}" style="display:inline">
          @csrf
          <button type="submit" class="btn btn--sm">Logout</button>
        </form>
      @endauth
    </nav>
  </div>
</header>
