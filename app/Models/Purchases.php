<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $table = 'purchases';

    protected $fillable = [
        'quantity',
        'contact',
        'invoice',
        'product_id',
        'supplier_id',
    ];
    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function supppliers()
    {
        return $this->belongsTo(Suppliers::class, 'supplier_id');
    }
}
