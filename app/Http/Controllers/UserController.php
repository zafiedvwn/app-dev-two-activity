<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =[
                [
                    "id" => 1,
                    "name" => "Linda Murphy",
                    "username" => "saraweber",
                    "email" => "anthony04@example.com",
                    "phone" => "1-555-555-5555"
                ],
                [
                    "id" => 2,
                    "name" => "John Doe",
                    "username" => "johndoe",
                    "email" => "johndoe@example.com",
                    "phone" => "1-555-555-5555"
                ],
                [
                    "id" => 3,
                    "name" => "Jane Smith",
                    "username" => "janesmith",
                    "email" => "janesmith@example.com",
                    "phone" => "1-555-555-5555"
                ],
                [
                    "id" => 4,
                    "name" => "Robert Johnson",
                    "username" => "robertjohnson",
                    "email" => "robertjohnson@example.com",
                    "phone" => "1-555-555-5555"
                ],
                [
                    "id" => 5,
                    "name" => "Mary Johnson",
                    "username" => "maryjohnson",
                    "email" => "maryjohnson@example.com",
                    "phone" => "1-555-555-5555"
                ],
                [
                    "id" => 6,
                    "name" => "James Smith",
                    "username" => "jamessmith",
                    "email" => "jamessmith@example.com",
                    "phone" => "1-555-555-5555"
                ],
                [
                    "id" => 7,
                    "name" => "Patricia Williams",
                    "username" => "patriciawilliams",
                    "email" => "patriciawilliams@example.com",
                    "phone" => "1-555-555-5555"
                ],
                [
                    "id" => 8,
                    "name" => "Michael Brown",
                    "username" => "michaelbrown",
                    "email" => "michaelbrown@example.com",
                    "phone" => "1-555-555-5555"
                ],
                [
                    "id" => 9,
                    "name" => "Elizabeth Jones",
                    "username" => "elizabethjones",
                    "email" => "elizabethjones@example.com",
                    "phone" => "1-555-555-5555"
                ],
                [
                    "id" => 10,
                    "name" => "Molly Smith",
                    "username" => "sarahowens",
                    "email" => "jennifer11@example.org",
                    "phone" => "1-555-555-5555"
                ]

         ];

         return response()->json($data);
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
