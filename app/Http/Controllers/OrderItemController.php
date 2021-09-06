<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderItemStoreRequest;
use App\Http\Requests\OrderItemUpdateRequest;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orderItems = OrderItem::all();

        return view('orderItem.index', compact('orderItems'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('orderItem.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\OrderItem $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, OrderItem $orderItem)
    {
        return view('orderItem.show', compact('orderItem'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\OrderItem $orderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, OrderItem $orderItem)
    {
        return view('orderItem.edit', compact('orderItem'));
    }

    /**
     * @param \App\Http\Requests\OrderItemUpdateRequest $request
     * @param \App\Models\OrderItem $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(OrderItemUpdateRequest $request, OrderItem $orderItem)
    {
        $orderItem->update($request->validated());

        $request->session()->flash('orderItem.id', $orderItem->id);

        return redirect()->route('orderItem.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\OrderItem $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, OrderItem $orderItem)
    {
        $orderItem->delete();

        return redirect()->route('orderItem.index');
    }

    /**
     * @param \App\Http\Requests\OrderItemStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderItemStoreRequest $request)
    {
        $orderItem = OrderItem::create($request->validated());

        $request->session()->flash('orderItem.order_id', $orderItem->order_id);

        return redirect()->route('orderItem.index');
    }
}
