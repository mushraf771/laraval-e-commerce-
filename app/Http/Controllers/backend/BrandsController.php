<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\BrandStoreRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::paginate(10);
        return view('backend.admin.show.brand',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.create.brand');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandStoreRequest $request)
    {
        $logo = $request->file('logo')->store('public/brands');
        $top_brand = $request->boolean(key: 'top_brand');
        Brand::create([
        'name'=>$request->name,
        'logo'=> $logo,
        'top_brand'=> $top_brand,
        ]);
        return to_route('dashboard.brands.index')->with("success", "Brand Added Successfully");
    }
    // 7210-2228-6869-4053-360

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
    public function edit(Brand $brand)
    {
        return view('backend.admin.update.updatebrand',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandStoreRequest $request ,Brand $brand)
    {
        $logo = $brand->logo;
        $top_brand = $request->boolean(key: 'top_brand');
        var_dump($top_brand);
        if ($request->hasFile('logo')) {
            Storage::delete($brand->logo);
            $logo = $request->file('logo')->store('public/brands');
        }
        $brand->update([
            'name' => $request->name,
            'logo' => $logo,
            'top_brand' => $top_brand,

        ]);
        return to_route('dashboard.brands.index')->with('success', 'brand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        Storage::delete($brand->image);
        $brand->delete();
        return to_route('dashboard.brands.index')->with('danger','Brand Deleted Successfully');
    }
}
