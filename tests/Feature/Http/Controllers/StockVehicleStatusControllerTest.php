<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Sparepartstock;
use App\Models\Status;
use App\Models\StockVehicleStatus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\StockVehicleStatusController
 */
class StockVehicleStatusControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $stockVehicleStatuses = StockVehicleStatus::factory()->count(3)->create();

        $response = $this->get(route('stock-vehicle-status.index'));

        $response->assertOk();
        $response->assertViewIs('stockVehicleStatus.index');
        $response->assertViewHas('stockVehicleStatuses');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('stock-vehicle-status.create'));

        $response->assertOk();
        $response->assertViewIs('stockVehicleStatus.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $stockVehicleStatus = StockVehicleStatus::factory()->create();

        $response = $this->get(route('stock-vehicle-status.show', $stockVehicleStatus));

        $response->assertOk();
        $response->assertViewIs('stockVehicleStatus.show');
        $response->assertViewHas('stockVehicleStatus');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $stockVehicleStatus = StockVehicleStatus::factory()->create();

        $response = $this->get(route('stock-vehicle-status.edit', $stockVehicleStatus));

        $response->assertOk();
        $response->assertViewIs('stockVehicleStatus.edit');
        $response->assertViewHas('stockVehicleStatus');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\StockVehicleStatusController::class,
            'update',
            \App\Http\Requests\StockVehicleStatusUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $stockVehicleStatus = StockVehicleStatus::factory()->create();

        $response = $this->put(route('stock-vehicle-status.update', $stockVehicleStatus));

        $stockVehicleStatus->refresh();

        $response->assertRedirect(route('stockVehicleStatus.index'));
        $response->assertSessionHas('stockVehicleStatus.id', $stockVehicleStatus->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $stockVehicleStatus = StockVehicleStatus::factory()->create();

        $response = $this->delete(route('stock-vehicle-status.destroy', $stockVehicleStatus));

        $response->assertRedirect(route('stockVehicleStatus.index'));

        $this->assertDeleted($stockVehicleStatus);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\StockVehicleStatusController::class,
            'store',
            \App\Http\Requests\StockVehicleStatusStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $status = $this->faker->word;
        $sparepartstock = Sparepartstock::factory()->create();

        $response = $this->post(route('stock-vehicle-status.store'), [
            'status' => $status,
            'sparepartstock_id' => $sparepartstock->id,
        ]);

        $stockVehicleStatuses = Status::query()
            ->where('status', $status)
            ->where('sparepartstock_id', $sparepartstock->id)
            ->get();
        $this->assertCount(1, $stockVehicleStatuses);
        $stockVehicleStatus = $stockVehicleStatuses->first();

        $response->assertRedirect(route('status.index'));
        $response->assertSessionHas('status.status', $status->status);
    }
}
