<?php

namespace App\Http\Controllers;

use App\Models\shop;
use Illuminate\Http\Request;

class unshopController extends Controller
{
    public function unfollow(Request $request){
        if($request->follow == 0){
            $follow = 1;
        }else {
            $follow = 0;    
        }
        $follow = shop::where('id',$request->id)->update([
            'follow' => $follow
        ]);

        return response()->json([
            'success' => 200,
            'claim' => $follow,
            'error' => false
        ]);


    }
}
