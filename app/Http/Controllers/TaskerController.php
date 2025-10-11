<?php

namespace App\Http\Controllers;

use App\Models\Tasker;
use Illuminate\Http\Request;

class TaskerController extends Controller
{
    public function add(Request $request)
    {
        Tasker::create(($request->all()));
    }
}
