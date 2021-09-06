<?php

namespace Tests\Feature\Http\Controllers\CompanyAssets;

use App\Models\CarFuelling;
use App\Models\Carfuelling;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CompanyAssets\CarFuellingController
 */
class CarFuellingControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $carFuellings = CarFuelling::factory()->count(3)->create();

        $response = $this->get(route('car-fuelling.index'));

        $response->assertOk();
        $response->assertViewIs('carFuelling.index');
        $response->assertViewHas('carFuellings');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('car-fuelling.create'));

        $response->assertOk();
        $response->assertViewIs('carFuelling.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $carFuelling = CarFuelling::factory()->create();

        $response = $this->get(route('car-fuelling.show', $carFuelling));

        $response->assertOk();
        $response->assertViewIs('carFuelling.show');
        $response->assertViewHas('carFuelling');
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $carFuelling = CarFuelling::factory()->create();

        $response = $this->delete(route('car-fuelling.destroy', $carFuelling));

        $response->assertRedirect(route('carFuelling.index'));

        $this->assertDeleted($carFuelling);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\CarFuellingController::class,
            'store',
            \App\Http\Requests\CompanyAssets\CarFuellingStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $vehicle_id = $this->faker->numberBetween(-10000, 10000);
        $FuelLiter = $this->faker->numberBetween(-10000, 10000);
        $UnitCost = $this->faker->numberBetween(-10000, 10000);

        $response = $this->post(route('car-fuelling.store'), [
            'vehicle_id' => $vehicle_id,
            'FuelLiter' => $FuelLiter,
            'UnitCost' => $UnitCost,
        ]);

        $carFuellings = Carfuelling::query()
            ->where('vehicle_id', $vehicle_id)
            ->where('FuelLiter', $FuelLiter)
            ->where('UnitCost', $UnitCost)
            ->get();
        $this->assertCount(1, $carFuellings);
        $carFuelling = $carFuellings->first();

        $response->assertRedirect(route('carfuelling.index'));
        $response->assertSessionHas('carfuelling.FuelLiter', $carfuelling->FuelLiter);
    }
}
