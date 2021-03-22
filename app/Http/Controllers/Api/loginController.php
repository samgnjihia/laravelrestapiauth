<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class loginController extends Controller
{
    public function login(Request $request){

        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if( !Auth::attempt($login)){
            return response(['message' => 'Invalid Login Credentials']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response()->json([
            'user' => Auth::user(),
            'access_token' => $accessToken

        ]);

    }
}
