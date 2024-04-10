<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        [
            "id" => 1,
            "name" => "Linda Murphy",
            "price" => 100,
            "description" => "Linda Murphy is a 100 dollar product",
        ],[
            "id" => 2,
            "name" => "Linde Murphy",
            "price" => 200,
            "description" => "Linda Murphy is a 100 dollar product",
        ],[
            "id" => 3,
            "name" => "Lindi Murphy",
            "price" => 300,
            "description" => "Linda Murphy is a 100 dollar product",
        ],[
            "id" => 4,
            "name" => "Lindo Murphy",
            "price" => 400,
            "description" => "Linda Murphy is a 100 dollar product",
        ],[
            "id" => 5,
            "name" => "Lindu Murphy",
            "price" => 500,
            "description" => "Linda Murphy is a 100 dollar product",
        ],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " deleted successfully"
        ]);
    }
}
