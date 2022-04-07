<?php

namespace App\Modules\Images\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Product\Models\Product;
use App\Modules\Colour\Models\Colour;
use App\Modules\Category\Models\Category;
use App\Modules\Images\Models\Images;

class ImagesController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    // public function welcome()
    // {
    //     return view("Images::welcome");
    // }

    // public function deleteimage(Request $request) 
    // {
    //     $id = $request->id;
    //     $image = Images::find($id);
    //     dd($image);
    //     // $path = 'public/product_images/'.$image->imagenames;
    //     //     if(File::exists($path))
    //     //     {
    //     //         File::delete($path);
    //     //     }
    //     // $images->delete();
    //     // if($image)
    //     // {
    //     //     $path = 'public/product_images/'.$image->imagenames;
    //     //     if(File::exists($path))
    //     //     {
    //     //         File::delete($path);
    //     //     }
    //     //     $image->delete();
    //     //     return response()->json([
    //     //         'message' => "image deleted successfully",
    //     //         'code'=>200,
    //     //     ]);
    //     // }
    //     // else
    //     // {
    //     //     return response()->json([
    //     //         'message' => "Data not found internal Server error",
    //     //         "code" => 404
    //     //     ]);
    //     // }  
         
	// }

    
}
