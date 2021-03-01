<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyNoteController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PagesController;




Route::get('/', function () {
    return view('layouts.app');
})->name('home');







Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    //Route::delete('permissions/destroy', 'CatalogController@massDestroy')->name('permissions.massDestroy');

    Route::get('/', [CatalogController::class, 'index'])->name('index')->middleware('adminpanel');
    Route::post('/', 'CatalogController@store')->name('store');
    Route::post('/addArtist', 'CatalogController@addArtist')->name('addArtist');
    Route::post('/getGroup', 'CatalogController@getGroup')->name('getGroup');
    Route::get('artist/{artist}/edit', 'CatalogController@edit')->name('artist.edit');
    Route::post('/editid', 'CatalogController@editid')->name('editid');
    Route::post('/deleteid', 'CatalogController@deleteid')->name('deleteid');

    // Route::get('/admin', function () { return view('admin.catalog'); })->name('ad');
});

//Route::get('/', [PagesController::class, 'index'])->where('any', '.*');




// Левое меню и подменю mynote_bl.blade
Route::get('/mynote', [MyNoteController::class, 'getPage'])->name('mynote');
Route::get('/joblist', 'JobsController@getPage')->name('joblist');
Route::get('/guests', 'GuestsController@index')->name('visitors_list');
Route::get('/notes', 'NotesController@index')->name('notes');
