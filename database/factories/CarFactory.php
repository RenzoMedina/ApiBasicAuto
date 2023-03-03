<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'marca'=>Arr::random(['Chevrolet','Nissan','Ford','Chevy','Jeep','MG','Toyota','Kia','Honda','Volvo']),
            'modelo'=>Str::ucfirst(fake()->word(2, true)),
            'year'=>fake()->year(),
            'combustible'=>Arr::random(['Petroleo', 'Disel', 'Electrico','Hibrido']),
            'img'=>Str::lower("img/".Str::random(10).".png"),
            'categoria'=>Arr::random(['Sedan', 'Suv', 'PickUp','City Car','State Wagon']),
            'asientos'=>Arr::random([2,4,7]),
            'description'=>fake()->paragraph(5,true),
            'price'=>fake()->randomNumber(8,true)
        ];
    }
}
