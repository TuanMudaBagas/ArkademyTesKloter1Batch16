<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'Product';
    protected $fillable = [
        'name', 'price', 'id_category', 'id_cashier'
    ];

    public $timestamps = false;

    public function getCashier()
    {
        return $this->belongsTo(Cashier::class, 'id_cashier', 'id');
    }
    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }
}
