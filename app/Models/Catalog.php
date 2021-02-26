<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $fillable = ['catalog_groups_id','name', 'price_from','price_up_to','description','youtube','photo','more_photo','tel','tel_work','position'];
}
