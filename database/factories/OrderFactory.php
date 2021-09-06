<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Stock;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::factory(),
            'OrderTrackN0' => $this->faker->regexify('[A-Za-z0-9]{6}'),
            'stock_id' => Stock::factory(),
            'DateOrders' => $this->faker->dateTime(),
            'isOrderService' => $this->faker->boolean,
        ];
    }
}
