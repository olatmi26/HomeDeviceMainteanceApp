<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRepairEvidenceStoreRequest;
use App\Http\Requests\CarRepairEvidenceUpdateRequest;
use App\Models\CarRepairEvidence;
use Illuminate\Http\Request;

class CarRepairEvidenceController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $carRepairEvidences = CarRepairEvidence::all();

        return view('carRepairEvidence.index', compact('carRepairEvidences'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('carRepairEvidence.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CarRepairEvidence $carRepairEvidence
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CarRepairEvidence $carRepairEvidence)
    {
        return view('carRepairEvidence.show', compact('carRepairEvidence'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CarRepairEvidence $carRepairEvidence
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, CarRepairEvidence $carRepairEvidence)
    {
        return view('carRepairEvidence.edit', compact('carRepairEvidence'));
    }

    /**
     * @param \App\Http\Requests\CarRepairEvidenceUpdateRequest $request
     * @param \App\Models\CarRepairEvidence $carRepairEvidence
     * @return \Illuminate\Http\Response
     */
    public function update(CarRepairEvidenceUpdateRequest $request, CarRepairEvidence $carRepairEvidence)
    {
        $carRepairEvidence->update($request->validated());

        $request->session()->flash('carRepairEvidence.id', $carRepairEvidence->id);

        return redirect()->route('carRepairEvidence.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CarRepairEvidence $carRepairEvidence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CarRepairEvidence $carRepairEvidence)
    {
        $carRepairEvidence->delete();

        return redirect()->route('carRepairEvidence.index');
    }

    /**
     * @param \App\Http\Requests\CarRepairEvidenceStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRepairEvidenceStoreRequest $request)
    {
        $carrepairevidence = Carrepairevidence::create($request->validated());

        $request->session()->flash('carrepairevidence.successful', $carrepairevidence->successful);

        return redirect()->route('OrderAssignTo.index');
    }
}
