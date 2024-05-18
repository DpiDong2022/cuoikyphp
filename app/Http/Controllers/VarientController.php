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

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'color' => 'required',
            'memory' => 'required|numeric|min:0|max:50', // Memory should be between 1 and 50
            'storage' => 'required', // Customize storage validation as needed
            'quantity' => 'required|numeric|min:0',
            'minimum_qty' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Adjust image validation rules as needed
        ]);

        try {
            // Find the variant by ID
            $variant = Varient::findOrFail($id);

            // Update the variant with the new data
            $variant->color = $request->input('color');
            $variant->memory = $request->input('memory');
            $variant->storage = $request->input('storage');
            $variant->quantity = $request->input('quantity');
            $variant->price = $request->input('price');
            $variant->minimum_qty = $request->input('minimum_qty');

            // Handle image update if provided
            if ($request->hasFile('image')) {
                $imageBase64 = "data:image/webp;base64," . base64_encode(file_get_contents($request->file('image')));
                $variant->image = $imageBase64;
            }

            // Save the updated variant
            $variant->save();

            return redirect()->back()->with('success', 'Variant updated successfully');
        } catch (\Exception $e) {
            // Handle any errors that occur during the update process
            return redirect()->back()->with('error', 'Failed to update variant: ' . $e->getMessage());
        }
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
        try {
            // Validate the request
            $request->validate([
                'color' => 'required',
                'memory' => 'required|numeric|min:0|max:50', // Memory should be between 1 and 50
                'storage' => 'required', // Customize storage validation as needed
                'quantity' => 'required|numeric|min:0',
                'minimum_qty' => 'required|numeric|min:0',
                'price' => 'required|numeric|min:0',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Adjust image validation rules as needed
            ]);

            // Handle the image upload and convert to base64
            $image = $request->file('image');
            $image_base64 = "data:image/jpeg;base64," . base64_encode(file_get_contents($image));

            // Create a new variant
            $variant = new Varient();
            $variant->product_id = $request->product_id;
            $variant->color = $request->color;
            $variant->memory = $request->memory;
            $variant->storage = $request->storage;
            $variant->quantity = $request->quantity;
            $variant->minimum_qty = $request->minimum_qty;
            $variant->image = $image_base64;

            if ($variant->save()) {
                return redirect()->back()->with('success', 'Variant added successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to add variant. Please try again.');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Failed to add variant: ' . $th->getMessage());
        }
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
