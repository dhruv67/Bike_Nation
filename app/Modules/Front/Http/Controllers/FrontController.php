<?php

namespace App\Modules\Front\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Colour\Models\Colour;
use App\Modules\Category\Models\Category;
use App\Modules\Images\Models\Images;
use App\Modules\Product\Models\Product;
use App\Modules\Cart\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */

    public function fetchproducts()
    {
        $product = Product::where('status','y')->get();
        $category = Category::where('status','y')->groupBy('category')->get();
        $color = Colour::where('status','y')->get();
        return view("Front::products",compact('product','category','color'));
    }

    public function productsdetails($url)
    {
        
        $product = Product::where('url',$url)->where('status','y')->get();
        $pid = $product->pluck('id');
        $image = Images::where('product_id', $pid)->get();
        
        return view("Front::details",compact('product','image'));
    }

    public function filter(Request $request)
    {
        
        if (isset($request->category) && isset($request->color))
        {
            $product = Product::whereIn('category_id',$request->category)->whereIn('color_id',$request->color)->where('status','y')->whereBetween('price', [(int)$request->minimum, (int)$request->maximum])->orderBy($request->sortby,$request->orderby)->get();
        }

        elseif (isset($request->category))
        {
            $product = Product::whereIn('category_id',$request->category)->where('status','y')->whereBetween('price', [(int)$request->minimum, (int)$request->maximum])->orderBy($request->sortby,$request->orderby)->get();
        } 

        elseif (isset($request->color))
        {
            $product = Product::whereIn('color_id',$request->color)->where('status','y')->whereBetween('price', [(int)$request->minimum, (int)$request->maximum])->orderBy($request->sortby,$request->orderby)->get();
        }

        else
        {
            $product = Product::where('status','y')->whereBetween('price', [(int)$request->minimum, (int)$request->maximum])->orderBy($request->sortby,$request->orderby)->get();
        }
        // dd($product);
        // if(!$product->isEmpty())
        if(!$product->isEmpty())
        {
            if ($request->view =='true'){
                return view('Front::grid',compact('product'));
            }
            else{
                return view('Front::list',compact('product'));
            }
        }
        else{
            $category = Category::where('status','y')->get();
            $color = Colour::where('status','y')->get();
            $product = Product::where('status','y')->get();
            return view('Front::noproduct',compact('category','color','product'));
        }
    }

    public function qty(Request $request)
    {
        $product = Product::where('id',$request->id)->first();
        
        if($product)
        {
            return response()->json([
                'message' => "Data Found",
                'code'=>200,
                'data'=> $product,
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

    public function addToCart(Request $request)
    {
        $product_id = $request->id;
        $product_qty = $request->qty;
        
        if (Auth::check()&& Auth::user()->utype != 'a')
        {
            $prod_check = Cart::where('product_id',$product_id)->where('users_id',Auth::user()->id)->first();
            if(!empty($prod_check))
            {
                if ($request->qty == $prod_check->product_stock)
                {
                    return response()->json([
                        "status" => $prod_check->name."Already Added to cart"
                    ]);
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
                            'errors' => $validator->messages(),
                        ]);
                    }
                    else
                    {
                        if(sizeof(Product::where('id',$product_id)->where('stock', '>=', $product_qty)->get()))
                        {
                            $prod_check->update(['product_stock' => $request->qty]);
                            $minicart = view('Cart::minicart')->render();
                            return response()->json([
                                "minicart" => $minicart,
                                "messages" => "cart updated",
                                "status" => 200,
                            ]);
                        }
                        else
                        {
                            return response()->json([
                                "messages" => "Maximum reached",
                                "status" => 500,
                            ]);
                        }
                    }
                }
            }
            else {
                
                $validator = Validator::make($request->all(),[
                    'qty'=>'numeric|min:1|max:2',
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
                    if(sizeof(Product::where('id',$product_id)->where('stock', '>=', $product_qty)->get()))
                    {
                        Cart::create(['users_id'=>Auth::user()->id,'product_id'=>$request->id,'product_stock'=>$request->qty]);
                        $minicart = view('Cart::minicart')->render();
                        return response()->json([
                            "minicart" => $minicart,
                            "messages" => "Added to cart",
                            "status" => 200,
                        ]);
                    }
                    else
                    {
                        if(sizeof(Product::where('id',$product_id)->where('stock', '<=', $product_qty)->get()))
                        {
                            return response()->json([
                                "messages" => "Maximum reached",
                                "status" => 500,
                            ]);
                        }
                        else    
                        {
                            Cart::create(['users_id'=>Auth::user()->id,'product_id'=>$request->id,'product_stock'=> $request->oqty ]);
                            $minicart = view('Cart::minicart')->render();
                            return response()->json([
                                "minicart" => $minicart,
                                "messages" => "Added to cart",
                                "status" => 200,
                            ]);
                        }
                    }
                }

            }
        }
        else
        {
            $product = Product::where('id',$request->id)->first();
            $cart = session()->get('cart', []);
            $cart[$request->id] = [
                "id" => $product_id,
                "stock" => $product_qty,
                "name" =>  $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "url" => $product->url

            ];
            session()->put('cart', $cart);

            $minicart = view('Cart::minicart')->render();
            return response()->json([
                "messages" => "Added to cart on session",
                "minicart" => $minicart,
                "status" => 200,
            ]);
        }
    }
}
