<?php

namespace App\Modules\Order\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Product\Models\Product;
use App\Modules\Cart\Models\Cart;
use App\Modules\BillingShipping\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Modules\Order\Models\Order_details;
use App\Modules\Order\Models\Order;
use App\Modules\Payment\Models\Payment;
use Illuminate\Support\Facades\Validator;


class OrderController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcomeuser(Request $r)
    {
        $checkout_session = session('checkout');
        $bid = $checkout_session["billing_id"];
        $sid = $checkout_session["shipping_id"];

        $cart_t = Cart::where('users_id', Auth::user()->id)->get();
        $billing_id = Address::where('id',(int)$bid)->get();
        $shipping_id = Address::where('id',(int)$sid)->get();
        return view("Order::orderuser",compact('cart_t','billing_id','shipping_id'));
    }

    public function getorder(Request $r)
    {
        $checkout_session = session('checkout');
        $bid = $checkout_session["billing_id"];
        $sid = $checkout_session["shipping_id"];

        $address = Address::where('id',$bid)->first();
        $fname = $address->first_name;
        $lname = $address->last_name;
        $payment = Payment::create(['first_name'=>$fname,'last_name'=>$lname,'status'=>'Paid']);
        $pid = $payment->id;

        $order = Order::create([
            'users_id' => Auth::user()->id,
            'billing_id' => $bid,
            'shipping_id' => $sid,
            'payment_id' => $pid,
            'total_price' => $r->total_price,
            'total_quantity' => $r->total_qty,
            'order_status' => 'Pending' 
        ]);

        $order_id = $order->id;

        for ($i = 1; $i <= count($r->id); $i++) {
            Order_details::create([
                'order_id' => $order_id,
                'product_id' => $r->id[$i],
                'total_quantity' => $r->qty[$i],
                'total_price' => $r->price[$i],
            ]);
            Product::where('id', $r->id[$i])->decrement('stock', $r->qty[$i]);
            Cart::where('product_id', $r->id[$i])->delete();
        }      
        // Order_details::insert($od);
        return redirect('/order-status');
    }

    public function orderstatus()
    {
        $order = Order::where('users_id', Auth::user()->id)->get();
        return view('Order::orderstatus',compact('order'));
    }

    public function welcomeadmin()
    {
        $order = Order::get();
        return view("Order::orderadmin",compact('order'));
    }

    public function updateorderstatus(Request $r)
    {
        $validator = Validator::make($r->all(),[
            'select'=>'required|max:191',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else
        {
            $color = Order::where('id',$r->id)->update(['order_status'=>$r->select]); 
            return response()->json([
                'status' => 200,
                'message' => "Data Updated successfully",
            ]);
            // return redirect('/admin/order');
        }
    }

    public function editorder(Request $r)
    {
        $result = Order::where('id',$r->id)->first();
        // dd($result);
        if($result)
        {
            return response()->json([
                'message' => "Data Found",
                'code'=>200,
                'data'=> $result,
            ]);
        }
        else
        {
            return response()->json([
                'message' => "Data not found internal Server error",
                "code" => 500
            ]);
        }
    }

    public function invoicepage($id)
    {
        $order = Order::where('id', $id)->get();
        $orderd = Order_details::where('order_id',$id)->get();
        return view('Order::invoice',compact('order','orderd'));
    }

    public function orderdetail($id)
    {
        $order = Order::where('id', $id)->get();
        $orderd = Order_details::where('order_id',$id)->get();
        return view('Order::orderdetails',compact('order','orderd'));
    }
}
