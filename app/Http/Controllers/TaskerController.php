<?php

namespace App\Http\Controllers;

use App\Models\Tasker;
use Illuminate\Http\Request;

class TaskerController extends Controller
{
    public function add(Request $request)
    {
       $tasker = Tasker::create($request->all());
       return response()->json(
           [
               'message' => 'Tasker added successfully',
               'data' => $tasker
           ],200
       );
    }

    public function show(Tasker $tasker)
    {
        return response()->json([
           "message" => "Tasker retrieved",
            "data" => $tasker
        ]);
    }

    public function update(Tasker $tasker, Request $request){
        dd($tasker);
    }
}
