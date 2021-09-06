<?php

namespace App\Http\Controllers\CompanyAssets;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyAssets\CarFuellingStoreRequest;
use App\Models\CompanyAssets\CarFuelling;
use Illuminate\Http\Request;

class CarFuellingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $carFuellings = CarFuelling::all();

        return view('carFuelling.index', compact('carFuellings'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('carFuelling.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\CarFuelling $carFuelling
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CarFuelling $carFuelling)
    {
        return view('carFuelling.show', compact('carFuelling'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\CarFuelling $carFuelling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CarFuelling $carFuelling)
    {
        $carFuelling->delete();

        return redirect()->route('carFuelling.index');
    }

    /**
     * @param \App\Http\Requests\CompanyAssets\CarFuellingStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarFuellingStoreRequest $request)
    {
        $carfuelling = Carfuelling::create($request->validated());

        $request->session()->flash('carfuelling.FuelLiter', $carfuelling->FuelLiter);

        return redirect()->route('carfuelling.index');
    }
}
