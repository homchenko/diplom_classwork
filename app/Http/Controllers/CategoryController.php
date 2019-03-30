<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function productList($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();

        $products = Product::where('is_active', 1)
          ->where('category_id', $category->id)->paginate(5);

        return view('front.product-list',
          compact('category', 'products'));
    }
}
