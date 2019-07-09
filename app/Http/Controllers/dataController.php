<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;

class dataController extends Controller
{
    public function showData()
    {
        $products = Product::all();
        return $products;
    }

    public function addToCart(Request $request)
    {
        $product = Product::find(request('id'))->toArray();
        $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product);
        $request->session()->put('cart', $cart);
        return json_encode($request->session()->get('cart'));
        //Following methods can be used for fetching data
//        print_r(request('id'));
//        Request::get('id');
//        $request->id;
//        echo "ID :" . $request->get('id');
    }

    public function fetchData(Request $request)
    {
        $cart = json_encode($request->session()->get('cart'));
        return $cart;
    }

    public function lessItem()
    {
        $id = \request('id');
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->lessItem($id);
        Session::put('cart', $cart);
        return json_encode(session()->get('cart'));
    }

    public function removeItem()
    {
        $id = \request('id');
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart', $cart);
        return json_encode(session()->get('cart'));
    }

    public function cleardata()
    {
        Session::forget('cart');
        return json_encode(session()->get('cart'));
    }
}
