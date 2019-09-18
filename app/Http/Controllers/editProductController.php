<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class editProductController extends Controller
{
  public function getProducts($productId)
  {

      $products = DB::table('products')
          ->where('num_products_pk',$productId)
          ->first();



      return view('editproducts', ['products' => $products]);

  }

  public function store(Request $request)
  {

    // validate incoming request

    $validator = Validator::make($request->all(), [
       'name' => 'required|string|max:50',
       'password' => 'required',
       'url'=>'required',
       'description'=>'required'
   ]);

   if ($validator->fails()) {
        Session::flash('error', $validator->messages()->first());
        return redirect()->back()->withInput();
      }
  }


  public function editProducts($productId)
  {
    $name= request()->input('nombre');
    $url=request()->input('url');
    $description=request()->input('description');
    $precio=request()->input('precio');



    DB::table('products')
            ->where('num_products_pk', $productId)
            ->update([
              'txt_products_name' => $name,
              'txt_url_img' => $url,
              'txt_description' => $description,
              'num_price' => $precio
            ]);


    error_log('Updated Info');
    error_log($productId);
    error_log($name);
    error_log($url);
    error_log($description);
    error_log($precio);
    return redirect('/adminpanel');



  }

}
