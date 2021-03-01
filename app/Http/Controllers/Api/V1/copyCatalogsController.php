<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog;


class copyCatalogsController extends Controller
{
    public function getCatalog()
    {

      return Catalog::all();

    }
}
