<?php

namespace Tests\Feature\Http\Controllers\CompanyAssets;

use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CompanyAssets\VehicleController
 */
class VehicleControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $vehicles = Vehicle::factory()->count(3)->create();

        $response = $this->get(route('vehicle.index'));

        $response->assertOk();
        $response->assertViewIs('vehicle.index');
        $response->assertViewHas('vehicles');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('vehicle.create'));

        $response->assertOk();
        $response->assertViewIs('vehicle.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $vehicle = Vehicle::factory()->create();

        $response = $this->get(route('vehicle.show', $vehicle));

        $response->assertOk();
        $response->assertViewIs('vehicle.show');
        $response->assertViewHas('vehicle');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $vehicle = Vehicle::factory()->create();

        $response = $this->get(route('vehicle.edit', $vehicle));

        $response->assertOk();
        $response->assertViewIs('vehicle.edit');
        $response->assertViewHas('vehicle');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\VehicleController::class,
            'update',
            \App\Http\Requests\CompanyAssets\VehicleUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $vehicle = Vehicle::factory()->create();
        $type = $this->faker->word;
        $Model = $this->faker->word;
        $YearMake = $this->faker->date();
        $YearPurchased = $this->faker->date();
        $ChassisN0 = $this->faker->word;

        $response = $this->put(route('vehicle.update', $vehicle), [
            'type' => $type,
            'Model' => $Model,
            'YearMake' => $YearMake,
            'YearPurchased' => $YearPurchased,
            'ChassisN0' => $ChassisN0,
        ]);

        $vehicle->refresh();

        $response->assertRedirect(route('vehicle.index'));
        $response->assertSessionHas('vehicle.id', $vehicle->id);

        $this->assertEquals($type, $vehicle->type);
        $this->assertEquals($Model, $vehicle->Model);
        $this->assertEquals(Carbon::parse($YearMake), $vehicle->YearMake);
        $this->assertEquals(Carbon::parse($YearPurchased), $vehicle->YearPurchased);
        $this->assertEquals($ChassisN0, $vehicle->ChassisN0);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $vehicle = Vehicle::factory()->create();

        $response = $this->delete(route('vehicle.destroy', $vehicle));

        $response->assertRedirect(route('vehicle.index'));

        $this->assertDeleted($vehicle);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\VehicleController::class,
            'store',
            \App\Http\Requests\CompanyAssets\VehicleStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $type = $this->faker->word;
        $Model = $this->faker->word;
        $YearMake = $this->faker->date();
        $ChassisN0 = $this->faker->word;

        $response = $this->post(route('vehicle.store'), [
            'name' => $name,
            'type' => $type,
            'Model' => $Model,
            'YearMake' => $YearMake,
            'ChassisN0' => $ChassisN0,
        ]);

        $vehicles = Vehicle::query()
            ->where('name', $name)
            ->where('type', $type)
            ->where('Model', $Model)
            ->where('YearMake', $YearMake)
            ->where('ChassisN0', $ChassisN0)
            ->get();
        $this->assertCount(1, $vehicles);
        $vehicle = $vehicles->first();

        $response->assertRedirect(route('Vehicle.index'));
        $response->assertSessionHas('vehicle.name', $vehicle->name);
    }
}
