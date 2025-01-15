<?php

namespace Database\Factories;

use App\Models\Fishing;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class FishingFactory extends Factory
{
    protected $model = Fishing::class;

    public function definition()
    {
        return [
            'data' => $this->faker->date(),
            'godzina' => $this->faker->time(),
            'angler_id' => $this->faker->numberBetween(1, 1000),
            'fishingspot_id' => $this->faker->numberBetween(1, 1000),
            'fish_id' => $this->faker->numberBetween(1, 1000)
        ];
    }
}
