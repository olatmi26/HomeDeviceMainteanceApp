<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\CarRepairEvidence;
use App\Models\Carrepairevidence;
use App\Models\Orderassignto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CarRepairEvidenceController
 */
class CarRepairEvidenceControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $carRepairEvidences = CarRepairEvidence::factory()->count(3)->create();

        $response = $this->get(route('car-repair-evidence.index'));

        $response->assertOk();
        $response->assertViewIs('carRepairEvidence.index');
        $response->assertViewHas('carRepairEvidences');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('car-repair-evidence.create'));

        $response->assertOk();
        $response->assertViewIs('carRepairEvidence.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $carRepairEvidence = CarRepairEvidence::factory()->create();

        $response = $this->get(route('car-repair-evidence.show', $carRepairEvidence));

        $response->assertOk();
        $response->assertViewIs('carRepairEvidence.show');
        $response->assertViewHas('carRepairEvidence');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $carRepairEvidence = CarRepairEvidence::factory()->create();

        $response = $this->get(route('car-repair-evidence.edit', $carRepairEvidence));

        $response->assertOk();
        $response->assertViewIs('carRepairEvidence.edit');
        $response->assertViewHas('carRepairEvidence');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CarRepairEvidenceController::class,
            'update',
            \App\Http\Requests\CarRepairEvidenceUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $carRepairEvidence = CarRepairEvidence::factory()->create();

        $response = $this->put(route('car-repair-evidence.update', $carRepairEvidence));

        $carRepairEvidence->refresh();

        $response->assertRedirect(route('carRepairEvidence.index'));
        $response->assertSessionHas('carRepairEvidence.id', $carRepairEvidence->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $carRepairEvidence = CarRepairEvidence::factory()->create();

        $response = $this->delete(route('car-repair-evidence.destroy', $carRepairEvidence));

        $response->assertRedirect(route('carRepairEvidence.index'));

        $this->assertDeleted($carRepairEvidence);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CarRepairEvidenceController::class,
            'store',
            \App\Http\Requests\CarRepairEvidenceStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $orderassignto = Orderassignto::factory()->create();

        $response = $this->post(route('car-repair-evidence.store'), [
            'orderassignto_id' => $orderassignto->id,
        ]);

        $carRepairEvidences = Carrepairevidence::query()
            ->where('orderassignto_id', $orderassignto->id)
            ->get();
        $this->assertCount(1, $carRepairEvidences);
        $carRepairEvidence = $carRepairEvidences->first();

        $response->assertRedirect(route('OrderAssignTo.index'));
        $response->assertSessionHas('carrepairevidence.successful', $carrepairevidence->successful);
    }
}
