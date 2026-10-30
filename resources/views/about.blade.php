@extends('layouts.app')
@section('content')
<section class="card"><h1>About This Application</h1><p>This activity demonstrates Laravel's MVC architecture. Routes map URLs to controller methods, controllers prepare data, and Blade views render the response.</p><p>The customer and user pages currently use static PHP arrays as temporary data sources, as required by TFA5.</p><div class="buttons"><a class="button" href="{{ url('/customers') }}">Customer Accounts</a><a class="button secondary" href="{{ url('/users') }}">User Accounts</a></div></section>
@endsection
