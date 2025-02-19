<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admins extends Authenticatable
{
    use Notifiable;
    protected $table = 'admins';

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];
    protected $guarded = [];
    protected $hidden = [
        'password',
        'remember_token'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($admin) {
            if (!in_array($admin->role, ['admin', 'cashier', 'manager'])) {
                throw new \InvalidArgumentException("Invalid role value.");
            }
        });
    }
    public function stoc_transactions()
    {
        return $this->hasMany(Stoc_transactions::class);
    }
}
