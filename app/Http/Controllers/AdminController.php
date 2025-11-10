<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminStoreRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function store(AdminStoreRequest $adminStoreRequest)
    {
        dd($adminStoreRequest->all());
    }
}
