<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings\Category;
use App\Models\Hr\Product;

class PublicController extends Controller
{
    public function index()
    {
        $results = Category::orderBy('name', 'asc')->get();
        $count = $results->count();
        $categories = $results->chunk(4);

        return view('frontend.index', compact('categories', 'count'));
    }

    public function testdd(Request $request)
    {
        return $request->rowid;
    }

    public function language_change($locale)
    {
        \Session::put('locale', $locale);
        return redirect()->back();
    }


    public function gifts()
    {
        $user = request()->user();
        $claims = array();
        if($user) {
            $claims = Gift::where('points', '<=', $user->points)->orderBy('points', 'des')->get()->chunk(4);
            $gifts = Gift::where('points', '>', $user->points)->orderBy('points', 'asc')->get()->chunk(4);        
        } else {
            $gifts = Gift::orderBy('points', 'des')->get()->chunk(4);  
        }
        return view('frontend.gifts', compact('gifts', 'claims'));
    }


    public function category_products(Category $category)
    {
        $results = $category->products()->get();
        $count = $results->count();
        $products = $results->chunk(4);
        $categories = $category->department()->first()->categories()->get();
        return view('frontend.category-products', compact('products', 'count', 'categories', 'category'));
    }

    public function category_popular_products(Category $category)
    {
        $results = $category->products()->orderBy('hit_count', 'dsc')->get();
        $count = $results->count();
        $products = $results->chunk(4);
        $categories = $category->department()->first()->categories()->get();
        return view('frontend.category-products', compact('products', 'count', 'categories', 'category'));
    }

    public function category_new_products(Category $category)
    {
        $results = $category->products()->latest()->get();
        $count = $results->count();
        $products = $results->chunk(4);
        $categories = $category->department()->first()->categories()->get();
        return view('frontend.category-products', compact('products', 'count', 'categories', 'category'));
    }

    public function category_discunt_products(Category $category)
    {
        $results = $category->products()->where('old_price', '!=', 'null')->get();
        $count = $results->count();
        $products = $results->chunk(4);
        $categories = $category->department()->first()->categories()->get();
        return view('frontend.category-products', compact('products', 'count', 'categories', 'category'));
    }

    public function category_low_price_products(Category $category)
    {
        $results = $category->products()->orderBy('price', 'asc')->get();
        $count = $results->count();
        $products = $results->chunk(4);
        $categories = $category->department()->first()->categories()->get();
        return view('frontend.category-products', compact('products', 'count', 'categories', 'category'));
    }

    public function category_high_price_products(Category $category)
    {
        $results = $category->products()->orderBy('price', 'des')->get();
        $count = $results->count();
        $products = $results->chunk(4);
        $categories = $category->department()->first()->categories()->get();
        return view('frontend.category-products', compact('products', 'count', 'categories', 'category'));
    }

    

    public function popular_products()
    {
        return view('frontend.popular-products');         
    }

    public function product_details(Product $product)
    {
        return view('frontend.product-details', compact('product'));
    }
}
