<?php

namespace Tests\Feature\Http\Controllers\CompanyAssets;

use App\Models\Carservice;
use App\Models\Partfault;
use App\Models\ServiceBy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CompanyAssets\CarserviceController
 */
class CarserviceControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $carservices = Carservice::factory()->count(3)->create();

        $response = $this->get(route('carservice.index'));

        $response->assertOk();
        $response->assertViewIs('carservice.index');
        $response->assertViewHas('carservices');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('carservice.create'));

        $response->assertOk();
        $response->assertViewIs('carservice.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $carservice = Carservice::factory()->create();

        $response = $this->get(route('carservice.show', $carservice));

        $response->assertOk();
        $response->assertViewIs('carservice.show');
        $response->assertViewHas('carservice');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $carservice = Carservice::factory()->create();

        $response = $this->get(route('carservice.edit', $carservice));

        $response->assertOk();
        $response->assertViewIs('carservice.edit');
        $response->assertViewHas('carservice');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\CarserviceController::class,
            'update',
            \App\Http\Requests\CompanyAssets\CarserviceUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $carservice = Carservice::factory()->create();
        $DateService = $this->faker->dateTime();

        $response = $this->put(route('carservice.update', $carservice), [
            'DateService' => $DateService,
        ]);

        $carservice->refresh();

        $response->assertRedirect(route('carservice.index'));
        $response->assertSessionHas('carservice.id', $carservice->id);

        $this->assertEquals($DateService, $carservice->DateService);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $carservice = Carservice::factory()->create();

        $response = $this->delete(route('carservice.destroy', $carservice));

        $response->assertRedirect(route('carservice.index'));

        $this->assertDeleted($carservice);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\CarserviceController::class,
            'store',
            \App\Http\Requests\CompanyAssets\CarserviceStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $vehicle_id = $this->faker->numberBetween(-10000, 10000);
        $DateService = $this->faker->dateTime();
        $partfault = Partfault::factory()->create();
        $RepairCost = $this->faker->numberBetween(-10000, 10000);
        $ServiceBy = ServiceBy::factory()->create();

        $response = $this->post(route('carservice.store'), [
            'vehicle_id' => $vehicle_id,
            'DateService' => $DateService,
            'partfault_id' => $partfault->id,
            'RepairCost' => $RepairCost,
            'ServiceBy' => $ServiceBy->id,
        ]);

        $carservices = Carservice::query()
            ->where('vehicle_id', $vehicle_id)
            ->where('DateService', $DateService)
            ->where('partfault_id', $partfault->id)
            ->where('RepairCost', $RepairCost)
            ->where('ServiceBy', $ServiceBy->id)
            ->get();
        $this->assertCount(1, $carservices);
        $carservice = $carservices->first();

        $response->assertRedirect(route('carservice.index'));
        $response->assertSessionHas('carservice.FaultRetified', $carservice->FaultRetified);
    }
}
