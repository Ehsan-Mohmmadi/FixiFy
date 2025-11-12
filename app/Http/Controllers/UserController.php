<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserShowRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
//    public function register(Request $request){
//        $incomingFields = $request->validate([
//            'name' => 'required',
//            'email' => 'required|email|unique:users',
//            'password' => 'required',
//        ]);
//        $incomingFields['password'] = bcrypt($incomingFields['password']);
//        $user = User::create($incomingFields);
//        return response()->json([
//            'message' => 'Successfully created user!',
//            'user' => $user
//        ],200);
//    }
//
//    public function login(Request $request)
//    {
//        $incomingFields = $request->validate([
//            'email' => 'required|email',
//            'password' => 'required',
//        ]);
//        if (!auth()->attempt($incomingFields)) {
//            return response()->json([
//               'message' => 'Unauthorized'
//            ]);
//        }
//        else{
//            return response()->json([
//                'message' => 'Successfully logged in'
//            ]);
//        }
//    }
//
//    public function logout(Request $request)
//    {
//        auth()->logout();
//        return response()->json([
//            'message' => 'Successfully logged out'
//        ],200);
//    }

    public function userAdd(UserShowRequest $userShowRequest)
    {
        $user = User::create($userShowRequest->all());
        $token = $user->createToken('Api/UserLogin');
        return response()->json([
            'message' => 'User created successfully',
            'token' => $token->plainTextToken,
            'data' => new UserResource($user)
        ],200);
    }

    public function userShow(User $user){
        response()->json([
           'message' => 'Data retrieved successfully',
           'data' => new UserResource($user)
        ],200);
    }
}
