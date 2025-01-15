<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fishingspot extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazwa',
        'typ'
    ];

    public function fishing()
    {
        return $this->hasMany(Fishing::class);
    }
}
