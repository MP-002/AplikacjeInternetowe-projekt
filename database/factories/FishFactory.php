<?php

namespace Database\Factories;

use App\Models\Fish;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class FishFactory extends Factory
{
    protected $model = Fish::class;

    public function definition()
    {
        return [
            'gatunek' => $this->faker->randomElement([
                'Okoń', 'Szczupak', 'Karp', 'Sum', 'Troć wędrowna', 'Pstrąg potokowy', 
                'Pstrąg tęczowy', 'Leszcz', 'Węgorz', 'Sandacz', 'Sielawa', 
                'Troć jeziorowa', 'Troć potokowa','Płoć','Wzdręga'
            ]),
            'dlugosc' => $this->faker->randomFloat(2, 20.0, 200.0),
            'masa' => $this->faker->randomFloat(2, 0.1, 50)
        ];
    }
}
