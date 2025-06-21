<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class create_visitors_table extends Model
{
    protected $fillable = ['ip_address', 'country', 'state', 'city'];
}
