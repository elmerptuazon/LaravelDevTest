<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "suppliers";

    protected $fillable = [
        'name', 'supplier_code', 'address', 'phone_number', 'email', 'city', 'state', 'country'
    ];

}
