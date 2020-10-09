<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'type_menu',
        'menu'
    ];

    static public function boot() {
        parent::boot();
        static::creating(function ($query) {
            $query->key = Str::random(32);
        });
    }
}
