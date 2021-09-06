<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\NewStocktaken;
use App\Jobs\SyncMedia;
use App\Models\Sparepartstock;
use App\Models\Stocktaken;
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
 * @see \App\Http\Controllers\StocktakenController
 */
class StocktakenControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $stocktakens = Stocktaken::factory()->count(3)->create();

        $response = $this->get(route('stocktaken.index'));

        $response->assertOk();
        $response->assertViewIs('stocktaken.index');
        $response->assertViewHas('stocktakens');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('stocktaken.create'));

        $response->assertOk();
        $response->assertViewIs('stocktaken.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $stocktaken = Stocktaken::factory()->create();

        $response = $this->get(route('stocktaken.show', $stocktaken));

        $response->assertOk();
        $response->assertViewIs('stocktaken.show');
        $response->assertViewHas('stocktaken');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\StocktakenController::class,
            'update',
            \App\Http\Requests\StocktakenUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $stocktaken = Stocktaken::factory()->create();

        $response = $this->put(route('stocktaken.update', $stocktaken));

        $stocktaken->refresh();

        $response->assertRedirect(route('stocktaken.index'));
        $response->assertSessionHas('stocktaken.id', $stocktaken->id);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\StocktakenController::class,
            'store',
            \App\Http\Requests\StocktakenStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $sparepartstock = Sparepartstock::factory()->create();
        $stockUpdatedBy = Users::factory()->create();

        Notification::fake();
        Queue::fake();
        Event::fake();

        $response = $this->post(route('stocktaken.store'), [
            'sparepartstock_id' => $sparepartstock->id,
            'stockUpdatedBy' => $stockUpdatedBy->id,
        ]);

        $stocktakens = Stocktaken::query()
            ->where('sparepartstock_id', $sparepartstock->id)
            ->where('stockUpdatedBy', $stockUpdatedBy->id)
            ->get();
        $this->assertCount(1, $stocktakens);
        $stocktaken = $stocktakens->first();

        $response->assertRedirect(route('stocktaken.index'));
        $response->assertSessionHas('stocktaken.title', $stocktaken->title);

        Notification::assertSentTo($stocktaken->user, ReviewNotification::class, function ($notification) use ($stocktaken) {
            return $notification->stocktaken->is($stocktaken);
        });
        Queue::assertPushed(SyncMedia::class, function ($job) use ($stocktaken) {
            return $job->stocktaken->is($stocktaken);
        });
        Event::assertDispatched(NewStocktaken::class, function ($event) use ($stocktaken) {
            return $event->stocktaken->is($stocktaken);
        });
    }
}
