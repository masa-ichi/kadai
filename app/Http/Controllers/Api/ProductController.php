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
    $input = $request->input();

    var_dump($input);

    return "index";
  }
  public function store(Request $request)
  {
    $input = $request->input();

    var_dump($input);

    return "store";
  }
  public function show()
  {
    return "show";
  }
  public function update()
  {
    return "update";
  }
  public function destroy()
  {
    return "destroy";
  }
}
