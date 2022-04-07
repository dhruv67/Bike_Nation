<?php

namespace App\Modules\Payment\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Modules\Payment\Models\Payment;


class PaymentController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcomeuser()
    {
        // dd(session('checkout'));
        return view("Payment::paymentuser");
    }

    // public function welcomeadmin()
    // {
    //     // dd(session('checkout'));
    //     return view("Payment::paymentadmin");
    // }

    // public function fetchtpayment()
    // {
    //     $payment = Payment::join('order','order.payment_id', '=','payment.id')
    //     ->get(['payment.*','payment.id as payment_id', 'order.*']);  
        
    //     if($payment){
    //         return response()->json([
    //             'message' => "Fetch Data successfully",
    //             "code" => 200,
    //             "data" => $payment
    //         ]);
    //     }else {
    //         return response()->json([
    //             'message' => "Not able to fetch Data",
    //             "code" => 500
    //         ]);
    //     }
    // }
}
