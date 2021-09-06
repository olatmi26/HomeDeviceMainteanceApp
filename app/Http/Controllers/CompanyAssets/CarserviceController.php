<?php

namespace App\Http\Controllers\CompanyAssets;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyAssets\CarserviceStoreRequest;
use App\Http\Requests\CompanyAssets\CarserviceUpdateRequest;
use App\Models\CompanyAssets\Carservice;
use Illuminate\Http\Request;

class CarserviceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $carservices = Carservice::all();

        return view('carservice.index', compact('carservices'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('carservice.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\Carservice $carservice
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Carservice $carservice)
    {
        return view('carservice.show', compact('carservice'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\Carservice $carservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Carservice $carservice)
    {
        return view('carservice.edit', compact('carservice'));
    }

    /**
     * @param \App\Http\Requests\CompanyAssets\CarserviceUpdateRequest $request
     * @param \App\Models\CompanyAssets\Carservice $carservice
     * @return \Illuminate\Http\Response
     */
    public function update(CarserviceUpdateRequest $request, Carservice $carservice)
    {
        $carservice->update($request->validated());

        $request->session()->flash('carservice.id', $carservice->id);

        return redirect()->route('carservice.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\Carservice $carservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Carservice $carservice)
    {
        $carservice->delete();

        return redirect()->route('carservice.index');
    }

    /**
     * @param \App\Http\Requests\CompanyAssets\CarserviceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarserviceStoreRequest $request)
    {
        $carservice = Carservice::create($request->validated());

        $request->session()->flash('carservice.FaultRetified', $carservice->FaultRetified);

        return redirect()->route('carservice.index');
    }
}
