<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'category_id'         => Category::all()->random()->id,
            'product_title'       => $this->faker->unique()->text(25),
            'product_description' => $this->faker->text(),
            'product_price'       => $this->faker->numberBetween(100, 1000),
        ];
    }
}
