<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockStoreRequest;
use App\Http\Requests\StockUpdateRequest;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $stocks = Stock::all();

        return view('stock.index', compact('stocks'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('stock.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Stock $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Stock $stock)
    {
        return view('stock.show', compact('stock'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Stock $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Stock $stock)
    {
        return view('stock.edit', compact('stock'));
    }

    /**
     * @param \App\Http\Requests\StockUpdateRequest $request
     * @param \App\Models\Stock $stock
     * @return \Illuminate\Http\Response
     */
    public function update(StockUpdateRequest $request, Stock $stock)
    {
        $stock->update($request->validated());

        $request->session()->flash('stock.id', $stock->id);

        return redirect()->route('stock.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Stock $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Stock $stock)
    {
        $stock->delete();

        return redirect()->route('stock.index');
    }

    /**
     * @param \App\Http\Requests\StockStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StockStoreRequest $request)
    {
        $stock = Stock::create($request->validated());

        $request->session()->flash('stock.partName', $stock->partName);

        return redirect()->route('stock.index');
    }
}
