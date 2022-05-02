<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;

class ProductFactory extends Factory
{
    
    public function definition()
    {
        $title = $this->faker->sentence(6);
        $slug = join('-', explode(' ', $title));

        $features = join(',', explode(' ', $title));
        return [
            'name' => $title,
            'slug' => $slug,
            'short_description' => $this->faker->paragraph(),
            'long_description' => $this->faker->paragraph(),
            'features' => $features,
            'thumbnail' => '',
            'price' => '20000',
            'user_id' => 1,
            'category_id' => Category::all()->random()->id
        ];
    }
}
