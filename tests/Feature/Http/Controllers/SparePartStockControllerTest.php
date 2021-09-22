<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\SparePartStock;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SparePartStockController
 */
class SparePartStockControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        // $sparePartStocks = SparePartStock::factory()->count(3)->create();

        $response = $this->get(route('spare-part-stock.index'));

        $response->assertOk();
        $response->assertViewIs('sparePartStock.index');
        $response->assertViewHas('sparePartStocks');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('spare-part-stock.create'));

        $response->assertOk();
        $response->assertViewIs('sparePartStock.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $sparePartStock = SparePartStock::factory()->create();

        $response = $this->get(route('spare-part-stock.show', $sparePartStock));

        $response->assertOk();
        $response->assertViewIs('sparePartStock.show');
        $response->assertViewHas('sparePartStock');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $sparePartStock = SparePartStock::factory()->create();

        $response = $this->get(route('spare-part-stock.edit', $sparePartStock));

        $response->assertOk();
        $response->assertViewIs('sparePartStock.edit');
        $response->assertViewHas('sparePartStock');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SparePartStockController::class,
            'update',
            \App\Http\Requests\SparePartStockUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $sparePartStock = SparePartStock::factory()->create();
        $partTrackN0 = $this->faker->word;
        $partName = $this->faker->word;
        $UnitCost = $this->faker->numberBetween(-10000, 10000);
        $Maker = $this->faker->word;
        $ModelNo = $this->faker->word;
        $DateStock = $this->faker->dateTime();
        $Availability = $this->faker->boolean;

        $response = $this->put(route('spare-part-stock.update', $sparePartStock), [
            'partTrackN0' => $partTrackN0,
            'partName' => $partName,
            'UnitCost' => $UnitCost,
            'Maker' => $Maker,
            'ModelNo' => $ModelNo,
            'DateStock' => $DateStock,
            'Availability' => $Availability,
        ]);

        $sparePartStock->refresh();

        $response->assertRedirect(route('sparePartStock.index'));
        $response->assertSessionHas('sparePartStock.id', $sparePartStock->id);

        $this->assertEquals($partTrackN0, $sparePartStock->partTrackN0);
        $this->assertEquals($partName, $sparePartStock->partName);
        $this->assertEquals($UnitCost, $sparePartStock->UnitCost);
        $this->assertEquals($Maker, $sparePartStock->Maker);
        $this->assertEquals($ModelNo, $sparePartStock->ModelNo);
        $this->assertEquals($DateStock, $sparePartStock->DateStock);
        $this->assertEquals($Availability, $sparePartStock->Availability);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $sparePartStock = SparePartStock::factory()->create();

        $response = $this->delete(route('spare-part-stock.destroy', $sparePartStock));

        $response->assertRedirect(route('sparePartStock.index'));

        $this->assertDeleted($sparePartStock);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\SparePartStockController::class,
            'store',
            \App\Http\Requests\SparePartStockStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $partTrackN0 = $this->faker->word;
        $partName = $this->faker->word;
        $UnitCost = $this->faker->numberBetween(-10000, 10000);
        $Maker = $this->faker->word;
        $ModelNo = $this->faker->word;
        $DateStock = $this->faker->dateTime();
        $Type = $this->faker->word;
        $QtyInstock = $this->faker->numberBetween(-10000, 10000);

        $response = $this->post(route('spare-part-stock.store'), [
            'partTrackN0' => $partTrackN0,
            'partName' => $partName,
            'UnitCost' => $UnitCost,
            'Maker' => $Maker,
            'ModelNo' => $ModelNo,
            'DateStock' => $DateStock,
            'Type' => $Type,
            'QtyInstock' => $QtyInstock,
        ]);

        $sparePartStocks = Sparepartstock::query()
            ->where('partTrackN0', $partTrackN0)
            ->where('partName', $partName)
            ->where('UnitCost', $UnitCost)
            ->where('Maker', $Maker)
            ->where('ModelNo', $ModelNo)
            ->where('DateStock', $DateStock)
            ->where('Type', $Type)
            ->where('QtyInstock', $QtyInstock)
            ->get();
        $this->assertCount(1, $sparePartStocks);
        $sparePartStock = $sparePartStocks->first();

        $response->assertRedirect(route('sparepartstock.index'));
        $response->assertSessionHas('sparepartstock.title', $sparepartstock->title);
    }
}
