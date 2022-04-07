<?php

namespace App\Modules\Colour\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Colour\Models\Colour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class ColourController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function colour()
    {
        return view("Colour::colour");
    }

    public function trashcolorpage()
    {
        return view("Colour::trashcolor");
    }

    public function fetchcolor()
    {
        $color = Colour::join('users', 'users.id', '=', 'color.users_id')->where('status',array('y'))->orWhere('status',array('n'))->select('color.*', 'users.name as users_name')->get();
        if($color){
            return response()->json([
                'message' => "Fetch Data successfully",
                "code" => 200,
                "data" => $color
            ]);
        }else {
            return response()->json([
                'message' => "Not able to fetch Data",
                "code" => 500
            ]);
        }
    }

    public function trashfetchcolor()
    {
        // $color = Colour::all();
        $color = Colour::join('users', 'users.id', '=', 'color.users_id')->where('status',array('t'))->select('color.*', 'users.name as users_name')->get();
        if($color){
            return response()->json([
                'message' => "Fetch Data successfully",
                "code" => 200,
                "data" => $color
            ]);
        }else {
            return response()->json([
                'message' => "Not able to fetch Data",
                "code" => 500
            ]);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|alpha|max:46|unique:color,name',
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
            $user = auth()->user();
            $uid = $user->id;

            $color = new Colour;
            $color->users_id = $uid;
            $color->name = $request->name;
            $color->status = 'y';
    
            $result = $color->save();   

            return response()->json([
                'status' => 200,
                'message' => "Data inserted successfully",
            ]);
        }

    }


    public function edit(Request $request)
    {
        $result = Colour::where('id',$request->id)->first();
        // $color = Colour::find($id);
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
            'edit_name'=>'required|alpha|max:46',
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
            $result = Colour::where('id', $request->id)->update([
                'name' => $request->edit_name
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

    public function destroy(Request $request)
    {
        $color = Colour::find($request->id);
        $color->status = 't';

        if($color)
        {
            $color->save();
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
    
    public function changeStatus(Request $request)
    {
        $color = Colour::find($request->id);
        $color->status = $request->status;
        
        if($color)
        {
            $color->save();
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

    public function restorecolor(Request $request)
    {
        $color = Colour::find($request->id);
        $color->status = 'y';

        if($color)
        {
            $color->save();
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
