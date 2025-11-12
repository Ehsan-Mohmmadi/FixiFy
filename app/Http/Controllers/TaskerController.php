<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskerRequest;
use App\Http\Resources\TaskerResource;
use App\Models\Tasker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskerController extends Controller
{
    public function add(TaskerRequest $taskerRequest)
    {
        $tasker = Tasker::create($taskerRequest->except('profile'));
//        $token = $tasker -> createToken('Api/AdminLogin');
        $tasker_profile_url = Storage::putFile('/tasker', $taskerRequest->profile);
        $tasker->update(['profile'=>$tasker_profile_url]);
        $taskerInfo = Tasker::find($tasker->id);
        return response()->json([
            ',message' => 'Tasker created successfully',
            'tasker' => new TaskerResource($taskerInfo),
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
