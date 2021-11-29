<?php

namespace Database\Factories;

use App\Models\catogres;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatogresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = catogres::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->title(),
            'info'=>$this->faker->paragraph(),
        'active'=>$this->faker->boolean(),


            //
        ];
    }
}
