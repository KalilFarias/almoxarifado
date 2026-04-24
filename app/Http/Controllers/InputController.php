<?php

namespace App\Http\Controllers;

use App\Models\Input;
use App\Models\Product;
use Illuminate\Http\Request;

class InputController extends Controller{
    public function index()
    {
        return Input::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $input = Input::create($data);

        // Atualiza estoque
        $product = Product::findOrFail($data['product_id']);
        $product->increment('current_stock', $data['quantity']);

        return response()->json($input, 201);
    }

    public function show($id)
    {
        return Input::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $input = Input::findOrFail($id);

        $data = $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $diff = $data['quantity'] - $input->quantity;

        $input->update($data);

        $input->product->increment('current_stock', $diff);

        return $input;
    }

    public function destroy($id)
    {
        $input = Input::findOrFail($id);

        $input->product->decrement('current_stock', $input->quantity);

        $input->delete();

        return response()->json(['message' => 'Deleted']);
    }
}
