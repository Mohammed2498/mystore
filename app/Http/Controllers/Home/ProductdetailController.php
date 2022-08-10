<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    public function show($id)
    {
        $product = Product::with('images', 'category', 'tags')->findOrFail($id);
        return view('store.products.show', ['product' => $product]);
    }
}
