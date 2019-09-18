<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use auth;
class addProductController extends Controller
{
  public function index()
  {
      //use AuthenticatesUsers;
      return view('addproduct');

  }

  public function addProduct()
  {
    $name= request()->input('nombre');
    $url=request()->input('url');
    $description=request()->input('description');
    $precio=request()->input('precio');
    $userid=Auth::user()->id;


    DB::table('products')
            ->insert([
              'txt_products_name' => $name,
              'txt_url_img' => $url,
              'txt_description' => $description,
              'num_price' => $precio,
              'num_admins_fk'=>$userid
            ]);

      return redirect('/adminpanel');
  }
}
