<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];

    public function stoc_transactions()
    {
        return $this->hasMany(Stoc_transactions::class);
    }
}
