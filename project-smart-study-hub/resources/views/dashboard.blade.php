@extends('layouts.app')
@section('content')
  <h1>Dashboard</h1>
  <p>Welcome back, {{ auth()->user()->name ?? 'user' }}.</p>
@endsection
