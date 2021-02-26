@extends('layouts.app')

@section('page_style')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
<table>
  <tr>
    <th>Name</th>
    <th>Username</th>
    <th>Email</th>
  </tr>

@if($users)
  @foreach($users as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->username}}</td>
    <td>{{$user->email}}</td>
  </tr>
  @endforeach
@endif
</table>
{{ $users->links() }}
    </div>
  
</div>

@endsection
