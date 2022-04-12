<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Product;
use App\Models\User;

class ProductFactory extends Factory
{
    use RefreshDatabase;

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
            "name" => $this->faker->name,
            "detail" => $this->faker->paragraph,
            'image' => $this->faker->image('public/storage/images', 640, 480, null, false),
            "price" => $this->faker->numberBetween(100, 1000),
            "stock" => $this->faker->randomDigit,
            "discount" => $this->faker->numberBetween(2, 30),
            "user_id" => User::factory(),
        ];
    }
}
