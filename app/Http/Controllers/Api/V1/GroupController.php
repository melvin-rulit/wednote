<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog_group;

class GroupController extends Controller
{
    public function getGroup()
    {

        return Catalog_group::all();

    }
}
