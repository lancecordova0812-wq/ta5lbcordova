@extends('layouts.app')
@section('content')
<h1>Customer Accounts</h1><p class="lead">Sample customer records supplied by <code>CustomerController</code>.</p><div class="table-wrap"><table><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Status</th></tr></thead><tbody>
@foreach ($customers as $customer)<tr><td>{{ $customer['id'] }}</td><td>{{ $customer['name'] }}</td><td>{{ $customer['email'] }}</td><td>{{ $customer['phone'] }}</td><td><span class="tag">Active</span></td></tr>@endforeach
</tbody></table></div>
@endsection
