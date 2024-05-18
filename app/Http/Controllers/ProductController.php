<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Varient;
use Illuminate\Http\Request;
use DB;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index', ['products' => $this->list()]);
    }
    public function publicIndex(){
        // $all_products = DB::table('products')
        // ->join('category','id','=','products.category_id')
        // ->orderby('products.id','desc')->get();
        $product = Product::all();
        // $category = Category::orderBy('id','ASC')->get();
        $all_products = DB::table('products')->orderby('products.id','desc')->limit(20)->get();

        //return view('public.product.index', ['products' => Product::all(), 'category' => Category::orderBy('name','ASC')->get()]) ;
        return view('public.product.index',compact('product','all_products'));
    }
    

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('admin.product.create', ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        // Validate the request data
        // Validate the request data
        try {
            $request->validate([
                'name' => 'required',
                'price' => 'required|numeric',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules as needed
                'description' => 'required',
                'discount' => 'nullable|numeric',
                'category_id' => 'required|exists:categories,id',
                'variants.*.color' => 'required',
                'variants.*.memory' => 'required',
                'variants.*.storage' => 'required',
                'variants.*.image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'variants.*.quantity' => 'required|numeric',
                'variants.*.minimum_qty' => 'required|numeric',
            ]);

            // Handle product creation
            $product = new Product();
            // Populate product details from the request
            $product->name = $request->name;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->discount = $request->discount;
            $product->category_id = $request->category_id;

            // Upload and store product image as Base64
            $productImageBase64 = base64_encode(file_get_contents($request->file('image')));
            $product->image = "data:image/jpeg;base64,".$productImageBase64;

            $product->save();

            // Handle variant creation
            foreach ($request->variants as $variantData) {
                $variant = new Varient();
                // Populate variant details from the request
                $variant->product_id = $product->id;
                $variant->color = $variantData['color'];
                $variant->memory = $variantData['memory'];
                $variant->storage = str_replace("GB", "", $variantData['storage']);;
                $variant->quantity = $variantData['quantity'];
                $variant->minimum_qty = $variantData['minimum_qty'];

                // Upload and store variant image as Base64
                $variantImageBase64 = base64_encode(file_get_contents($variantData['image']));
                $variant->image = "data:image/jpeg;base64,".$variantImageBase64;

                $variant->save();
            }

            return redirect()->route('product.create')->with('success', 'Product and variants created successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('product.create')->with('error', 'Error, faild: ' . $th->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('admin.product.edit', ['categories' => Category::all(), 'product' => Product::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        // $data = $request -> validate([
        //     'id' => ['required','int'],
        //     'category_id' => ['required','string'],
        //     'name'        => ['required','string'],
        //     'description' => ['required','string'],
        //     'price'       => ['required','int'],
        //     'discount'    => ['required','int'],
        //     'image'       => ['required','string']
        // ]);

        // dd($data);

        // Product::get;

        // return to_route("product.edit", $product) -> with('message','Sửa sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
    }

    public function list()
    {
        return Product::all();
    }
}
