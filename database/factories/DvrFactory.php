<?php

namespace Database\Factories;

use App\Models\dvr;
use Illuminate\Database\Eloquent\Factories\Factory;

class DvrFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = dvr::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElements(array('acer','dahua','hikvison','samsung','cpplus')),
            'price' => rand(100,500),
        ];
    }
}
