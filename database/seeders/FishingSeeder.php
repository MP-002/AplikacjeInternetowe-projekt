<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Angler;
use App\Models\Fish;
use App\Models\Fishing;
use App\Models\Fishingspot;

class FishingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Angler::factory()->count(1000)->create();
        Fish::factory()->count(1000)->create();
        Fishingspot::factory()->count(1000)->create();
        Fishing::factory()->count(1000)->create();
    }
}
