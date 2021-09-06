<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Stock;

class OrderItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => Order::factory(),
            'category_id' => Category::factory(),
            'stock_id' => Stock::factory(),
            'QtyOrdered' => $this->faker->numberBetween(-10000, 10000),
            'UnitCost' => $this->faker->numberBetween(-10000, 10000),
            'TotalCost' => $this->faker->numberBetween(-10000, 10000),
            'DateOrder' => $this->faker->dateTime(),
            'OrderServiced' => $this->faker->boolean,
        ];
    }
}
