<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskerController extends Controller
{
    public function add(Request $request)
    {
        dd($request->all());
    }
}
