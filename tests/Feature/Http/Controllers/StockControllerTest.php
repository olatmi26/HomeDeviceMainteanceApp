<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Category;
use App\Models\Stock;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\StockController
 */
class StockControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $stocks = Stock::factory()->count(3)->create();

        $response = $this->get(route('stock.index'));

        $response->assertOk();
        $response->assertViewIs('stock.index');
        $response->assertViewHas('stocks');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('stock.create'));

        $response->assertOk();
        $response->assertViewIs('stock.create');
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $stock = Stock::factory()->create();

        $response = $this->get(route('stock.show', $stock));

        $response->assertOk();
        $response->assertViewIs('stock.show');
        $response->assertViewHas('stock');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $stock = Stock::factory()->create();

        $response = $this->get(route('stock.edit', $stock));

        $response->assertOk();
        $response->assertViewIs('stock.edit');
        $response->assertViewHas('stock');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\StockController::class,
            'update',
            \App\Http\Requests\StockUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $stock = Stock::factory()->create();
        $partTrackN0 = $this->faker->word;
        $partName = $this->faker->word;
        $Maker = $this->faker->word;
        $ModelNo = $this->faker->word;
        $DateStock = $this->faker->dateTime();

        $response = $this->put(route('stock.update', $stock), [
            'partTrackN0' => $partTrackN0,
            'partName' => $partName,
            'Maker' => $Maker,
            'ModelNo' => $ModelNo,
            'DateStock' => $DateStock,
        ]);

        $stock->refresh();

        $response->assertRedirect(route('stock.index'));
        $response->assertSessionHas('stock.id', $stock->id);

        $this->assertEquals($partTrackN0, $stock->partTrackN0);
        $this->assertEquals($partName, $stock->partName);
        $this->assertEquals($Maker, $stock->Maker);
        $this->assertEquals($ModelNo, $stock->ModelNo);
        $this->assertEquals($DateStock, $stock->DateStock);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $stock = Stock::factory()->create();

        $response = $this->delete(route('stock.destroy', $stock));

        $response->assertRedirect(route('stock.index'));

        $this->assertDeleted($stock);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\StockController::class,
            'store',
            \App\Http\Requests\StockStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $category = Category::factory()->create();
        $partName = $this->faker->word;
        $UnitCost = $this->faker->numberBetween(-10000, 10000);
        $Maker = $this->faker->word;
        $ModelNo = $this->faker->word;
        $Type = $this->faker->word;
        $QtyInstock = $this->faker->numberBetween(-10000, 10000);

        $response = $this->post(route('stock.store'), [
            'category_id' => $category->id,
            'partName' => $partName,
            'UnitCost' => $UnitCost,
            'Maker' => $Maker,
            'ModelNo' => $ModelNo,
            'Type' => $Type,
            'QtyInstock' => $QtyInstock,
        ]);

        $stocks = Stock::query()
            ->where('category_id', $category->id)
            ->where('partName', $partName)
            ->where('UnitCost', $UnitCost)
            ->where('Maker', $Maker)
            ->where('ModelNo', $ModelNo)
            ->where('Type', $Type)
            ->where('QtyInstock', $QtyInstock)
            ->get();
        $this->assertCount(1, $stocks);
        $stock = $stocks->first();

        $response->assertRedirect(route('stock.index'));
        $response->assertSessionHas('stock.partName', $stock->partName);
    }
}
