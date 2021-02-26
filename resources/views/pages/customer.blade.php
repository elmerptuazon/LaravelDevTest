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
    <th>Address</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>City</th>
    <th>State</th>
    <th>Country</th>
  </tr>

@if($customers)
  @foreach($customers as $customer)
  <tr>
    <td>{{$customer->name}}</td>
    <td>{{$customer->address}}</td>
    <td>{{$customer->phone_number}}</td>
    <td>{{$customer->email}}</td>
    <td>{{$customer->city}}</td>
    <td>{{$customer->state}}</td>
    <td>{{$customer->country}}</td>
  </tr>
  @endforeach
@endif
</table>
{{ $customers->links() }}
    </div>
  
</div>

@endsection
