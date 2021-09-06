<?php

namespace Tests\Feature\Http\Controllers\CompanyAssets;

use App\Models\Vehicle;
use App\Models\Vehicleproperty;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CompanyAssets\VehiclepropertyController
 */
class VehiclepropertyControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $vehicleproperties = Vehicleproperty::factory()->count(3)->create();

        $response = $this->get(route('vehicleproperty.index'));

        $response->assertOk();
        $response->assertViewIs('vehicleproperty.index');
        $response->assertViewHas('vehicleproperties');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('vehicleproperty.create'));

        $response->assertOk();
        $response->assertViewIs('vehicleproperty.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $vehicleproperty = Vehicleproperty::factory()->create();

        $response = $this->get(route('vehicleproperty.show', $vehicleproperty));

        $response->assertOk();
        $response->assertViewIs('vehicleproperty.show');
        $response->assertViewHas('vehicleproperty');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $vehicleproperty = Vehicleproperty::factory()->create();

        $response = $this->get(route('vehicleproperty.edit', $vehicleproperty));

        $response->assertOk();
        $response->assertViewIs('vehicleproperty.edit');
        $response->assertViewHas('vehicleproperty');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\VehiclepropertyController::class,
            'update',
            \App\Http\Requests\CompanyAssets\VehiclepropertyUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $vehicleproperty = Vehicleproperty::factory()->create();

        $response = $this->put(route('vehicleproperty.update', $vehicleproperty));

        $vehicleproperty->refresh();

        $response->assertRedirect(route('vehicleproperty.index'));
        $response->assertSessionHas('vehicleproperty.id', $vehicleproperty->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $vehicleproperty = Vehicleproperty::factory()->create();

        $response = $this->delete(route('vehicleproperty.destroy', $vehicleproperty));

        $response->assertRedirect(route('vehicleproperty.index'));

        $this->assertDeleted($vehicleproperty);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\VehiclepropertyController::class,
            'store',
            \App\Http\Requests\CompanyAssets\VehiclepropertyStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $vehicle = Vehicle::factory()->create();
        $OilType = $this->faker->word;

        $response = $this->post(route('vehicleproperty.store'), [
            'vehicle_id' => $vehicle->id,
            'OilType' => $OilType,
        ]);

        $vehicleproperties = Vehicleproperty::query()
            ->where('vehicle_id', $vehicle->id)
            ->where('OilType', $OilType)
            ->get();
        $this->assertCount(1, $vehicleproperties);
        $vehicleproperty = $vehicleproperties->first();

        $response->assertRedirect(route('vehicleproperty.index'));
        $response->assertSessionHas('vehicleproperty.title', $vehicleproperty->title);
    }
}
