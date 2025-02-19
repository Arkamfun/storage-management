<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $table = 'suppliers';

    protected $fillable = [
        'name',
        'contact',
        'address',
    ];

    public function purchases()
    {
        return $this->hasMany(Purchases::class);
    }
}
