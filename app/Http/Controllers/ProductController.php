<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index(){
        $data =  Product::all();
        return View('product',['products'=>$data]);
        
    }
    function detail($id){
        $data = Product::find($id);
        return View('detail',['product'=>$data]);
    }
    function search(Request $req){
        $data = Product::where('name','like','%'.$req->input('query'.'%'))->get();
        return View('search',['products'=>$data]);
    }
    function addToCart(Request $req){
       if($req->session()->has('user')){
        $cart = new cart();
        $cart->user_id = $req->session()->get('user')['id'];
        $cart->product_id = $req->product_id;
        $cart->save();
        //return cart::all();
        return redirect('/');

       }else{
            return redirect('/login');
       }
        
    }
    static function cartItem(){
        $userId = Session::get('user')['id'];
        $count = cart::where('user_id',$userId)->count();
        return $count;

    }
    function cartList(){
        if(Session::has('user')){
            $userId = Session::get('user')['id'];
            $products = DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cartId')
            ->get();

            return view('cartlist',['products'=>$products]);
        }else{
            return redirect('/login');
        }
    }
    function removeCart($id){
        cart::destroy($id);
        return redirect('/cartlist');
    }
    function orderNow(){
        if(Session::has('user')){
            $userId = Session::get('user')['id'];
            $total = DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->sum('products.price');

            return view('ordernow',['total'=>$total]);
        }else{
            return redirect('/login');
        }
    }
    function orderPlace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = cart::where('user_id',$userId)->get();
       foreach($allCart as $cart){
        $order =  new Order;
        $order->product_id = $cart['product_id'];
        $order->user_id = $cart['user_id'];
        $order->status = 'pending';
        $order->payment_method = $req->payment;
        $order->payment_status = 'pending';
        $order->address = $req->address;
        $order->save();
        cart::where('user_id',$userId)->delete();
       }
       return redirect('/');

    }
    function myOrders(){
        if(Session::has('user')){
            $userId = Session::get('user')['id'];
            $orders = DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();

            return view('myorders',['orders'=>$orders]);
        }else{
            return redirect('/login');
        } 
    }
}
