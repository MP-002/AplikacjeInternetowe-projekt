<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fishing extends Model
{
    use hasFactory;
    
    protected $fillable = [
        'data',
        'godzina',
        'angler_id',
        'fishingspot_id',
        'fish_id'
    ];

    public function angler()
    {
        return $this->belongsTo(Angler::class);
    }

    public function fishingspot()
    {
        return $this->belongsTo(Fishingspot::class);
    }

    public function fish()
    {
        return $this->belongsTo(Fish::class);
    }
}
