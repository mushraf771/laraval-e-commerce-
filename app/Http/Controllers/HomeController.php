<?php

namespace App\Http\Controllers;

use App\Models\category;
// use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function redirect()
    {
        if (Auth::check()) {
            $user_type = Auth::user()->user_type;
            if ($user_type == '1') {
                return view('backend.admin.home');
            } else {

                return view('frontend.admin.welcome');
            }
        } else {
            return to_route('login');
        }
    }
    public function index()
    {
        // $categories = category::orderBy('id', 'asc')->where('menu', '1')->where('featured', '1')->take(4)->get();
        // $cate = Category::with('subcategories')->get();
        // $category = Category::with('subcategories')->find(1)->limit(4);
        $categories = Category::with(['subcategories' => function ($query) {
            $query->take(4);
        }])->take(4)->get();
        // dump($categories[0]->subcategories);
        return view('welcome', compact('categories'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
