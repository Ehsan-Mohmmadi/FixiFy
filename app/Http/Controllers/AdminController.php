<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminStoreRequest;
use App\Http\Resources\AdminResource;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function store(AdminStoreRequest $adminStoreRequest)
    {
        $admin = Admin::create($adminStoreRequest->all());
        $token = $admin->createToken('Api/AdminLogin');
        return response()->json([
            'message' => 'admin created successfully',
            'token' => $token->plainTextToken,
            'data' => new AdminResource($admin)
        ],200);
    }

    public function show(Admin $admin)
    {
        return response()->json([
            'message' => 'Admin data fetch successfully',
            'data' => new AdminResource($admin)
        ],200);
    }
}
