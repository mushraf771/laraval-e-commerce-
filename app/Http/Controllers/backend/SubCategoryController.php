<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
// use App\Http\Requests\admin\SubCategoryStoreRequest;
use App\Models\category;
// use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = SubCategory::paginate(10);
        return view('backend.admin.show.subcategory',compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view('backend.admin.create.addsubcategory',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubCategoryStoreRequest $request)
    {
        // dd($request);
        $featured = $request->boolean(key: 'featured');
        $menu = $request->boolean(key: 'menu');
        $image = $request->file('image')->store('public/subcategories');
        SubCategory::create([
            'name' => $request->name,
            //   'slug'=>$request->slug,
            'category_id' => $request->category,
            'featured' => $featured,
            'menu' => $menu,
            'description' => $request->description,
            'image' => $image,
        ]);
        return to_route('dashboard.sub-categories.index')->with("success", "Category Added Successfully");
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
    public function edit(SubCategory $subCategory)
    {
       $categories = category::all();
       return view('backend.admin.update.updatesubcategory',compact('categories','subCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,SubCategory $subCategory)
    {
        $image = $subCategory->image;
        if ($request->hasFile('image')) {
            Storage::delete($subCategory->image);
            $image = $request->file('image')->store('public/subcategories');
        }
        $featured = $request->boolean(key: 'featured');
        $menu = $request->boolean(key: 'menu');
        $subCategory->update([
            'name' => $request->name,
            'category_id' => $request->category,
            'featured' => $featured,
            'menu' => $menu,
            'description' => $request->description,
            'image' => $image,
        ]);
        return to_route('dashboard.sub-categories.index')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        // dd($subCategory);
        if ($subCategory->image) {
            Storage::delete($subCategory->image);
        }
        
        // $category->menus()->detach();
        $subCategory->delete();
        return to_route('dashboard.sub-categories.index')->with('danger','Record Deleted Successfully');
    }
}
