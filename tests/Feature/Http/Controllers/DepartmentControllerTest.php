<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\DepartmentController
 */
class DepartmentControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $departments = Department::factory()->count(3)->create();

        $response = $this->get(route('department.index'));

        $response->assertOk();
        $response->assertViewIs('department.index');
        $response->assertViewHas('departments');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('department.create'));

        $response->assertOk();
        $response->assertViewIs('department.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $department = Department::factory()->create();

        $response = $this->get(route('department.show', $department));

        $response->assertOk();
        $response->assertViewIs('department.show');
        $response->assertViewHas('department');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $department = Department::factory()->create();

        $response = $this->get(route('department.edit', $department));

        $response->assertOk();
        $response->assertViewIs('department.edit');
        $response->assertViewHas('department');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\DepartmentController::class,
            'update',
            \App\Http\Requests\DepartmentUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $department = Department::factory()->create();

        $response = $this->put(route('department.update', $department));

        $department->refresh();

        $response->assertRedirect(route('department.index'));
        $response->assertSessionHas('department.id', $department->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $department = Department::factory()->create();

        $response = $this->delete(route('department.destroy', $department));

        $response->assertRedirect(route('department.index'));

        $this->assertDeleted($department);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\DepartmentController::class,
            'store',
            \App\Http\Requests\DepartmentStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;

        $response = $this->post(route('department.store'), [
            'name' => $name,
        ]);

        $departments = Department::query()
            ->where('name', $name)
            ->get();
        $this->assertCount(1, $departments);
        $department = $departments->first();

        $response->assertRedirect(route('department.index'));
        $response->assertSessionHas('department.name', $department->name);
    }
}
