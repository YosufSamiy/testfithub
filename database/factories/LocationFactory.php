<?php

namespace Database\Factories;

use App\Models\location;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->city(),
            'info'=>$this->faker->paragraph(),
            'code'=>$this->faker->countryCode(),
            
            'mobile'=>$this->faker->phoneNumber(),
            'mayor'=>$this->faker->name(),
            'number_citizens'=>$this->faker->numberBetween(254,555),


        ];
    }
}
