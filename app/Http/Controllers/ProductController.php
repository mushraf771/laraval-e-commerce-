<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.product');
    }
    public function index2()
    {
        return view('frontend.pages.zoom');
    }
    public function signup()
    {
        return view('frontend.pages.signup');
    }
    public function login()
    {
        return view('frontend.pages.login');
    }
    public function checkout()
    {
        return view('frontend.pages.checkout');
    }
    
    public function wishlist()
    {
        return view('frontend.pages.wishlist');
    }
    public function cart()
    {
        return view('frontend.pages.cart');
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
