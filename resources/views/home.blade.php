@extends('layouts.app')
@section('content')
<section class="hero"><h1>Welcome to Laravel POS Foundations</h1><p class="lead">A four-page point-of-sale foundation built with Laravel routing, controllers, static PHP arrays, and Blade views.</p><div class="buttons"><a class="button" href="{{ url('/customers') }}">View Customers</a><a class="button secondary" href="{{ url('/users') }}">View Users</a></div></section>
@endsection
