<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Price;

class PriceController extends Controller
{
 public function index(){  
  $data['title']="Price Management";
  $data['menu']="price_management";
  $data['sub_menu']="price";
  return view('price.index',$data);
 }
}
