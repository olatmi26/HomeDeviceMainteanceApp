<?php

namespace App\Http\Controllers\CompanyAssets;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyAssets\VehicleStoreRequest;
use App\Http\Requests\CompanyAssets\VehicleUpdateRequest;
use App\Models\CompanyAssets\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vehicles = Vehicle::all();

        return view('vehicle.index', compact('vehicles'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('vehicle.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Vehicle $vehicle)
    {
        return view('vehicle.show', compact('vehicle'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Vehicle $vehicle)
    {
        return view('vehicle.edit', compact('vehicle'));
    }

    /**
     * @param \App\Http\Requests\CompanyAssets\VehicleUpdateRequest $request
     * @param \App\Models\CompanyAssets\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleUpdateRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->validated());

        $request->session()->flash('vehicle.id', $vehicle->id);

        return redirect()->route('vehicle.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\Vehicle $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('vehicle.index');
    }

    /**
     * @param \App\Http\Requests\CompanyAssets\VehicleStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleStoreRequest $request)
    {
        $vehicle = Vehicle::create($request->validated());

        $request->session()->flash('vehicle.name', $vehicle->name);

        return redirect()->route('Vehicle.index');
    }
}
