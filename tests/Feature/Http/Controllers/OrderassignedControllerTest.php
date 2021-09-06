<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\NewOrderassigned;
use App\Jobs\SyncMedia;
use App\Models\Orderassigned;
use App\Models\Users;
use App\Notification\ReviewNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Queue;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\OrderassignedController
 */
class OrderassignedControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $orderassigneds = Orderassigned::factory()->count(3)->create();

        $response = $this->get(route('orderassigned.index'));

        $response->assertOk();
        $response->assertViewIs('orderassigned.index');
        $response->assertViewHas('orderassigneds');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('orderassigned.create'));

        $response->assertOk();
        $response->assertViewIs('orderassigned.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $orderassigned = Orderassigned::factory()->create();

        $response = $this->get(route('orderassigned.show', $orderassigned));

        $response->assertOk();
        $response->assertViewIs('orderassigned.show');
        $response->assertViewHas('orderassigned');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $orderassigned = Orderassigned::factory()->create();

        $response = $this->get(route('orderassigned.edit', $orderassigned));

        $response->assertOk();
        $response->assertViewIs('orderassigned.edit');
        $response->assertViewHas('orderassigned');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\OrderassignedController::class,
            'update',
            \App\Http\Requests\OrderassignedUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $orderassigned = Orderassigned::factory()->create();

        $response = $this->put(route('orderassigned.update', $orderassigned));

        $orderassigned->refresh();

        $response->assertRedirect(route('orderassigned.index'));
        $response->assertSessionHas('orderassigned.id', $orderassigned->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $orderassigned = Orderassigned::factory()->create();

        $response = $this->delete(route('orderassigned.destroy', $orderassigned));

        $response->assertRedirect(route('orderassigned.index'));

        $this->assertDeleted($orderassigned);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\OrderassignedController::class,
            'store',
            \App\Http\Requests\OrderassignedStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $AssignedTo = Users::factory()->create();
        $order_id = $this->faker->numberBetween(-10000, 10000);

        Notification::fake();
        Queue::fake();
        Event::fake();

        $response = $this->post(route('orderassigned.store'), [
            'AssignedTo' => $AssignedTo->id,
            'order_id' => $order_id,
        ]);

        $orderassigneds = Orderassigned::query()
            ->where('AssignedTo', $AssignedTo->id)
            ->where('order_id', $order_id)
            ->get();
        $this->assertCount(1, $orderassigneds);
        $orderassigned = $orderassigneds->first();

        $response->assertRedirect(route('orderassigned.index'));
        $response->assertSessionHas('orderassigned.order_id', $orderassigned->order_id);

        Notification::assertSentTo($user, ReviewNotification::class, function ($notification) use ($orderassigned) {
            return $notification->orderassigned->is($orderassigned);
        });
        Queue::assertPushed(SyncMedia::class, function ($job) use ($orderassigned) {
            return $job->orderassigned->is($orderassigned);
        });
        Event::assertDispatched(NewOrderassigned::class, function ($event) use ($orderassigned) {
            return $event->orderassigned->is($orderassigned);
        });
    }
}
