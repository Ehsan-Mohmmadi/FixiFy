<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);
        Task::create($request->all());
        return response()->json([
            'message' => 'Task added successfully'
        ],200);
    }
}
