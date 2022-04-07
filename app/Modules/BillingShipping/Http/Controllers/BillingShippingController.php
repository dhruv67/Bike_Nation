<?php

namespace App\Modules\BillingShipping\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\BillingShipping\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class BillingShippingController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function billing()
    { 
        $address = Address::get();
        return view("BillingShipping::billing",compact('address'));
    }

    public function shipping()
    {
        // dd(session('checkout'));
        $address = Address::get();
        return view("BillingShipping::shipping",compact('address'));
    }

    public function store_bill_address(Request $r)
    { 
        $billing_id = $shipping_id = '';
        
        if (isset($r->address) && $r->address == "new") 
        {
            $validator = Validator::make($r->all(),[
                'billing_first_name' => 'required|alpha',
                'billing_last_name' => 'required|alpha',
                'billing_email' => 'required|email',
                'billing_pincode' => 'required|numeric',
                'billing_city' => 'required|alpha',
                'billing_state' => 'required|alpha',
                'billing_country' => 'required|alpha',
                'billing_phone' => 'required|numeric',
                'billing_address' => 'required'
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
                $data = [
                    'users_id'=> Auth::user()->id,
                    'first_name' => $r->billing_first_name,
                    'last_name' => $r->billing_last_name,
                    'email' => $r->billing_email,
                    'pincode' => $r->billing_pincode,
                    'city' => $r->billing_city,
                    'state' => $r->billing_state,
                    'country' => $r->billing_country,
                    'mobile_number' => $r->billing_phone,
                    'address' => $r->billing_address
                ];
                $id = Address::create($data);
                $billing_id = $id->id;
            }
        }
        else
        {
            $billing_id = $r->address;
        }

        if(isset($r->shipping) && $r->shipping == "ship_same"){
            $shipping_id = $billing_id;
        }

        $checkout_arr= [
            'billing_id'=> $billing_id,
            'shipping_id'=> $shipping_id,
        ];

        session()->put('checkout', $checkout_arr);

        if ($r->shipping == "ship_same") {
            return redirect('/payment')->with('status', 'data successfully added');
        } 
        else 
        {
            return redirect('/shipping')->with('status', 'data successfully added');
        }
    }

    public function store_ship_address(Request $r)
    {
        $checkout_arr = session('checkout');
        $billing_id = $checkout_arr['billing_id']; 
        $shipping_id = '';
        if (isset($r->address) && $r->address == "new") 
        {
            $validator = Validator::make($request->all(),[
                'billing_first_name' => 'required|alpha',
                'billing_last_name' => 'required|alpha',
                'sbilling_email' => 'required|email',
                'billing_pincode' => 'required|numeric',
                'billing_city' => 'required|alpha',
                'billing_state' => 'required|alpha',
                'billing_country' => 'required|alpha',
                'billing_phone' => 'required|numeric',
                'billing_address' => 'required'
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
                $data = [
                    'users_id'=> Auth::user()->id,
                    'first_name' => $r->billing_first_name,
                    'last_name' => $r->billing_last_name,
                    'email' => $r->sbilling_email,
                    'pincode' => $r->billing_pincode,
                    'city' => $r->billing_city,
                    'state' => $r->billing_state,
                    'country' => $r->billing_country,
                    'mobile_number' => $r->billing_phone,
                    'address' => $r->billing_address
                ];
                $id = Address::create($data);
                $shipping_id = $id->id;
            }
        }
        else
        {
            $shipping_id = $r->address;
        }

        $checkout_arr= [
            'billing_id'=> $billing_id,
            'shipping_id'=> $shipping_id,
        ];

        session()->put('checkout', $checkout_arr);
        return redirect('/payment')->with('status', 'data successfully added');
    }
}
