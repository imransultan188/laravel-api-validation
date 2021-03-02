<?php

namespace Database\Factories;

use App\Models\Clas;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
