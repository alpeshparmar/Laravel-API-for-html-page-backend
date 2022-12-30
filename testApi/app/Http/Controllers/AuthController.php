<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function login(Request $request)
    {   
        $user = User::find($request->id);
        if ($user) {
            Auth::login($user);
            $token = $user->createToken("Personal Access Token")->accessToken;
            // session('token', $token);
            return response()->json([
                'success' => 200,
                'message' => 'login successfully',
                'token' => $token,
                'error' => true
            ]);
        }
        else {
            return response()->json([
                'error' => 100,
                'message' => 'Please enter correct credenctials'
            ]);
        }
    }
}


