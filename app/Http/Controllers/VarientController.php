<?php

namespace App\Http\Controllers;

use App\Models\Varient;
use Illuminate\Http\Request;
use App\Models\Product;

class VarientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($productId)
    {
        $product = Product::findOrFail($productId);
        $variants = $product->varients()->get(); // Assuming a hasMany relationship

        return view('admin.varient.index', compact('product', 'variants'));
    }

    // public function edit(Varient $variant)
    // {
    //     return view('variants.edit', compact('variant'));
    // }

    public function update(Request $request, Varient $variant)
    {
        $validated = $request->validate([
            'color' => 'required|string',
            'memory' => 'required|integer|min:1|max:50',
            'storage' => 'required|string',
            'quantity' => 'required|integer|min:0',
            'minimum_qty' => 'required|integer|min:0',
        ]);

        $variant->update($validated);

        return redirect()->route('varient.index', $variant->product_id)->with('success', 'Variant updated successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Varient $varient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Varient $varient)
    {
        //
    }
}
