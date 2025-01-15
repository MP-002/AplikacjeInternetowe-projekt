<?php

namespace Database\Factories;

use App\Models\Fishingspot;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class FishingspotFactory extends Factory
{
    protected $model = Fishingspot::class;

    public function definition()
    {
        return [
            'nazwa' => $this->faker->randomElement([
                'Śniardwy', 'Łebsko', 'Miedwie', 'Wigry', 'Gopło', 'Oresko', 
                'Dąbie', 'Zalew Zegrzyński', 'Nysa', 'Białe', 
                'Czarny Staw', 'Solina', 'Tarnobrzeskie', 'Rakutowskie', 
                'Lubikowskie', 'Borzechowskie', 'Mściwoj', 'Strzeszynek', 'Czorsztyńskie', 
                'Włocławskie', 'Płaskie', 'Narew', 'Mikołajskie', 'Radunia', 
                'Pięciomorgowe', 'Świdwie', 'Żernickie', 'Błotne', 
                'Kociołek', 'Hubska', 'Lubińskie', 'Biskupin', 'Pławne', 
                'Krzesin', 'Pile', 'Bukowo', 'Bystrzyca', 'Ciechanowskie', 
                'Wdzydze', 'Wielkie', 'Majdany', 'Brackie', 'Odrzańskie', 
                'Sosnówka', 'Długołęka', 'Zapadłe', 'Niedźwiadek', 'Karasiowe', 
                'Ryn', 'Sielpia', 'Wrzesińskie', 'Piastowskie', 'Węgorzyn',
            ]),
            'typ' => $this->faker->randomElement(['Jezioro', 'Rzeka', 'Staw','Zalew'])
            
        ];
    }
}
