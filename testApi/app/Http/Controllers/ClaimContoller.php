<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\User;
use Illuminate\Http\Request;

class ClaimContoller extends Controller
{
    public function claim(Request $request){
        $type = $request->type;
        if(!isset($type)){
            $claims_details = Claim::all();
            return response()->json([
                'success' => 200,
                'shop' => $claims_details,
                'error' => false
            ]);
        }

        if($type == 0)
        {

            $claims_details = Claim::where('type',0)->get();
        }
        else{
            $claims_details = Claim::where('type',1)->get();
            // dd($claims_details);
        }
       return response()->json([
           'success' => 200,
           'claim' => $claims_details,
           'error' => false
       ]);
    }
}
