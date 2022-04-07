<?php

namespace App\Modules\Product\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Product\Models\Product;
use App\Modules\Colour\Models\Colour;
use App\Modules\Category\Models\Category;
use App\Modules\Images\Models\Images;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use File;
use DB;


class ProductController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function product()
    {
        $colorlist = Colour::select('id','name')->where('status',array('y'))->orWhere('status',array('n'))->get();
        $catlist = Category::select('id','category')->where('status',array('y'))->orWhere('status',array('n'))->get();
        return view("Product::product",compact('colorlist','catlist'));
    }

    public function trashproductpage()
    {
        return view("Product::trashproduct");
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:product,name',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'upc'=>'required|size:12|unique:product,upc',
            'url'=>'required|unique:product,url',
            'price'=>'required|numeric',
            'stock'=>'required|numeric',
            'color'=>'required',
            'category'=>'required',
            'desc'=>'required',
            'imagenames.*' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'sortnumber.*' => 'required|numeric'
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
            $product = new Product;
            $product->name = $request->name;
            if ($files = $request->file('image')) {
                
                $fileName =  time().'-'.$request->image->getClientOriginalName();
                $request->image->move('public/main_images', $fileName);
                
                $product->image = $fileName;
            }
            $user = auth()->user();
            $uid = $user->id;

            $product->upc = $request->upc;
            $product->url = $request->url;
            $product->price = $request->price;
            $product->stock = $request->stock;
            $product->users_id = $uid;
            $product->status = 'y';
            $product->color_id = $request->color;
            $product->category_id = $request->category;
            $product->description = $request->desc;
    
            $result = $product->save();   

            $product_id = $product->id;
            if($request->hasfile('imagenames'))
             {  
                
                foreach ($request->file('imagenames') as $key=>$insert) {

                    $fileName = time().'-'.$insert->getClientOriginalName();
                    $insert->move('public/product_images', $fileName);
                    $saverecord = [

                        'product_id' => $product_id,
                        'imagenames' => $fileName,
                        'sortnumber' => $request->sortnumber[$key],
                    ];
                    DB::table('image')->insert($saverecord);    
                };     
            }
            return response()->json([
                'status' => 200,
                'message' => "Data inserted successfully",
            ]);
        }
    }

    public function fetchproduct()
    {
        $product = Product::join('color', 'color.id', '=', 'product.color_id')
        ->join('category', 'category.id', '=', 'product.category_id')
        ->join('users', 'users.id', '=', 'product.users_id')
        ->where('product.status',array('y'))
        ->orWhere('product.status',array('n'))
        ->get(['product.*', 'color.name AS color_name', 'category.category']);
        
        if($product){
            return response()->json([
                'message' => "Fetch Data successfully",
                "code" => 200,
                "data" => $product
            ]);
        }else {
            return response()->json([
                'message' => "Not able to fetch Data",
                "code" => 500
            ]);
        }
    }

    public function trashfetchproduct()
    {
        $product = Product::join('color', 'color.id', '=', 'product.color_id')
        ->join('category', 'category.id', '=', 'product.category_id')
        ->join('users', 'users.id', '=', 'product.users_id')
        ->where('product.status',array('t'))
        ->get(['product.*', 'color.name AS color_name', 'category.category']);

        if($product){
            return response()->json([
                'message' => "Fetch Data successfully",
                "code" => 200,
                "data" => $product
            ]);
        }else {
            return response()->json([
                'message' => "Not able to fetch Data",
                "code" => 500
            ]);
        }
    }

    public function changeStatus(Request $request)
    {
        $product = Product::find($request->id);
        $product->status = $request->status;
        
        if($product)
        {
            $product->save();
            return response()->json([
                'status'=>200,
                'message'=>'Status change successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Failed to change status'
            ]);
        }
    }

    public function edit(Request $request)
    {
        $result = Product::where('product.id',$request->id)->first();
        
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

    public function editimage(Request $request)
    {
        $image = Images::where('product_id',$request->id)->get();

        if($image)
        {
            return response()->json([
                'message' => "Data Found",
                'code'=>200,
                'data'=> $image,
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

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'edit_name'=>'required',
            'edit_upc'=>'required|size:12',
            'edit_image'=>'image|mimes:jpeg,png,jpg,svg|max:2048',
            'edit_url'=>'required',
            'edit_price'=>'required|numeric',
            'edit_stock'=>'required|numeric',
            'edit_color'=>'required',
            'edit_category'=>'required',
            'edit_desc'=>'required',
            'eimagenames.*'=>'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'esortnumber.*'=>'required|numeric'
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
            $product = Product::find($request->id);
            $product->name = $request->edit_name;
            if ($files = $request->file('edit_image')) {
                
                $fileName =  time().'-'.$request->edit_image->getClientOriginalName();
                $request->edit_image->move('public/main_images', $fileName);
                
                $product->image = $fileName;
            }

            $product->upc = $request->edit_upc;
            $product->url = $request->edit_url;
            $product->price = $request->edit_price;
            $product->stock = $request->edit_stock;
            $product->status = 'y';
            $product->color_id = $request->edit_color;
            $product->category_id = $request->edit_category;
            $product->description = $request->edit_desc;
            
            $product->update();   

            {
                $product_id = $request->id;
                if($request->hasfile('eimagenames'))
                {  
                    foreach ($request->file('eimagenames') as $k=>$i) {
                        $fName = time().'-'.$i->getClientOriginalName();
                        $i->move('public/product_images', $fName);
                        $savedata = [
                            'imagenames' => $fName,
                            'sortnumber' => $request->esortnumber[$k],
                        ];
                        $imgid = $request->image_id[$k];
                        DB::table('image')->where('id',$imgid)->update($savedata);
                    };
                }  
                
                if($request->hasfile('imagenames'))
                {  
                    foreach ($request->file('imagenames') as $key=>$insert) {
                        $fileName = time().'-'.$insert->getClientOriginalName();
                        $insert->move('public/product_images', $fileName);
                        $saverecord = [
                            'product_id' => $product_id,
                            'imagenames' => $fileName,
                            'sortnumber' => $request->sortnumber[$key],
                        ];
                        DB::table('image')->insert($saverecord);
                    };     
                }
            }
            return response()->json([
                'status' => 200,
                'message' => "Data Updated successfully",
            ]);
        }
    }

    public function deleteimage(Request $request) 
    {
        $id = $request->all();
        $image = Images::find($id)->first();
        if($image)
        {
            $path = 'public/product_images/'.$image->imagenames;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $image->delete();
            return response()->json([
                'message' => "image deleted successfully",
                'code'=>200,
            ]);
        }
        else
        {
            return response()->json([
                'message' => "Data not found internal Server error",
                "code" => 404
            ]);
        }      
	}

    public function destroy(Request $request)
    {    
        $product = Product::find($request->id);
        $product->status = 't';

        if($product)
        {
            $product->save();
            return response()->json([
                'status'=>200,
                'message'=>'Trashed successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Trashed failed'
            ]);
        }
    }

    public function restoreproduct(Request $request)
    {
        $product = product::find($request->id);
        $product->status = 'y';

        if($product)
        {
            $product->save();
            return response()->json([
                'status'=>200,
                'message'=>'restored successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Trashed failed'
            ]);
        }
    }

}

