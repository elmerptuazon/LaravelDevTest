@extends('layouts.app')
<td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Supplier') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('supplier.update', $supplier->id) }}">
                    @method('patch')
                        @csrf
                   
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$supplier->name}}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="supplier_code" class="col-md-4 col-form-label text-md-right">{{ __('Supplier Code') }}</label>

                            <div class="col-md-6">
                                <input id="supplier_code" type="text" class="form-control @error('supplier_code') is-invalid @enderror" name="supplier_code" value="{{$supplier->supplier_code}}" autocomplete="supplier_code" autofocus>

                                @error('supplier_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea  id="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$supplier->address}}" required autocomplete="address" autofocus>{{$supplier->address}}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$supplier->phone_number}}" required autocomplete="phone_number">

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$supplier->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="country" type="country" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country"> -->
                                <select class="form-control @error('country') is-invalid @enderror" id="country-dropdown" name="country" required>
                                    <option value="{{$supplier->country}}">{{$supplier->country}}</option>
                                    @foreach ($countries as $country) 
                                    <option value="{{$country->name}}">
                                    {{$country->name}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="state" type="state" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state"> -->
                                <select class="form-control @error('state') is-invalid @enderror" id="state-dropdown" name="state" required>
                                <option value="{{$supplier->state}}">{{$supplier->state}}</option>
                                </select>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="city" type="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city"> -->
                                <select class="form-control @error('city') is-invalid @enderror" id="city-dropdown" name="city" required>
                                <option value="{{$supplier->city}}">{{$supplier->city}}</option>
                                </select>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom_script')
<script>
$(document).ready(function() {
    $('#country-dropdown').on('change', function() {
        var country_id = this.value;
        $("#state-dropdown").html('');
        $.ajax({
            url:`{{url('/state')}}/`+country_id,
            type: "GET",
            dataType : 'json',
            success: function(result){
                $.each(result.data,function(key,value){
                    $("#state-dropdown").append('<option value="'+value.name+'">'+value.name+'</option>');
                });
            }
        });
    });


    $('#state-dropdown').on('change', function() {
        var state_id = this.value;
        $("#city-dropdown").html('');
        $.ajax({
            url:`{{url('/city')}}/`+state_id,
            type: "GET",
            dataType : 'json',
            success: function(result){
                $('#city-dropdown').html('<option value="">Select City</option>'); 
                $.each(result.data,function(key,value){
                    $("#city-dropdown").append('<option value="'+value.name+'">'+value.name+'</option>');
                });
            }
        });
    });

})
</script>
@endsection