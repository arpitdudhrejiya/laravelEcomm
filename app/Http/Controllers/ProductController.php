<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    function index()
    {
         $data = Product::all();

         return view('index',['products'=>$data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        
        return view('detail',['item'=>$data]);
    }

    function addToCart(Request $req)
    {
       if($req->session()->has('user'))
       {
           $cart = new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();

           return redirect('cartlist');
       }
       else
       {
           return redirect('login');
       }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartlist()
    {
        $userId = Session()->get('user')['id'];

        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cartid')
        ->orderBy('cart.created_at','asc')
        ->get();

        $total = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('cart',['products'=>$products,'total'=>$total]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);

        return redirect('cartlist');
    }

    function orderNow(Request $req)
    {
        $userId = Session()->get('user')['id'];

        $total = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('order',['total'=>$total]);
    }

    function addToOrder(Request $req)
    {
        $userId = Session()->get('user')['id'];

        $allCart = Cart::where('user_id',$userId)->get();

        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $req->paymenth_method;
            $order->payment_status = 'pending';
            $order->address = $req->address;
            $order->save(); 

            Cart::where('user_id',$userId)->delete();
        }
        return redirect('/');
    }

    function myOrder()
    {
        if(session()->has('user'))
        {

            $userId = Session()->get('user')['id'];
            $orders = DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->select('products.*','address','payment_status','status','payment_method','orders.id as orderId')
            ->orderBy('orders.id','asc')
            ->get();

            return view('myorder',['orders'=>$orders]);
        }
        else
        {
            return redirect('login');
        }
    }

    
}
