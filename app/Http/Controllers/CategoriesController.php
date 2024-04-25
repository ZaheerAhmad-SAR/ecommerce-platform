<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Attribute;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('categories.index', compact('categories'));
    }


    public function create()
    {
    $categories = Category::with('children')->whereNull('parent_id')->get();
    $attributes = Attribute::all();
    return view('categories.create', compact('categories', 'attributes'));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     $category = Category::create($request->only('name'));

    //     // Attach attributes to the category
    //     $category->attachAttributes(
    //         $request->input('attributes', []),
    //         $request->input('mandatory', [])
    //     );

    //     return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    // }

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $data = [
        'name' => $request->input('name'),
        'parent_id' => $request->input('parent_id'), // Add parent_id to the data array
    ];

    $category = Category::create($data);

    // Attach attributes to the category
    $category->attachAttributes(
        $request->input('attributes', []),
        $request->input('mandatory', [])
    );

    return redirect()->route('categories.index')->with('success', 'Category created successfully.');
}
    

    public function edit(Category $category)
    {
        $attributes = Attribute::all();
        $categoryAttributes = $category->attributes()->pluck('id')->toArray();
        return view('categories.edit', compact('category', 'attributes', 'categoryAttributes'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($request->only('name'));

        // Attach attributes to the category
        $category->attachAttributes(
            $request->input('attributes', []),
            $request->input('mandatory', [])
        );

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }
}