<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Session;
use Session;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products',['products'=>$products]);
    }

    public function detail($id){
        $product = Product::find($id);
        return view("detail",['product' => $product]);
    }

    public function search(Request $request){
        $products = Product::where("name",'like','%'.$request->input('query').'%')->get();
        return view("search",['products'=> $products]);
    }
    
    public function addToCart(Request $request){
        if($request->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')->id;
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect("/");
        }else{
            return redirect('/login');
        }
    }

    public static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    public function cartList(){
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartList',['products'=> $products]);
    }

    public function removeCart($id){
        Cart::destroy($id);
        return redirect("/cartlist");
    }

    public function orderNow(){
        $userId = Session::get('user')['id'];
        $total = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');
        return view('ordernow',['total'=> $total]);

    }

}
