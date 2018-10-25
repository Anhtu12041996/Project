<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'db_customer';
    protected $primaryKey = 'customer_id';
    protected $guarded = [];
}
