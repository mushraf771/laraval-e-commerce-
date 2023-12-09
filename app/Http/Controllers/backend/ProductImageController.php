<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\ProductImageStoreRequest;
use App\Models\ProductImage;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductImagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product_images = ProductImage::paginate(5);
        return view('backend.admin.show.productimage', compact('product_images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $products = Products::all();
        return view('backend.admin.create.productimage', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductImageStoreRequest $request, ProductImage $product_image, Products $products)
    {
        $thumbnail = $request->file('thumbnail')->store('public/products/thumbnails');
        foreach ($request->file('full') as $imagefile) {
            $image = new ProductImage;
            $path = $imagefile->store('public/products');
            $image->full = $path;
            $image->thumbnail = $thumbnail;
            $image->product_id = $request->product_id;
            $image->save();
        }
        // $thumbnail = $request->file('thumbnail')->store('public/products/thumbnails');
        // $product = DB::table('Products')->where('id', $request->product_id);

        // $full =$request->file('full')->store('public/products');
        // ProductImage::create([

        //     'product_id' => $request->product_id,
        //     'thumbnail' => $thumbnail,
        //      'full' => $full,
        // ]);
        return to_route('dashboard.product-images.index')->with("success", "Image Added Successfully");
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
    public function edit(ProductImage $product_image)
    {
        $products = Products::all();
        // dump($products);
        return view('backend.admin.update.updateproductimage', compact('products', 'product_image'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductImage $productImage)
    {
        // $data = $request->validate([
        //     'product_id' => 'required|string|max:255',
        //     'thumbnail' => 'nullable|array',
        //     'full' => 'nullable|array'
        // ]);
        // if ($request->hasFile('full')) {
        //     $images = [];
        //     foreach ($data['full'] as $image) {
        //         Storage::delete($productImage->product_image);
        //         $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
        //         // $image_path =  $image->storeAs('images', $fileName, 'public');
        //         $image_path =  $image->store('public/products');
        //         array_push($images, $image_path);
        //         $data['images'] = $images;
        //         $productImage->update($data);
        //     }
        // }
        // if ($request->hasFile('thumbnail')) {
        //     $image = $request->file('thumbnail')->store('public/products/thumbnail');
        // }
        // $productImage->update($data);

        $image = $productImage->full;
        $thumbnail = $productImage->thumbnail;
        if ($request->hasFile('full')) {
            Storage::delete($productImage->full);
            $image = $request->file('full')->store('public/products');
        }
        if ($request->hasFile('thumbnail')) {
            Storage::delete($productImage->thumbnail);
            $thumbnail = $request->file('thumbnail')->store('public/products/thumbnails');
        }
        $productImage->update([

            'full' => $image,
            'thumbnail' => $thumbnail,
            'product_id' => $request->product_id
        ]);
        return to_route('dashboard.product-images.index')->with('success', 'Image Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductImage $productImage)
    {
        // dd($category);
        Storage::delete($productImage->full);
        Storage::delete($productImage->thumbnail);
        // $productImage->menus()->detach();
        $productImage->delete();
        return to_route('dashboard.product-images.index')->with('danger','Record Deleted Successfully');
    }
}
