<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\UserDocument;
use App\Models\Userdocument;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\UserDocumentController
 */
class UserDocumentControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $userDocuments = UserDocument::factory()->count(3)->create();

        $response = $this->get(route('user-document.index'));

        $response->assertOk();
        $response->assertViewIs('userDocument.index');
        $response->assertViewHas('userDocuments');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('user-document.create'));

        $response->assertOk();
        $response->assertViewIs('userDocument.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $userDocument = UserDocument::factory()->create();

        $response = $this->get(route('user-document.show', $userDocument));

        $response->assertOk();
        $response->assertViewIs('userDocument.show');
        $response->assertViewHas('userDocument');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $userDocument = UserDocument::factory()->create();

        $response = $this->get(route('user-document.edit', $userDocument));

        $response->assertOk();
        $response->assertViewIs('userDocument.edit');
        $response->assertViewHas('userDocument');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\UserDocumentController::class,
            'update',
            \App\Http\Requests\UserDocumentUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $userDocument = UserDocument::factory()->create();

        $response = $this->put(route('user-document.update', $userDocument));

        $userDocument->refresh();

        $response->assertRedirect(route('userDocument.index'));
        $response->assertSessionHas('userDocument.id', $userDocument->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $userDocument = UserDocument::factory()->create();

        $response = $this->delete(route('user-document.destroy', $userDocument));

        $response->assertRedirect(route('userDocument.index'));

        $this->assertDeleted($userDocument);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\UserDocumentController::class,
            'store',
            \App\Http\Requests\UserDocumentStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $IdCard = $this->faker->word;
        $PassportDocument = $this->faker->word;
        $LegalPapersUploaded = $this->faker->word;
        $OtherDocsHandPrint = $this->faker->word;

        $response = $this->post(route('user-document.store'), [
            'IdCard' => $IdCard,
            'PassportDocument' => $PassportDocument,
            'LegalPapersUploaded' => $LegalPapersUploaded,
            'OtherDocsHandPrint' => $OtherDocsHandPrint,
        ]);

        $userDocuments = Userdocument::query()
            ->where('IdCard', $IdCard)
            ->where('PassportDocument', $PassportDocument)
            ->where('LegalPapersUploaded', $LegalPapersUploaded)
            ->where('OtherDocsHandPrint', $OtherDocsHandPrint)
            ->get();
        $this->assertCount(1, $userDocuments);
        $userDocument = $userDocuments->first();

        $response->assertRedirect(route('userdocument.index'));
        $response->assertSessionHas('userdocument.PassportDocument', $userdocument->PassportDocument);
    }
}
