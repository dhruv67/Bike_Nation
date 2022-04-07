<?php

namespace App\Modules\Cart\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Cart\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Modules\Product\Models\Product;

class CartController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function cart(Request $request)
    {
        $cartt = Cart::where('cart.users_id', Auth::id())->get();
        return view("Cart::cart",compact('cartt'));
        // return view("layouts.user.header",compact('cartts'));
    }
    public function removecart(Request $request)
    {
        if (Auth::check()&& Auth::user()->utype != 'a')
        {
            Cart::where('users_id',Auth::user()->id)->where('product_id',$request->pid)->delete();
        }  
    }

    public function rscart(Request $request)
    {
        if($request->pid) {
            $cart = session()->get('cart');
            if(isset($cart[$request->pid])) {
                unset($cart[$request->pid]);
                session()->put('cart', $cart);
            }
            return response()->json([
                "messages" => "product removed from cart with session",
                "status" => 200
            ]);
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function updateqty(Request $request)
    {
        if (Auth::check()&& Auth::user()->utype != 'a')
        {
            $validator = Validator::make($request->all(),[
                'qty'=>'numeric|min:1|max:2',
            ]);
            if($validator->fails())
            {
                return response()->json([
                    'status' => 400,
                    'errors' => $validator->getMessageBag()
                ]);
            }
            else
            {
                if(sizeof(Product::where('id',$request->pid)->where('stock', '>=', $request->qty)->get()))
                {
                    Cart::where('users_id',Auth::user()->id)->where('product_id',$request->pid)->update(['product_stock'=>$request->qty]);
                    $product = Product::where('status','y')->where('id',$request->pid)->first();
                    $price = $request->price * $request->qty;
                    // $total += $items->product_stock * $items->product->price;
                    return response()->json([
                        "product" => $product,
                        "price" => $price,
                        "messages" => "quantity updated",
                        "status" => 200,
                    ]);
                }
                else
                {
                    $product = Product::where('status','y')->where('id',$request->pid)->first();
                    return response()->json([
                        "product" => $product,
                        "messages" => "Maximum reached",
                        "status" => 500
                    ]);
                }
            }
        }
        else 
        {
            $validator = Validator::make($request->all(),[
                'qty'=>'numeric|min:1|max:2',
            ]);
            if($validator->fails())
            {
                return response()->json([
                    'status' => 400,
                    'errors' => $validator->getMessageBag()
                ]);
            }
            else
            {
                if(sizeof(Product::where('id',$request->pid)->where('stock', '>=', $request->qty)->get()))
                {
                    $cart = session()->get('cart');
                    $cart[$request->pid]["stock"] = $request->qty;
                    session()->put('cart', $cart);
                    session()->flash('success', 'Cart updated successfully');
                    $price = $request->price * $request->qty;
                    return response()->json([
                        "price" => $price,
                        "messages" => "quantity Updated with session",
                        "status" => 200,
                    ]);
                }
                else
                {
                    $product = Product::where('status','y')->where('id',$request->pid)->first();
                        return response()->json([
                            "product" => $product,
                            "messages" => "Maximum reached",
                            "status" => 500
                        ]);
                }
            }    
        }
    }
}
