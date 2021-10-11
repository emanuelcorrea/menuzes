<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->colorName(),
            'section_id' => 1,
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomDigit(),
            'position' => 1,
            'active' => 1,
            'created_at' => now()
        ];
    }
}
