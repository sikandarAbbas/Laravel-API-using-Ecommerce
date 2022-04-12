<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewFactory extends Factory
{
    use RefreshDatabase;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_id" => Product::factory(),
            "customer" => $this->faker->name,
            "review" => $this->faker->paragraph,
            "star" => $this->faker->numberBetween(0, 5)
        ];
    }
}
