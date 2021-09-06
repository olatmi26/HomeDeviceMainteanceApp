<?php

namespace App\Http\Controllers\CompanyAssets;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyAssets\VehicleDocumentStoreRequest;
use App\Http\Requests\CompanyAssets\VehicleDocumentUpdateRequest;
use App\Models\CompanyAssets\VehicleDocument;
use Illuminate\Http\Request;

class VehicleDocumentController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vehicleDocuments = VehicleDocument::all();

        return view('vehicleDocument.index', compact('vehicleDocuments'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('vehicleDocument.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\VehicleDocument $vehicleDocument
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, VehicleDocument $vehicleDocument)
    {
        return view('vehicleDocument.show', compact('vehicleDocument'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\VehicleDocument $vehicleDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, VehicleDocument $vehicleDocument)
    {
        return view('vehicleDocument.edit', compact('vehicleDocument'));
    }

    /**
     * @param \App\Http\Requests\CompanyAssets\VehicleDocumentUpdateRequest $request
     * @param \App\Models\CompanyAssets\VehicleDocument $vehicleDocument
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleDocumentUpdateRequest $request, VehicleDocument $vehicleDocument)
    {
        $vehicleDocument->update($request->validated());

        $request->session()->flash('vehicleDocument.id', $vehicleDocument->id);

        return redirect()->route('vehicleDocument.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyAssets\VehicleDocument $vehicleDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, VehicleDocument $vehicleDocument)
    {
        $vehicleDocument->delete();

        return redirect()->route('vehicleDocument.index');
    }

    /**
     * @param \App\Http\Requests\CompanyAssets\VehicleDocumentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleDocumentStoreRequest $request)
    {
        $vehicleDocument = VehicleDocument::create($request->validated());

        $request->session()->flash('vehicleDocument.PapersDocument', $vehicleDocument->PapersDocument);

        return redirect()->route('vehicleDocument.index');
    }
}
