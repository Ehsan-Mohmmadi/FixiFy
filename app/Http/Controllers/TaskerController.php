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
}
