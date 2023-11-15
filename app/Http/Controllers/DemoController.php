<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DemoController extends Controller
{
   function demoAction(Request $request)
   {
      $sum=24;
      return view('Home');
   }
}
