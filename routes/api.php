<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CatalogsController;
use App\Http\Controllers\Api\V1\GroupController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Верхнее меню MenuUpComponent.vue
Route::group(['prefix' => 'v1',  'as' => 'api.', 'namespace' => 'Api\V1'], function () {

//    Route::apiResource('catalog', 'CatalogsController');
    Route::get('catalog', [CatalogsController::class, 'getCatalog'])->name('catalog');
    Route::get('group', [GroupController::class, 'getGroup']);


});
