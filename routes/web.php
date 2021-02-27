<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyNoteController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PagesController;




Route::get('/', function () {
    return view('layouts.app');
})->name('home');




//Route::get('/', [PagesController::class, 'index'])->where('any', '.*');




// Левое меню и подменю mynote_bl.blade
Route::get('/mynote', [MyNoteController::class, 'getPage'])->name('mynote');
Route::get('/joblist', 'JobsController@getPage')->name('joblist');
Route::get('/guests', 'GuestsController@index')->name('visitors_list');
Route::get('/notes', 'NotesController@index')->name('notes');
