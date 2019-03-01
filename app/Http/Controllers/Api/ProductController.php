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
    return $product;
  }
  public function store(Request $request)
  {
    $product = new Product;
    $product->price = $request->price;
    $product->title = $request->title;
    $product->description = $request->description;
    $product->save();
  }
  public function show($id)
  {
    $product = Product::find($id);
    return $product;
  }
  public function update(Request $request, $id)
  {
    $product = Product::find($id);
    $product->title = $request->title;
    $product->body = $request->body;
    $product->save();
  }
  public function destroy($id)
  {
    $product = Product::find($id);
    $product->delete();
  }
}
