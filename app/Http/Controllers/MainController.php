<?php

namespace App\Http\Controllers;


// use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
class MainController extends Controller
{
    public function index()
    {
        $slider_products = Product::orderByDesc('id')->limit(3)->get();
        $latest_category = Category::orderByDesc('id')->limit(4)->get();
        $latest_products = Product::orderByDesc('id')->limit(9)->offset(3)->get();

        return view('website.home',  compact('slider_products', 'latest_category' ,'latest_products' ));
    }


    public function shop()
    {
        $products = Product::orderByDesc('id')->paginate(9);
        return view('website.shop',  compact('products'));

    }


    public function category($id)
    {
        $category = Category::with('products')->find($id);
        return view('website.category', compact('category'));

    }

    public function search(Request $request)
    {
        $products = Product::orderByDesc('id')->where('name_'.app()->currentLocale(), 'like', '%'.$request->s.'%')->get();

        return view('website.search',  compact('products'));
    }

    public function product($id)
    {
        $product = Product::findOrfail($id);
        $next = Product::select('id')->where('id' ,'>' , $product->id)->first();
        $prev = Product::select('id')->where('id' ,'<' , $product->id)->orderByDesc('id')->first();
        $related = Product::where('category_id', $product->category_id)->where('id', '!=' , $product->id )->get();

        return view('website.product',  compact('product' ,'next' ,'prev','related'));
    }
}

//reviews ,with( 'category')->
