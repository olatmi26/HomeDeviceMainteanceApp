<?php

namespace App\Http\Controllers\CompanyAssets;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyAssets\VehiclePartDetailStoreRequest;
use App\Http\Requests\CompanyAssets\VehiclePartDetailUpdateRequest;
use App\Models\CompanyAssets\VehiclePartDetail;
use Illuminate\Http\Request;

class VehiclePartDetailController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vehiclePartDetails = VehiclePartDetail::all();

        return view('vehiclePartDetail.index', compact('vehiclePartDetails'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('vehiclePartDetail.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\VehiclePartDetail $vehiclePartDetail
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, VehiclePartDetail $vehiclePartDetail)
    {
        return view('vehiclePartDetail.show', compact('vehiclePartDetail'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\VehiclePartDetail $vehiclePartDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, VehiclePartDetail $vehiclePartDetail)
    {
        return view('vehiclePartDetail.edit', compact('vehiclePartDetail'));
    }

    /**
     * @param \App\Http\Requests\CompanyAssets\VehiclePartDetailUpdateRequest $request
     * @param \App\Models\CompanyAssets\VehiclePartDetail $vehiclePartDetail
     * @return \Illuminate\Http\Response
     */
    public function update(VehiclePartDetailUpdateRequest $request, VehiclePartDetail $vehiclePartDetail)
    {
        $vehiclePartDetail->update($request->validated());

        $request->session()->flash('vehiclePartDetail.id', $vehiclePartDetail->id);

        return redirect()->route('vehiclePartDetail.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\VehiclePartDetail $vehiclePartDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, VehiclePartDetail $vehiclePartDetail)
    {
        $vehiclePartDetail->delete();

        return redirect()->route('vehiclePartDetail.index');
    }

    /**
     * @param \App\Http\Requests\CompanyAssets\VehiclePartDetailStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiclePartDetailStoreRequest $request)
    {
        $vehiclePartDetail = VehiclePartDetail::create($request->validated());

        $request->session()->flash('vehiclePartDetail.vehicle_id', $vehiclePartDetail->vehicle_id);

        return redirect()->route('vehiclePartDetail.index');
    }
}
