<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(): Response
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'sku' => '#AB12312',
                'name' => 'Product A',
                'price' => 122292
            ],
            [
                'id' => 2,
                'sku' => '#CD12312',
                'name' => 'Product B',
                'price' => 20000
            ]
        ];
        return response(view('products.index', ['products' => $products]));
        // $test = "Hello World";
        // // return view('products.index', compact('test'));
        // return view('products.index', ['test' => $test]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        dd('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd('store');
    }
}
