<?php

namespace App\Http\Controllers;

use App\Models\Tasker;
use Illuminate\Http\Request;

class TaskerController extends Controller
{
    public function add(Request $request)
    {
        $tasker = $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'work_time' => 'required',
        ]);
        $tasker = Tasker::create($tasker);
        return response()->json([
            'tasker' => $tasker,
        ],200);
    }

    public function show(Tasker $tasker)
    {
        return response()->json([
            'message' => 'Data found',
            'Data' => $tasker
        ],200);
    }

    public function update(Request $request,Tasker $tasker){
        $tasker->update(request()->all());
        $tasker = Tasker::find($tasker->id);
        return response()->json([
            'message' => 'Data updated',
            'Data' => $tasker
        ],200);
    }
}
