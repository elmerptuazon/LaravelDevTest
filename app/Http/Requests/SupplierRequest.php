<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class SupplierRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'supplier_code' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
        ];
    }
}
