<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ItemSale;
use Illuminate\Http\Request;

class ItemSaleController extends Controller
{
    public function index()
    {
        $items = ItemSale::orderBy('id', 'desc')->paginate(10);

        return view('item_sale.index', compact('items'));
    }

    public function create()
    {
        return view('item_sale.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'item_code' => ['required', 'max:6', 'regex:/^[A-Za-z0-9]+$/'],
            'item_name' => ['required', 'max:50', 'regex:/^[A-Za-z0-9 ]+$/'],
            'quantity' => 'required|numeric',
            'expried_date' => 'required|date',
            'note' => 'nullable|max:60',
        ], [
            'item_code.required' => 'Item code is required.',
            'item_code.max' => 'Item code must not exceed 6 characters.',
            'item_code.regex' => 'Item code may only contain letters and numbers.',
            'item_name.required' => 'Item name is required.',
            'item_name.max' => 'Item name must not exceed 50 characters.',
            'item_name.regex' => 'Item name may only contain letters, numbers, and spaces.',
            'quantity.required' => 'Quantity is required.',
            'quantity.numeric' => 'Quantity must be a number.',
            'expried_date.required' => 'Expired date is required.',
            'expried_date.date' => 'Expired date must be a valid date.',
            'note.max' => 'Note must not exceed 60 characters.',
        ]);

        ItemSale::create($data);

        return redirect()->route('item-sale.index')->with('success', 'Item added successfully.');
    }

    public function edit($id)
    {
        $item = ItemSale::findOrFail($id);

        return view('item_sale.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'item_code' => ['required', 'max:6', 'regex:/^[A-Za-z0-9]+$/'],
            'item_name' => ['required', 'max:50', 'regex:/^[A-Za-z0-9 ]+$/'],
            'quantity' => 'required|numeric',
            'expried_date' => 'required|date',
            'note' => 'nullable|max:60',
        ], [
            'item_code.required' => 'Item code is required.',
            'item_code.max' => 'Item code must not exceed 6 characters.',
            'item_code.regex' => 'Item code may only contain letters and numbers.',
            'item_name.required' => 'Item name is required.',
            'item_name.max' => 'Item name must not exceed 50 characters.',
            'item_name.regex' => 'Item name may only contain letters, numbers, and spaces.',
            'quantity.required' => 'Quantity is required.',
            'quantity.numeric' => 'Quantity must be a number.',
            'expried_date.required' => 'Expired date is required.',
            'expried_date.date' => 'Expired date must be a valid date.',
            'note.max' => 'Note must not exceed 60 characters.',
        ]);

        $item = ItemSale::findOrFail($id);
        $item->update($data);

        return redirect()->route('item-sale.index')->with('success', 'Item updated successfully.');
    }

    public function destroy($id)
    {
        $item = ItemSale::findOrFail($id);
        $item->delete();

        return redirect()->route('item-sale.index')->with('success', 'Item deleted successfully.');
    }
}
