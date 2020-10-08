<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * ProductController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $products = Product::all();
        return response()->json(['products' => ProductResource::collection($products)]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $data = $request->only(['name', 'calories', 'squirrels', 'fats', 'carbohydrates', 'portion', 'meal']);
        $data['meal'] = json_encode($data['meal']);
        $product = Product::create($data);
        return response()->json(['product' => new ProductResource($product)]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        Product::findOrFail($request->id)->delete();
        return response()->json(['message' => 'Success']);
    }
}
