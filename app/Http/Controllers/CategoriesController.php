<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use Illuminate\Support\Facades\Log;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCategoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        Log::info($categories);
        return view('post', [
            'title' => $categories->name,
            // 'posts' => $categories->posts,
            'posts' => $categories->posts // solusi dari N+1 problem dengan menggunakan lazy eager loading untuk optimasi query
            // 'category' => $categories // Menggunakan variabel $category untuk instance model Categories
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
