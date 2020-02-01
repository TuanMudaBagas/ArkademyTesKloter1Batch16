<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    public $table = 'Cashier';
    protected $fillable = [
        'name'
    ];
}
