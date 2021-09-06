<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CustomerController
 */
class CustomerControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $customers = Customer::factory()->count(3)->create();

        $response = $this->get(route('customer.index'));

        $response->assertOk();
        $response->assertViewIs('customer.index');
        $response->assertViewHas('customers');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('customer.create'));

        $response->assertOk();
        $response->assertViewIs('customer.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $customer = Customer::factory()->create();

        $response = $this->get(route('customer.show', $customer));

        $response->assertOk();
        $response->assertViewIs('customer.show');
        $response->assertViewHas('customer');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $customer = Customer::factory()->create();

        $response = $this->get(route('customer.edit', $customer));

        $response->assertOk();
        $response->assertViewIs('customer.edit');
        $response->assertViewHas('customer');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CustomerController::class,
            'update',
            \App\Http\Requests\CustomerUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $customer = Customer::factory()->create();
        $FirstName = $this->faker->word;
        $LastName = $this->faker->word;
        $PhoneNo = $this->faker->word;
        $email = $this->faker->safeEmail;
        $Address = $this->faker->text;
        $password = $this->faker->password;
        $CustomerStatus = $this->faker->boolean;
        $email_verified_at = $this->faker->dateTime();

        $response = $this->put(route('customer.update', $customer), [
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'PhoneNo' => $PhoneNo,
            'email' => $email,
            'Address' => $Address,
            'password' => $password,
            'CustomerStatus' => $CustomerStatus,
            'email_verified_at' => $email_verified_at,
        ]);

        $customer->refresh();

        $response->assertRedirect(route('customer.index'));
        $response->assertSessionHas('customer.id', $customer->id);

        $this->assertEquals($FirstName, $customer->FirstName);
        $this->assertEquals($LastName, $customer->LastName);
        $this->assertEquals($PhoneNo, $customer->PhoneNo);
        $this->assertEquals($email, $customer->email);
        $this->assertEquals($Address, $customer->Address);
        $this->assertEquals($password, $customer->password);
        $this->assertEquals($CustomerStatus, $customer->CustomerStatus);
        $this->assertEquals($email_verified_at, $customer->email_verified_at);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $customer = Customer::factory()->create();

        $response = $this->delete(route('customer.destroy', $customer));

        $response->assertRedirect(route('customer.index'));

        $this->assertDeleted($customer);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CustomerController::class,
            'store',
            \App\Http\Requests\CustomerStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $FirstName = $this->faker->word;
        $LastName = $this->faker->word;
        $OtherName = $this->faker->word;
        $PhoneNo = $this->faker->word;
        $email = $this->faker->safeEmail;
        $Address = $this->faker->text;
        $password = $this->faker->password;

        $response = $this->post(route('customer.store'), [
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'OtherName' => $OtherName,
            'PhoneNo' => $PhoneNo,
            'email' => $email,
            'Address' => $Address,
            'password' => $password,
        ]);

        $customers = Customer::query()
            ->where('FirstName', $FirstName)
            ->where('LastName', $LastName)
            ->where('OtherName', $OtherName)
            ->where('PhoneNo', $PhoneNo)
            ->where('email', $email)
            ->where('Address', $Address)
            ->where('password', $password)
            ->get();
        $this->assertCount(1, $customers);
        $customer = $customers->first();

        $response->assertRedirect(route('customer.index'));
        $response->assertSessionHas('customer.FirstName', $customer->FirstName);
    }
}
