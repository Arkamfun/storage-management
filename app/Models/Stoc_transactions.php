<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stoc_transactions extends Model
{
    protected $table = 'stoc_transactions';

    protected $fillable = [
        'transaction_type',
        'quantity',
        'product_id',
        'customer_id',
    ];

    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
    public function customers()
    {
        return $this->belongsTo(Customers::class, 'customer_id');
    }
}
