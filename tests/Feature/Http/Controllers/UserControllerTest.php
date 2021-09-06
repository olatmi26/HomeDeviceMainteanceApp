<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\UserController
 */
class UserControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $users = User::factory()->count(3)->create();

        $response = $this->get(route('user.index'));

        $response->assertOk();
        $response->assertViewIs('user.index');
        $response->assertViewHas('users');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('user.create'));

        $response->assertOk();
        $response->assertViewIs('user.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $user = User::factory()->create();

        $response = $this->get(route('user.show', $user));

        $response->assertOk();
        $response->assertViewIs('user.show');
        $response->assertViewHas('user');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $user = User::factory()->create();

        $response = $this->get(route('user.edit', $user));

        $response->assertOk();
        $response->assertViewIs('user.edit');
        $response->assertViewHas('user');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\UserController::class,
            'update',
            \App\Http\Requests\UserUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $user = User::factory()->create();
        $Firstname = $this->faker->word;
        $Lastname = $this->faker->word;
        $MobileN01 = $this->faker->word;
        $MobileN02 = $this->faker->word;
        $MobileN03 = $this->faker->word;
        $ResidentialAddress = $this->faker->text;
        $City = $this->faker->word;
        $DOB = $this->faker->date();
        $email = $this->faker->safeEmail;
        $email_verified_at = $this->faker->dateTime();
        $password = $this->faker->password;

        $response = $this->put(route('user.update', $user), [
            'Firstname' => $Firstname,
            'Lastname' => $Lastname,
            'MobileN01' => $MobileN01,
            'MobileN02' => $MobileN02,
            'MobileN03' => $MobileN03,
            'ResidentialAddress' => $ResidentialAddress,
            'City' => $City,
            'DOB' => $DOB,
            'email' => $email,
            'email_verified_at' => $email_verified_at,
            'password' => $password,
        ]);

        $user->refresh();

        $response->assertRedirect(route('user.index'));
        $response->assertSessionHas('user.id', $user->id);

        $this->assertEquals($Firstname, $user->Firstname);
        $this->assertEquals($Lastname, $user->Lastname);
        $this->assertEquals($MobileN01, $user->MobileN01);
        $this->assertEquals($MobileN02, $user->MobileN02);
        $this->assertEquals($MobileN03, $user->MobileN03);
        $this->assertEquals($ResidentialAddress, $user->ResidentialAddress);
        $this->assertEquals($City, $user->City);
        $this->assertEquals(Carbon::parse($DOB), $user->DOB);
        $this->assertEquals($email, $user->email);
        $this->assertEquals($email_verified_at, $user->email_verified_at);
        $this->assertEquals($password, $user->password);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $user = User::factory()->create();

        $response = $this->delete(route('user.destroy', $user));

        $response->assertRedirect(route('user.index'));

        $this->assertDeleted($user);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\UserController::class,
            'store',
            \App\Http\Requests\UserStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $Firstname = $this->faker->word;
        $Lastname = $this->faker->word;
        $MobileN01 = $this->faker->word;
        $MobileN02 = $this->faker->word;
        $MobileN03 = $this->faker->word;
        $ResidentialAddress = $this->faker->text;
        $City = $this->faker->word;
        $DOB = $this->faker->date();
        $email = $this->faker->safeEmail;
        $email_verified_at = $this->faker->dateTime();
        $password = $this->faker->password;
        $department = Department::factory()->create();

        $response = $this->post(route('user.store'), [
            'Firstname' => $Firstname,
            'Lastname' => $Lastname,
            'MobileN01' => $MobileN01,
            'MobileN02' => $MobileN02,
            'MobileN03' => $MobileN03,
            'ResidentialAddress' => $ResidentialAddress,
            'City' => $City,
            'DOB' => $DOB,
            'email' => $email,
            'email_verified_at' => $email_verified_at,
            'password' => $password,
            'department_id' => $department->id,
        ]);

        $users = User::query()
            ->where('Firstname', $Firstname)
            ->where('Lastname', $Lastname)
            ->where('MobileN01', $MobileN01)
            ->where('MobileN02', $MobileN02)
            ->where('MobileN03', $MobileN03)
            ->where('ResidentialAddress', $ResidentialAddress)
            ->where('City', $City)
            ->where('DOB', $DOB)
            ->where('email', $email)
            ->where('email_verified_at', $email_verified_at)
            ->where('password', $password)
            ->where('department_id', $department->id)
            ->get();
        $this->assertCount(1, $users);
        $user = $users->first();

        $response->assertRedirect(route('user.index'));
        $response->assertSessionHas('user.Firstname', $user->Firstname);
    }
}
