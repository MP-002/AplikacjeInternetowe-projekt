<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Angler extends Model
{
    use HasFactory;

    protected $fillable = [
        'imie',
        'nazwisko',
        'wiek'
    ];
    
    public function fishing()
    {
        return $this->hasMany(Fishing::class);
    }
}
