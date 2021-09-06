<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderAssignToStoreRequest;
use App\Http\Requests\OrderAssignToUpdateRequest;
use App\Models\OrderAssignTo;
use Illuminate\Http\Request;

class OrderAssignToController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orderAssignTos = OrderAssignTo::all();

        return view('orderAssignTo.index', compact('orderAssignTos'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('orderAssignTo.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\OrderAssignTo $orderAssignTo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, OrderAssignTo $orderAssignTo)
    {
        return view('orderAssignTo.show', compact('orderAssignTo'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\OrderAssignTo $orderAssignTo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, OrderAssignTo $orderAssignTo)
    {
        return view('orderAssignTo.edit', compact('orderAssignTo'));
    }

    /**
     * @param \App\Http\Requests\OrderAssignToUpdateRequest $request
     * @param \App\Models\OrderAssignTo $orderAssignTo
     * @return \Illuminate\Http\Response
     */
    public function update(OrderAssignToUpdateRequest $request, OrderAssignTo $orderAssignTo)
    {
        $orderAssignTo->update($request->validated());

        $request->session()->flash('orderAssignTo.id', $orderAssignTo->id);

        return redirect()->route('orderAssignTo.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\OrderAssignTo $orderAssignTo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, OrderAssignTo $orderAssignTo)
    {
        $orderAssignTo->delete();

        return redirect()->route('orderAssignTo.index');
    }

    /**
     * @param \App\Http\Requests\OrderAssignToStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderAssignToStoreRequest $request)
    {
        $orderAssignTo = OrderAssignTo::create($request->validated());

        $request->session()->flash('orderAssignTo.order_id', $orderAssignTo->order_id);

        return redirect()->route('OrderAssignTo.index');
    }
}
