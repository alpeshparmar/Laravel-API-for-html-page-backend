<?php

namespace App\Http\Controllers;

use App\Models\shop;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use Symfony\Component\Console\Input\Input;

class ShopController extends Controller
{
    public function shop(Request $request,$type = NULL)
    {   
        $search_params = $request->search_params;
        $type = $request->type;
        if(!isset($type) && !isset($search_params)){
            return response()->json([
                'success' => 200,
                'shop' => null,
                'error' => true
            ]);
        }
        else if($type == 1) {
            if ($type == 1 && isset($search_params)) {
                    $shop_details = Shop::Where('follow', 1)
                    ->where(function ($query) use ($search_params) {
                        $query->where('shop_name', 'LIKE', '%' . $search_params . '%');
                        $query->orWhere('product', 'LIKE', '%' . $search_params . '%');
                        $query->orWhere('location', 'LIKE', '%' . $search_params . '%');
                    })->get();  
                    return response()->json([
                        'success' => 200,
                        'shop' => $shop_details,
                        'error' => false
                    ]);
            } 
            else{
                $shop_details = Shop::Where('follow', 1)->get();
                return response()->json([
                    'success' => 200,
                    'shop' => $shop_details,
                    'error' => false
                ]);
            }
        }
        else if($type == 0) {
            if ($type == 0 && isset($search_params)) {
                $shop_details = Shop::Where('follow', 0)
                ->where(function ($query) use ($search_params) {
                    $query->where('shop_name', 'LIKE', '%' . $search_params . '%');
                    $query->orWhere('product', 'LIKE', '%' . $search_params . '%');
                    $query->orWhere('location', 'LIKE', '%' . $search_params . '%');
                })->get();  
                    return response()->json([
                        'success' => 200,
                        'shop' => $shop_details,
                        'error' => false
                    ]);
            }
            else{
                $shop_details = Shop::Where('follow', 0)->get();
                return response()->json([
                    'success' => 200,
                    'shop' => $shop_details,
                    'error' => false
                ]);
            }
        }
    }
    
}

