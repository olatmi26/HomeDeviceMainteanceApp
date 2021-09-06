<?php

namespace Tests\Feature\Http\Controllers\CompanyAssets;

use App\Models\VehiclePartDetail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CompanyAssets\VehiclePartDetailController
 */
class VehiclePartDetailControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $vehiclePartDetails = VehiclePartDetail::factory()->count(3)->create();

        $response = $this->get(route('vehicle-part-detail.index'));

        $response->assertOk();
        $response->assertViewIs('vehiclePartDetail.index');
        $response->assertViewHas('vehiclePartDetails');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('vehicle-part-detail.create'));

        $response->assertOk();
        $response->assertViewIs('vehiclePartDetail.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $vehiclePartDetail = VehiclePartDetail::factory()->create();

        $response = $this->get(route('vehicle-part-detail.show', $vehiclePartDetail));

        $response->assertOk();
        $response->assertViewIs('vehiclePartDetail.show');
        $response->assertViewHas('vehiclePartDetail');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $vehiclePartDetail = VehiclePartDetail::factory()->create();

        $response = $this->get(route('vehicle-part-detail.edit', $vehiclePartDetail));

        $response->assertOk();
        $response->assertViewIs('vehiclePartDetail.edit');
        $response->assertViewHas('vehiclePartDetail');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\VehiclePartDetailController::class,
            'update',
            \App\Http\Requests\CompanyAssets\VehiclePartDetailUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $vehiclePartDetail = VehiclePartDetail::factory()->create();

        $response = $this->put(route('vehicle-part-detail.update', $vehiclePartDetail));

        $vehiclePartDetail->refresh();

        $response->assertRedirect(route('vehiclePartDetail.index'));
        $response->assertSessionHas('vehiclePartDetail.id', $vehiclePartDetail->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $vehiclePartDetail = VehiclePartDetail::factory()->create();

        $response = $this->delete(route('vehicle-part-detail.destroy', $vehiclePartDetail));

        $response->assertRedirect(route('vehiclePartDetail.index'));

        $this->assertDeleted($vehiclePartDetail);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\VehiclePartDetailController::class,
            'store',
            \App\Http\Requests\CompanyAssets\VehiclePartDetailStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $vehicle_id = $this->faker->numberBetween(-10000, 10000);
        $OilType = $this->faker->word;
        $OilMeter = $this->faker->numberBetween(-10000, 10000);
        $OilfilterGuaged = $this->faker->boolean;
        $BatteryUsed = $this->faker->word;
        $ACCondition = $this->faker->boolean;

        $response = $this->post(route('vehicle-part-detail.store'), [
            'vehicle_id' => $vehicle_id,
            'OilType' => $OilType,
            'OilMeter' => $OilMeter,
            'OilfilterGuaged' => $OilfilterGuaged,
            'BatteryUsed' => $BatteryUsed,
            'ACCondition' => $ACCondition,
        ]);

        $vehiclePartDetails = VehiclePartDetail::query()
            ->where('vehicle_id', $vehicle_id)
            ->where('OilType', $OilType)
            ->where('OilMeter', $OilMeter)
            ->where('OilfilterGuaged', $OilfilterGuaged)
            ->where('BatteryUsed', $BatteryUsed)
            ->where('ACCondition', $ACCondition)
            ->get();
        $this->assertCount(1, $vehiclePartDetails);
        $vehiclePartDetail = $vehiclePartDetails->first();

        $response->assertRedirect(route('vehiclePartDetail.index'));
        $response->assertSessionHas('vehiclePartDetail.vehicle_id', $vehiclePartDetail->vehicle_id);
    }
}
