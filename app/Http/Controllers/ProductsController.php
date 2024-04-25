<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }


   public function create()
    {
        $categories = Category::all();
        $attributes = [];

        // Get all categories with their attributes
        foreach ($categories as $category) {
            $attributes[$category->id] = $category->attributes;
        }

        return view('products.create', compact('categories', 'attributes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->save();

        // Attach product attributes
        $category = Category::findOrFail($request->category_id);
        $product->attributes()->attach(
            $request->input('attributes', [])
        );

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}
