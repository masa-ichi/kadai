<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;

class ProductController extends BaseController
{
  public function index(Request $request)
  {
    $product = Product::all();
    return response()->json(['product' => $product]);
  }
  public function store(Request $request)
  {
    $request->validate([
      'price' => 'integer',
      'title' => 'string|max:100',
      'description' => 'string|max:500',
      'image' => 'integer',
    ]);
    $product = new Product;
    $product->price = $request->price;
    $product->title = $request->title;
    $product->description = $request->description;
    $product->image = $request->image;
    $product->save();
  }
  public function show($id)
  {
    $product = Product::find($id);
    return response()->json(['product' => $product]);
  }
  public function update(Request $request, $id)
  {
    $request->validate([
      'price' => 'integer',
      'title' => 'string|max:100',
      'description' => 'string|max:500',
      'image' => 'integer',
    ]);
    $product = Product::find($id);
    $product->price = $request->price;
    $product->title = $request->title;
    $product->description = $request->description;
    $product->image = $request->image;
    $product->save();
  }
  public function destroy($id)
  {
    $product = Product::find($id);
    $product->delete();
  }
}
