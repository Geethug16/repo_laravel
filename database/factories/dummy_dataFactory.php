<?php

namespace Database\Factories;

use App\Models\dummy_data;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class dummy_dataFactory extends Factory
{
    protected $model = \App\Models\dummy_data::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(), 
            'details' => $this->faker->text(), 
        ];
    }
}
