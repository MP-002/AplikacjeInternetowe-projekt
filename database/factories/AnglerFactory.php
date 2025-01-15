<?php

namespace Database\Factories;

use App\Models\Angler;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class AnglerFactory extends Factory
{
    protected $model = Angler::class;

    public function definition()
    {
        return [
            'imie' => $this->faker->randomElement([
                'Adam', 'Anna', 'Andrzej', 'Alicja', 'Aleksandra', 'Artur', 'Barbara', 'Beata', 'Błażej', 'Bogdan',
                'Bartosz', 'Cezary', 'Czarek', 'Damian', 'Daniel', 'Dawid', 'Dominik', 'Ewa', 'Elżbieta', 'Emilia',
                'Eryk', 'Grzegorz', 'Halina', 'Hanna', 'Hubert', 'Ignacy', 'Irena', 'Jakub', 'Jan', 'Jarosław',
                'Joanna', 'Jacek', 'Kamil', 'Katarzyna', 'Krzysztof', 'Klaudia', 'Kornelia', 'Łukasz', 'Maciej',
                'Magdalena', 'Marek', 'Maria', 'Michał', 'Monika', 'Norbert', 'Olga', 'Piotr', 'Paweł', 'Rafał'
            ]),
            'nazwisko' => $this->faker->randomElement([
                'Nowak', 'Kowalski', 'Wiśniewski', 'Wójcik', 'Kowalczyk', 'Kamiński', 'Lewandowski', 'Zieliński', 'Szymański', 'Woźniak',
                'Dąbrowski', 'Kozłowski', 'Jankowski', 'Mazur', 'Wojciechowski', 'Kwiatkowski', 'Krawczyk', 'Pawlak', 'Piotrowski', 'Grabowski',
                'Adamczyk', 'Nowacki', 'Bąk', 'Wieczorek', 'Ślusarczyk', 'Wróblewski', 'Kaczmarek', 'Wojda', 'Rutkowski', 'Zawisza',
                'Sikora', 'Marek', 'Kaszubski', 'Matuszewski', 'Majewski', 'Sierżant', 'Błaszczak', 'Markiewicz', 'Puchalski', 'Jarosz',
                'Jabłoński', 'Sikorski', 'Górski', 'Zawisza', 'Kieliszewski', 'Czajka', 'Laskowski', 'Białek', 'Chmielowski'
            ]),
            'wiek' => $this->faker->numberBetween(10, 90)
        ];
    }
}
