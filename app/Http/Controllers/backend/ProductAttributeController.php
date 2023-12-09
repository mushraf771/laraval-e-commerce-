<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ProductAttribute;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_attributes = ProductAttribute::paginate(5);
        return view('backend.admin.show.productattribute',compact('product_attributes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products =Products::all();
        return view('backend.admin.create.productattribute',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,ProductAttribute $productAttribute)
    {
        $data = $request->validate([
            'quantity'=>'required',
            'price'=>'required',
        ]);
        ProductAttribute::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
        // $productAttribute->save();
        return to_route('dashboard.product-attributes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductAttribute $productAttribute)
    {
        $products =Products::all();
        return view('backend.admin.update.updateproductattribute',compact('productAttribute','products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,ProductAttribute $productAttribute)
    {
        $validated= $request->validate([
            'quantity'=>'required',
            'price'=>'required',
        ]);
        $data = $validated;
        $productAttribute->update([
            "product_id"=>"$request->product_id",
            "quantity"=>"$request->quantity",
            "price"=>"$request->price",
        ]);
        return to_route('dashboard.product-attributes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductAttribute $productAttribute)
    {
       $productAttribute->delete();
      
       return to_route('dashboard.product-attributes.index');
    }
}
