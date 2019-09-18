<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use Session;
use Auth;





class adminPanelController extends Controller
{
  public function index()
  {
      //use AuthenticatesUsers;

      $products = DB::table('products')->get();

      $value=Auth::user()->id;
      


      return view('adminpanel', ['products' => $products]);



  }
}
