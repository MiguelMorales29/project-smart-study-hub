<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Smart Study Hub' }}</title>
  <link rel="icon" href="{{ asset('layouts/images/logo.svg') }}">
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  @stack('head')
</head>
<body>
  @include('partials.navbar')
  <main class="container">@yield('content')</main>
  @stack('scripts')
</body>
</html>
