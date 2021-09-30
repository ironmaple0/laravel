<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
     public function home(){
        return view('home');
   }

     public function self(){
         return view('zikosyoukai');
     }

     public function help(){
         return view('otoiawase');
     }
}

