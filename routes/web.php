<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyNoteController;
use App\Http\Controllers\CatalogController;



if (Route::currentRouteName('catalog')){
    return view('welkome');
};
Route::get('/', function () {
    return view('layouts.app');
});




//Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->where('any', '.*')->name('home');

// Верхнее меню MenuUpComponent.vue
Route::group(['prefix' => 'Head'], function () {

});


// Левое меню и подменю mynote_bl.blade
Route::get('/mynote', [MyNoteController::class, 'getPage'])->name('mynote');
Route::get('/joblist', 'JobsController@getPage')->name('joblist');
Route::get('/guests', 'GuestsController@index')->name('visitors_list');
Route::get('/notes', 'NotesController@index')->name('notes');
