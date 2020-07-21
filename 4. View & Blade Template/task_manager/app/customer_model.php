<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer_model extends Model
{
    protected $table="customer_models";
    protected $fillable = [
        'name', 'birthday', 'address', 'phone', 'email'
    ];

}
