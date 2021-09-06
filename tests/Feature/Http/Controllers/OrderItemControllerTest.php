<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Stock;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\OrderItemController
 */
class OrderItemControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $orderItems = OrderItem::factory()->count(3)->create();

        $response = $this->get(route('order-item.index'));

        $response->assertOk();
        $response->assertViewIs('orderItem.index');
        $response->assertViewHas('orderItems');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('order-item.create'));

        $response->assertOk();
        $response->assertViewIs('orderItem.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $orderItem = OrderItem::factory()->create();

        $response = $this->get(route('order-item.show', $orderItem));

        $response->assertOk();
        $response->assertViewIs('orderItem.show');
        $response->assertViewHas('orderItem');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $orderItem = OrderItem::factory()->create();

        $response = $this->get(route('order-item.edit', $orderItem));

        $response->assertOk();
        $response->assertViewIs('orderItem.edit');
        $response->assertViewHas('orderItem');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\OrderItemController::class,
            'update',
            \App\Http\Requests\OrderItemUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $orderItem = OrderItem::factory()->create();
        $DateOrder = $this->faker->dateTime();
        $OrderServiced = $this->faker->boolean;

        $response = $this->put(route('order-item.update', $orderItem), [
            'DateOrder' => $DateOrder,
            'OrderServiced' => $OrderServiced,
        ]);

        $orderItem->refresh();

        $response->assertRedirect(route('orderItem.index'));
        $response->assertSessionHas('orderItem.id', $orderItem->id);

        $this->assertEquals($DateOrder, $orderItem->DateOrder);
        $this->assertEquals($OrderServiced, $orderItem->OrderServiced);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $orderItem = OrderItem::factory()->create();

        $response = $this->delete(route('order-item.destroy', $orderItem));

        $response->assertRedirect(route('orderItem.index'));

        $this->assertDeleted($orderItem);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\OrderItemController::class,
            'store',
            \App\Http\Requests\OrderItemStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $order = Order::factory()->create();
        $category = Category::factory()->create();
        $stock = Stock::factory()->create();
        $QtyOrdered = $this->faker->numberBetween(-10000, 10000);
        $UnitCost = $this->faker->numberBetween(-10000, 10000);

        $response = $this->post(route('order-item.store'), [
            'order_id' => $order->id,
            'category_id' => $category->id,
            'stock_id' => $stock->id,
            'QtyOrdered' => $QtyOrdered,
            'UnitCost' => $UnitCost,
        ]);

        $orderItems = OrderItem::query()
            ->where('order_id', $order->id)
            ->where('category_id', $category->id)
            ->where('stock_id', $stock->id)
            ->where('QtyOrdered', $QtyOrdered)
            ->where('UnitCost', $UnitCost)
            ->get();
        $this->assertCount(1, $orderItems);
        $orderItem = $orderItems->first();

        $response->assertRedirect(route('orderItem.index'));
        $response->assertSessionHas('orderItem.order_id', $orderItem->order_id);
    }
}
