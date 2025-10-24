<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Models\Tasker;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = Auth::create($request->all());
        return response()->json([
            'error' => false,
            'data' => $request->all()
        ],200);
    }
}
