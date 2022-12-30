<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\shop;
use Illuminate\Http\Request;

class FollowContoller extends Controller
{
    public function follow(Request $request){
        
       
        if($request->follow == 0){
            $follow = 1;
        }else {
            $follow = 0;    
        }
        $follow = Claim::where('id',$request->id)->update([
            'type' => $follow
        ]);

        return response()->json([
            'success' => 200,
            'claim' => $follow,
            'error' => false
        ]);

        
       
        // $follow1 = shop::where('id',$request->id)->update([
        //     'follow' => $follow1
        // ]);

        // return response()->json([
        //     'success' => 200,
        //     'claim' => $follow1,
        //     'error' => false
        // ]);


    }
}
