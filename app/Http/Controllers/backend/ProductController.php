<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\ProductStoreRequest;
use App\Models\Brand;
use App\Models\category;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use App\Models\Products;
use App\Models\ProductSize;
use App\Models\Size;
// use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    //    public function add_product(){
    //     $product = new Products();


    //    }


    /**
     * Display a listing of the resource.
     */
    public function index(Products $products , ProductAttribute $productAttribute ,ProductSize $productSize)
    {
        $products = Products::paginate(5);
        // $size = ProductAttribute::find(1)->product_id;
        // $size = ProductSize::find(product_id = 4)->size;
        $size = ProductSize::where('product_id', $products)->get();
        $attributes = ProductAttribute::where('product_id', $productAttribute->id)->get();
        // dd($size,$attributes,$products);
        return view('backend.admin.show.product', compact('products','size','attributes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $brands = Brand::all();
        $sub_categories = SubCategory::all();
        $categories = category::all();
        return view('backend.admin.create.addproduct', compact('brands', 'sub_categories', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request, Products $products)
    {

        // dd($request);
        $featured = $request->boolean(key: 'featured');
        $status = $request->boolean(key: 'status');
        $product = new Products();
        $product->name = $request->name;
        // $product->color = $request->color;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->quantity = $request->quantity;
        // $product->weight = $request->weight;
        $product->description = $request->description;
        // $product->subcategory_id = $request->category;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand_id;
        $product->status = $status;
        $product->featured = $featured;
        $product->save();

        // $product -> size = $request->size;
        // $input = $request->all();
        // $size = $request->size;
        // $size = implode(',', $size);
        // dd($size);
        // $product->size = $size;



        // Products::create([
        //     'name' => $request->name,
        //     'color' => $request->color,
        //     'price' => $request->price,
        //     'sale_price' => $request->sale_price,
        //     'quantity' => $request->quantity,
        //     'weight' => $request->weight,
        //     'description' => $request->description,
        //     'subcategory_id' => $request->category,
        //     'brand_id' => $request->brand_id,
        //     'status' => $status,
        //     'featured' => $featured,

        // ]);

        // return to_route('dashboard.product-images.create')->with("success", "Product Added Successfully");

        // $thumbnail = $request->file('thumbnail')->store('public/products/thumbnails');
        // foreach ($request->file('full') as $imagefile) {
        //     $image = new ProductImage;
        //     $path = $imagefile->store('public/products');
        //     $image->full = $path;
        //      $image->thumbnail = $thumbnail;
        //     $image->product_id = $request->product_id;
        //     $image->save();
        // }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->getClientOriginalName();
                $path = $image->store('public/products');
                // $path = $image->storeAs('public/images', $filename);
                $productImage = new ProductImage([
                    // 'images' => $filename,
                    'images' => $path,
                ]);
                $productImage->product_id = $product->id;
                $productImage->save();
            }
        }
        if ($request->size) {
            foreach ($request->size as $productSize) {
                $size = new ProductSize([
                    'size' => $productSize,
                ]);
                $size->product_id = $product->id;
                $size->save();
            }
        }

        $validatedData = $request->validate([
            // 'name' => 'required|string|max:255',
            // 'description' => 'required|string',
            // 'price' => 'required|numeric',
            'attributes.*.color' => 'required|string|max:255',
            'attributes.*.price' => 'required|numeric',
            'attributes.*.quantity' => 'required|string|max:255',
        ]);
        foreach ($validatedData['attributes'] as $attributeData) {
            $attribute = new ProductAttribute();
            $attribute->color = $attributeData['color'];
            $attribute->price = $attributeData['price'];
            $attribute->quantity = $attributeData['quantity'];
            $attribute->product_id = $product->id;
            $attribute->save();
        }
        // dd($request);
        // $productAttribute = new ProductAttribute();
        // $productAttribute ->$request->attributes->color;
        // if ($request->has('attributes')) {
        // foreach ($request->attributes as $attribute) {
        //     $productAttribute = new ProductAttribute([
        //         'color' => $attribute['color'],
        //         'price' => $attribute['price'],
        //         'quantity' => $attribute['quantity'],
        // 'size' => $attribute['size'],
        //     ]);
        //     $productAttribute->product_id = $product->id;
        //     $productAttribute->save();
        // }

        // }
        return redirect()->route('dashboard.products.index')
            ->with('success', 'Product created successfully.');
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
    public function edit(Products $product)
    {
        $categories = SubCategory::all();
        // foreach ($categories  as $category) {
        // $a = in_array($category->id,$product->categories->pluck('id')->toArray()) ? 'selected' : '';
        // }
        // dd($a);
        // $sel = $categories->where('id',$product->id);
        $brands = Brand::all();
        return view('backend.admin.update.updateproduct', compact('categories', 'product', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductStoreRequest $request, Products $product)
    {
        $featured = $request->boolean(key: 'featured');
        $status = $request->boolean(key: 'status');
        $product->update([
            'name' => $request->name,
            'color' => $request->color,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'quantity' => $request->quantity,
            'weight' => $request->weight,
            'description' => $request->description,
            'subcategory_id' => $request->category,
            'brand_id' => $request->brand_id,
            'status' => $status,
            'featured' => $featured,

        ]);
        return to_route('dashboard.product-images.create')->with("success", "Product Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        // dd($category);
        //  Storage::delete($category->image);
        // $category->menus()->detach();
        $product->delete();
        return to_route('dashboard.products.index')->with('danger', 'Record Deleted Successfully');
    }
}
