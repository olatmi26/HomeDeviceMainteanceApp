<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\AssignedBy;
use App\Models\AssignedTo;
use App\Models\Order;
use App\Models\OrderAssignTo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\OrderAssignToController
 */
class OrderAssignToControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $orderAssignTos = OrderAssignTo::factory()->count(3)->create();

        $response = $this->get(route('order-assign-to.index'));

        $response->assertOk();
        $response->assertViewIs('orderAssignTo.index');
        $response->assertViewHas('orderAssignTos');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('order-assign-to.create'));

        $response->assertOk();
        $response->assertViewIs('orderAssignTo.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $orderAssignTo = OrderAssignTo::factory()->create();

        $response = $this->get(route('order-assign-to.show', $orderAssignTo));

        $response->assertOk();
        $response->assertViewIs('orderAssignTo.show');
        $response->assertViewHas('orderAssignTo');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $orderAssignTo = OrderAssignTo::factory()->create();

        $response = $this->get(route('order-assign-to.edit', $orderAssignTo));

        $response->assertOk();
        $response->assertViewIs('orderAssignTo.edit');
        $response->assertViewHas('orderAssignTo');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\OrderAssignToController::class,
            'update',
            \App\Http\Requests\OrderAssignToUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $orderAssignTo = OrderAssignTo::factory()->create();
        $AssignedBy = AssignedBy::factory()->create();

        $response = $this->put(route('order-assign-to.update', $orderAssignTo), [
            'AssignedBy' => $AssignedBy->id,
        ]);

        $orderAssignTo->refresh();

        $response->assertRedirect(route('orderAssignTo.index'));
        $response->assertSessionHas('orderAssignTo.id', $orderAssignTo->id);

        $this->assertEquals($AssignedBy->id, $orderAssignTo->AssignedBy);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $orderAssignTo = OrderAssignTo::factory()->create();

        $response = $this->delete(route('order-assign-to.destroy', $orderAssignTo));

        $response->assertRedirect(route('orderAssignTo.index'));

        $this->assertDeleted($orderAssignTo);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\OrderAssignToController::class,
            'store',
            \App\Http\Requests\OrderAssignToStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $AssignedTo = AssignedTo::factory()->create();
        $order = Order::factory()->create();

        $response = $this->post(route('order-assign-to.store'), [
            'AssignedTo' => $AssignedTo->id,
            'order_id' => $order->id,
        ]);

        $orderAssignTos = OrderAssignTo::query()
            ->where('AssignedTo', $AssignedTo->id)
            ->where('order_id', $order->id)
            ->get();
        $this->assertCount(1, $orderAssignTos);
        $orderAssignTo = $orderAssignTos->first();

        $response->assertRedirect(route('OrderAssignTo.index'));
        $response->assertSessionHas('orderAssignTo.order_id', $orderAssignTo->order_id);
    }
}
