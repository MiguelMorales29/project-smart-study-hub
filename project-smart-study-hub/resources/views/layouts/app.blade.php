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
<body class="font-poppins text-slate-800">
  @include('partials.navbar')
  @yield('content')
  @stack('scripts')
</body>
</html>
