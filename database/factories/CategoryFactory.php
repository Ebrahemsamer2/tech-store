<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'name' => $name,
            'slug' => $name,
            'thumbnail' => '',
            'user_id' => 1,
            'parent_id' => 0
        ];
    }
}
