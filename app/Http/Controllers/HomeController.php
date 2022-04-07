<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Modules\Product\Models\Product;
use App\Modules\Cart\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        if (Auth::check()&& Auth::user()->utype != 'a')
        {
            $cart = collect(session('cart'));
            if(!$cart->isEmpty())
            {
                $id = $cart->pluck('id');
                $stock = $cart->pluck('stock');
                foreach ($id as $key=>$ids)
                {
                    foreach($stock as $keys=>$stocks)
                    {
                        $saverecord[$ids] = [
                            'users_id' => Auth::user()->id,
                            'product_id' => $id[$key],
                            'product_stock' => $stock[$key],
                        ];
                    }
                }
                foreach ($saverecord as $key => $id)
                {
                    Cart::updateOrInsert($id);
                }
            }
            else
            {
                return view('layouts.user.home');  
            }
        }
        return view('layouts.user.home');
    }

}
