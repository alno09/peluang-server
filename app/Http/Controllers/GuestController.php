<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\ProductDet;

class GuestController extends Controller
{
    public function showProducts()
    {
        // GET Products method

        $product = Products::all(['id', 'product_name', 'sku', 'bep', 'price']);

        return response()->json([
            'status' => true,
            'data' => $product
        ]);
    }

    public function getProductByCategory($category_id)
    {
        $product = Products::where('category_id', $category_id)->get(['id', 'product_name', 'sku', 'bep', 'price']);

        return response()->json([
            'status' => true,
            'data' => $product
        ]);
    }

    public function searchProduct(Request $request)
    {
        $keyword = $request->input('keyword');

        $product = Products::where('product_name', 'like', '%' . $keyword . '%')->get(['id', 'product_name', 'sku', 'bep', 'price']);

        return response()->json([
            'status' => true,
            'data' => $product
        ]);
    }

    public function showProductPromotion()
    {
    }
}
