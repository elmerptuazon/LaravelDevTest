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
    <th>Supplier Code</th>
    <th>Address</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>City</th>
    <th>State</th>
    <th>Country</th>
    <th>Action</th>
  </tr>

@if($suppliers)
  @foreach($suppliers as $supplier)
  <tr>
    <td>{{$supplier->name}}</td>
    <td>{{$supplier->supplier_code}}</td>
    <td>{{$supplier->address}}</td>
    <td>{{$supplier->phone_number}}</td>
    <td>{{$supplier->email}}</td>
    <td>{{$supplier->city}}</td>
    <td>{{$supplier->state}}</td>
    <td>{{$supplier->country}}</td>
    <td><a href="{{route('supplier.show', $supplier->id)}}" class="btn btn-primary">Edit</a></td>
  </tr>
  @endforeach
@endif
</table>
{{ $suppliers->links() }}
    </div>
  
</div>

@endsection
