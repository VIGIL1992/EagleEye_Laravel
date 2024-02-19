<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('product.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request->all());
        $ext = $request->file('Image')->extension();
        $document_ext = $request->file('document')->extension();

        // $filename = Str::random(25);
        $filename = $request->product_name;
        $image_contents = file_get_contents($request->file('Image'));
        $image_path = "products/$filename.$ext";

        $document_contents = file_get_contents($request->file('document'));
        $document_path = "document/$filename.$document_ext";

        Storage::disk('public')->put($image_path, $image_contents);
        Storage::disk('public')->put($document_path, $document_contents);

        $product = Product::create([
            'name' => $request->product_name,
            'description' => $request->description,
            'image' => $image_path,
            'document' => $document_path,
            
        ]);

        
        // return response($product);
        return redirect(route('admin.products'))->with('message','Product added');
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
    public function edit(Product $product)
    {
        // dd($product);
        return view('admin.edit_product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('admin.products'));
    }
}
