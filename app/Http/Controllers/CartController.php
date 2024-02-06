<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index() {

    }

    public function cart_tambah($id){
        $cart = session("cart");

        $product = Product::detail_product($id);

        $cart[$id] = [
            "product_name" => $product->product_name,
            "price" => $product->price,
            "discount" => $product->discount,
            "jumlah" => 1
        ];

        session(["cart" => $cart]);

        return redirect ("/cart");
    }

    public function cart(){
        $cart = session("cart");
        return view("cart")->with("cart",$cart);
    }

    public function cart_hapus($id) {
        $cart = session("cart");
        unset($cart[$id]);
        session(["cart" => $cart ]);
        return redirect ("/cart");
    }
}
