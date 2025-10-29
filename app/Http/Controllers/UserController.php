<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return response()->json([
            'message' => 'Successfully created user!',
            'message2' => 'You are logged in!',
            'user' => $user
        ],200);
    }

    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (!auth()->attempt($incomingFields)) {
            return response()->json([
               'message' => 'Unauthorized'
            ]);
        }
        else{
            return response()->json([
                'message' => 'Successfully logged in'
            ]);
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return response()->json([
            'message' => 'Successfully logged out'
        ],200);
    }
}
