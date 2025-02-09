<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts(): JsonResponse
    {
        $products = Product::with('category')->get()->map(function ($product) {
            return [
                'id' => $product->id,
                'title' => $product->title,
                'price' => (float) $product->price,
                'description' => $product->description,
                'category' => $product->category->name ?? null,
                'image' => $product->image,
                'rating' => [
                    'rate' => (float) $product->rating_rate,
                    'count' => $product->rating_count,
                ],
            ];
        });

        return response()->json($products);
    }

    public function getAllCategories()
    {
        $categories = Category::orderBy('name')->pluck('name');
        return response()->json($categories);
    }

    public function getProductsByCategory($category): JsonResponse
    {
        $category = Category::where('name', $category)->first();
        $products = Product::where('category_id', $category->id)->get()->map(function ($product) {
            return [
                'id' => $product->id,
                'title' => $product->title,
                'price' => (float) $product->price,
                'description' => $product->description,
                'category' => $product->category->name ?? null,
                'image' => $product->image,
                'rating' => [
                    'rate' => (float) $product->rating_rate,
                    'count' => $product->rating_count,
                ],
            ];
        });

        return response()->json($products);
    }

    public function getProductDetails($id): JsonResponse
    {
        $product = Product::with('category')->findOrFail($id);

        $productdetails = [
            'id' => $product->id,
            'title' => $product->title,
            'price' => (float) $product->price,
            'description' => $product->description,
            'category' => $product->category->name ?? null,
            'image' => $product->image,
            'rating' => [
                'rate' => (float) $product->rating_rate,
                'count' => $product->rating_count,
            ],
        ];

        return response()->json($productdetails);
    }
}
