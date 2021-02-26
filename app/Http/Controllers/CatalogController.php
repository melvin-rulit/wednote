<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogController extends Controller
{

public function getPage(){
    return view('layouts.app');
}

public function get(): string
{


  return "ok";
}
}
