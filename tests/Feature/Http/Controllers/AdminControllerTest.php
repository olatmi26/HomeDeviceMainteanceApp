<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\AdminController
 */
class AdminControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $admins = Admin::factory()->count(3)->create();

        $response = $this->get(route('admin.index'));

        $response->assertOk();
        $response->assertViewIs('admin.index');
        $response->assertViewHas('admins');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('admin.create'));

        $response->assertOk();
        $response->assertViewIs('admin.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $admin = Admin::factory()->create();

        $response = $this->get(route('admin.show', $admin));

        $response->assertOk();
        $response->assertViewIs('admin.show');
        $response->assertViewHas('admin');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $admin = Admin::factory()->create();

        $response = $this->get(route('admin.edit', $admin));

        $response->assertOk();
        $response->assertViewIs('admin.edit');
        $response->assertViewHas('admin');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\AdminController::class,
            'update',
            \App\Http\Requests\AdminUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $admin = Admin::factory()->create();
        $firstName = $this->faker->word;
        $lastName = $this->faker->word;
        $phoneN0 = $this->faker->word;
        $email = $this->faker->safeEmail;
        $profilePicture = $this->faker->text;
        $password = $this->faker->password;

        $response = $this->put(route('admin.update', $admin), [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'phoneN0' => $phoneN0,
            'email' => $email,
            'profilePicture' => $profilePicture,
            'password' => $password,
        ]);

        $admin->refresh();

        $response->assertRedirect(route('admin.index'));
        $response->assertSessionHas('admin.id', $admin->id);

        $this->assertEquals($firstName, $admin->firstName);
        $this->assertEquals($lastName, $admin->lastName);
        $this->assertEquals($phoneN0, $admin->phoneN0);
        $this->assertEquals($email, $admin->email);
        $this->assertEquals($profilePicture, $admin->profilePicture);
        $this->assertEquals($password, $admin->password);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $admin = Admin::factory()->create();

        $response = $this->delete(route('admin.destroy', $admin));

        $response->assertRedirect(route('admin.index'));

        $this->assertDeleted($admin);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\AdminController::class,
            'store',
            \App\Http\Requests\AdminStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $firstName = $this->faker->word;
        $lastName = $this->faker->word;
        $phoneN0 = $this->faker->word;
        $email = $this->faker->safeEmail;
        $password = $this->faker->password;

        $response = $this->post(route('admin.store'), [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'phoneN0' => $phoneN0,
            'email' => $email,
            'password' => $password,
        ]);

        $admins = Admin::query()
            ->where('firstName', $firstName)
            ->where('lastName', $lastName)
            ->where('phoneN0', $phoneN0)
            ->where('email', $email)
            ->where('password', $password)
            ->get();
        $this->assertCount(1, $admins);
        $admin = $admins->first();

        $response->assertRedirect(route('admin.index'));
        $response->assertSessionHas('admin.firstName', $admin->firstName);
    }
}
