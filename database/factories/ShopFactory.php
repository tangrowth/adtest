<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\Category;
use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shopName' => $this->faker->word,
            'category_id' =>Category::factory(),
            'area_id' => Area::factory(),
        ];
    }
}
