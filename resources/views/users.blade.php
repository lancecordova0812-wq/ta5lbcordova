@extends('layouts.app')
@section('content')
<h1>User Accounts</h1><p class="lead">Sample system-user records supplied by <code>UserController</code>.</p><div class="table-wrap"><table><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Status</th></tr></thead><tbody>
@foreach ($users as $user)<tr><td>{{ $user['id'] }}</td><td>{{ $user['name'] }}</td><td>{{ $user['email'] }}</td><td>{{ $user['role'] }}</td><td><span class="tag">Active</span></td></tr>@endforeach
</tbody></table></div>
@endsection
