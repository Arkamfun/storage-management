<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'stock',

    ];



    public function purchases()
    {
        return $this->hasMany(Purchases::class, 'product_id');
    }

    public function stoc_transactions()
    {
        return $this->hasMany(Stoc_transactions::class, 'stoc_transactions');
    }
};
