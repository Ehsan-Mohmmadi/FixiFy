<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Resources\ProductStoreResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(ProductStoreRequest $productStoreRequest)
    {
       $product =  Product::create($productStoreRequest->all());
       return response()->json([
           "message" => "Product created",
           "data" => new ProductStoreResource($product)
       ]);
    }
}
