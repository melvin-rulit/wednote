<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MyNoteController extends Controller
{
   public function getPage(){

       return view('mynote');

   }
}
