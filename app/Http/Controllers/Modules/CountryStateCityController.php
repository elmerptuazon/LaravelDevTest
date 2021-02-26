<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\City;
use App\Helpers\Services\ApiResponse;
use App\Http\Resources\CountryCollection;
use App\Http\Resources\StateCollection;
use App\Http\Resources\CityCollection;

class CountryStateCityController extends Controller
{
    public function getCountry()
    {
        $countries = Country::get();
        return ApiResponse::resource(new CountryCollection($countries));
    }
    public function getState($country_id)
    {
        $states = State::where('countries_id', $country_id)->get();
        return ApiResponse::resource(new StateCollection($states));
    }
    public function getCity($state_id)
    {
        $cities = City::where('states_id', $state_id)->get();
        return ApiResponse::resource(new CityCollection($cities));
    }
}
