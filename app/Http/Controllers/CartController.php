<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Rate;
use Cart;

session_start();

class CartController extends Controller
{
    public function save_cart(Request $request)
    {
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();

        $productid = $request->movieid_hidden;
        $product_info = DB::table('movies')->where('id', $productid)->first();

        $rating = Rate::where('movie_id', $product_info->id)->avg('rating');
        $rating = round($rating);

        $data['id'] = $product_info->id;
        $data['name'] =  $product_info->title;
        $data['qty'] =  1;
        $data['price'] =  0;
        $data['weight'] =  0;
        $data['options']['image'] =  $product_info->image;
        $data['options']['slug'] =  $product_info->slug;
        $data['options']['rating'] =  $rating;
        Cart::add($data);

        return Redirect::to('/show-cart');
    }

    public function delete_to_cart($rowId){
        Cart::update($rowId, 0);
        return Redirect::to('/show-cart');
    }
    public function show_cart()
    {
        $categoryList = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genreList = Genre::orderBy('id', 'DESC')->where('status', 1)->get();
        $countryList = Country::orderBy('title', 'DESC')->where('status', 1)->get();

        return view('pages.cart.show_cart', compact('categoryList', 'genreList', 'countryList'));
    }
}
