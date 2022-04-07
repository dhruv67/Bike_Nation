<?php

namespace App\Modules\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Category\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function categorypage()
    {
        return view("Category::category");
    }
    
    public function trashcategorypage()
    {
        return view("Category::trashcategory");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'category'=>'required|max:191|unique:category,category'
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else {
            $user = auth()->user();
            $uid = $user->id;   
            $category = new Category;
            $category->users_id = $uid;
            $category->category = $request->category;
            $category->status = 'y';
            $result = $category->save();
            return response()->json([
                'message' => "Data inserted successfully",
                "code" => 200
            ]);
        }
    }

    public function fetchcategory()
    {
        $category = Category::join('users', 'users.id', '=', 'category.users_id')->where('status',array('y'))->orWhere('status',array('n'))->select('category.*', 'users.name as users_name')->get();
        if($category){
            return response()->json([
                'message' => "Fetch Data successfully",
                "code" => 200,
                "data" => $category
            ]);
        }else {
            return response()->json([
                'message' => "Not able to fetch Data",
                "code" => 500
            ]);
        }
    }

    public function edit(Request $request)
    {
        $result = Category::where('id',$request->id)->first();
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

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'edit_category'=>'required|max:191',
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
            $result = Category::where('id', $request->id)->update([
                'category' => $request->edit_category
            ]);
            if($result)
            {
                return response()->json([
                    'status' => 200,
                    'message' => "Data updated successfully",
                ]);
            }
            else
            {
                return response()->json([
                    'status' => 404,
                    'message' => "Data not found internal Server error",
                ]);
            }
        }
    }

    public function changeStatus(Request $request)
    {
        $category = Category::find($request->id);
        $category->status = $request->status;
        if($category)
        {
            $category->save();
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

    public function destroy(Request $request)
    {
        $category = Category::find($request->id);
        $category->status = 't';
        if($category)
        {
            $category->save();
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

    public function trashfetchcategory()
    {
        $category = Category::join('users', 'users.id', '=', 'category.users_id')->where('status',array('t'))->select('category.*', 'users.name as users_name')->get();
        if($category){
            return response()->json([
                'message' => "Fetch Data successfully",
                "code" => 200,
                "data" => $category
            ]);
        }else {
            return response()->json([
                'message' => "Not able to fetch Data",
                "code" => 500
            ]);
        }
    }

    public function restorecategory(Request $request)
    {
        $category = Category::find($request->id);
        $category->status = 'y';
        if($category)
        {
            $category->save();
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
}
