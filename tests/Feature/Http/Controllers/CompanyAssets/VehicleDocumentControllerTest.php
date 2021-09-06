<?php

namespace Tests\Feature\Http\Controllers\CompanyAssets;

use App\Models\VehicleDocument;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CompanyAssets\VehicleDocumentController
 */
class VehicleDocumentControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $vehicleDocuments = VehicleDocument::factory()->count(3)->create();

        $response = $this->get(route('vehicle-document.index'));

        $response->assertOk();
        $response->assertViewIs('vehicleDocument.index');
        $response->assertViewHas('vehicleDocuments');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('vehicle-document.create'));

        $response->assertOk();
        $response->assertViewIs('vehicleDocument.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $vehicleDocument = VehicleDocument::factory()->create();

        $response = $this->get(route('vehicle-document.show', $vehicleDocument));

        $response->assertOk();
        $response->assertViewIs('vehicleDocument.show');
        $response->assertViewHas('vehicleDocument');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $vehicleDocument = VehicleDocument::factory()->create();

        $response = $this->get(route('vehicle-document.edit', $vehicleDocument));

        $response->assertOk();
        $response->assertViewIs('vehicleDocument.edit');
        $response->assertViewHas('vehicleDocument');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\VehicleDocumentController::class,
            'update',
            \App\Http\Requests\CompanyAssets\VehicleDocumentUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $vehicleDocument = VehicleDocument::factory()->create();

        $response = $this->put(route('vehicle-document.update', $vehicleDocument));

        $vehicleDocument->refresh();

        $response->assertRedirect(route('vehicleDocument.index'));
        $response->assertSessionHas('vehicleDocument.id', $vehicleDocument->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $vehicleDocument = VehicleDocument::factory()->create();

        $response = $this->delete(route('vehicle-document.destroy', $vehicleDocument));

        $response->assertRedirect(route('vehicleDocument.index'));

        $this->assertDeleted($vehicleDocument);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CompanyAssets\VehicleDocumentController::class,
            'store',
            \App\Http\Requests\CompanyAssets\VehicleDocumentStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $vehicle_id = $this->faker->numberBetween(-10000, 10000);
        $DocumentName = $this->faker->word;
        $DocumentPaper = $this->faker->word;

        $response = $this->post(route('vehicle-document.store'), [
            'vehicle_id' => $vehicle_id,
            'DocumentName' => $DocumentName,
            'DocumentPaper' => $DocumentPaper,
        ]);

        $vehicleDocuments = VehicleDocument::query()
            ->where('vehicle_id', $vehicle_id)
            ->where('DocumentName', $DocumentName)
            ->where('DocumentPaper', $DocumentPaper)
            ->get();
        $this->assertCount(1, $vehicleDocuments);
        $vehicleDocument = $vehicleDocuments->first();

        $response->assertRedirect(route('vehicleDocument.index'));
        $response->assertSessionHas('vehicleDocument.PapersDocument', $vehicleDocument->PapersDocument);
    }
}
