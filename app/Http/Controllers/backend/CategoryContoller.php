<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CategoryStoreRequest;
use App\Models\Brand;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = category::all();
        // $categories = DB::table('category')->simplePaginate(15);
        $categories = category::paginate(10);

        echo"<pre>";
       print_r($categories);
       echo"</pre>";


        return view('backend.admin.show.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view('backend.admin.create.addcategory', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {

        $featured = $request->boolean(key: 'featured');
        $menu = $request->boolean(key: 'menu');
        $image = $request->file('image')->store('public/categories');
        Category::create([
            'name' => $request->name,
            //   'slug'=>$request->slug,
            'parent_id' => $request->parent_id,
            'featured' => $featured,
            'menu' => $menu,
            'description' => $request->description,
            'image' => $image,
        ]);
        return to_route('dashboard.categories.index')->with("success", "Category Added Successfully");
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
    public function edit(category $category)
    {
        $categories = category::all();
        return view('backend.admin.update.updatecategory', compact('categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryStoreRequest $request, Category $category)
    {
        $image = $category->image;
        if ($request->hasFile('image')) {
            Storage::delete($category->image);
            $image = $request->file('image')->store('public/categories');
        }
        $featured = $request->boolean(key: 'featured');
        $menu = $request->boolean(key: 'menu');
        $category->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'featured' => $featured,
            'menu' => $menu,
            'description' => $request->description,
            'image' => $image,
        ]);
        return to_route('dashboard.categories.index')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        // dd($category);
        Storage::delete($category->image);
        // $category->menus()->detach();
        $category->delete();
        return to_route('dashboard.categories.index')->with('danger', 'Record Deleted Successfully');
    }
}
