<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fish extends Model
{
    use HasFactory;

    protected $fillable = [
        'gatunek',
        'dlugosc',
        'masa'
    ];

    public function fishing()
    {
        return $this->hasMany(Fishing::class);
    }
}
