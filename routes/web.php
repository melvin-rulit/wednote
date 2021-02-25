<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyNoteController;
use App\Http\Controllers\CatalogController;



Route::get('/', function () {
    return view('layouts.app');
});




//Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->where('any', '.*')->name('home');

// Верхнее меню MenuUpComponent.vue
Route::get('/catalog', [CatalogController::class, 'getPage'])->name('prodaction.index');
//Route::get('/catalog', 'CatalogController@ProdactionIndex')->name('prodaction.index');


Route::get('/menu', 'MenuController@index')->name('menu.index');
Route::post('/menu-delete', 'MenuController@deleteMenu')->name('menu.delete');
Route::post('/menu-store', 'MenuController@store')->name('menu.store');
Route::post('/menu-info', 'MenuController@totalInfo')->name('menu.totalinfo');
Route::post('/menu-list', 'MenuController@menuList')->name('menu.menulist');

Route::post('/menu-getmenu', 'MenuController@getMenu')->name('menu.getmenu');

Route::post('/menu-deletegroup', 'MenuController@deleteGroup')->name('menu.deletegroup');
Route::post('/menu-storegroup', 'MenuController@addGroup')->name('menu.addgroup');


Route::post('/day-delete', 'DayController@deleteDay')->name('day.delete');
Route::post('/day-store', 'DayController@store')->name('day.store');
Route::post('/day-list', 'DayController@menuDay')->name('day.menulist');
Route::post('/day-getmenu', 'DayController@getDay')->name('day.getmenu');


Route::get('inivation/view/{id}', 'InivationController@user');

Route::get('/inivation', 'InivationController@index');
Route::post('/inivation-send', 'InivationController@send')->name('inivation.send');
Route::post('/inivation-view', 'InivationController@view')->name('inivation.view');
Route::post('/inivation-yes', 'InivationController@viewYes')->name('inivation.yes');
Route::post('/inivation-edit', 'InivationController@edit')->name('inivation.edit');
Route::post('/inivation-editsave', 'InivationController@editSave')->name('inivation.editsave');

// Route::post('/kalendar', 'CalendarController@send');
// Route::get('/kalendar', 'CalendarController@index');
// Route::post('/kalendar', 'CalendarController@store')->name('kalendar.store');

// Route::post('/kalendar', 'CalendarController@send')->name('kalendar.send');;
Route::get('/kalendar', 'CalendarController@index')->name('kalendar.index');
// Route::post('/kalendar', 'CalendarController@store')->name('kalendar.store');

Route::post('/inivation-store', 'InivationController@store')->name('inivation.store');


Route::post('/kalendar-send', 'CalendarController@send')->name('kalendar.send');
Route::post('/kalendar-store', 'CalendarController@store')->name('kalendar.store');
Route::post('/kalendar-delete', 'CalendarController@deleteJob')->name('kalendar.delete');

// Список mynote_bl.blade
Route::get('/mynote', [MyNoteController::class, 'getPage'])->name('mynote');
Route::get('/joblist', 'JobsController@getPage')->name('joblist');
Route::get('/guests', 'GuestsController@index')->name('visitors_list');
Route::get('/notes', 'NotesController@index')->name('notes');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    //Route::delete('permissions/destroy', 'CatalogController@massDestroy')->name('permissions.massDestroy');
    //Route::resource('/', 'CatalogController');
    Route::get('/', 'CatalogController@index')->name('index')->middleware('adminpanel');
    Route::post('/', 'CatalogController@store')->name('store');
    Route::post('/addArtist', 'CatalogController@addArtist')->name('addArtist');
    Route::post('/getGroup', 'CatalogController@getGroup')->name('getGroup');
    Route::get('artist/{artist}/edit', 'CatalogController@edit')->name('artist.edit');
    Route::post('/editid', 'CatalogController@editid')->name('editid');
    Route::post('/deleteid', 'CatalogController@deleteid')->name('deleteid');

    // Route::get('/admin', function () { return view('admin.catalog'); })->name('ad');
});


Route::get('/register', 'Auth\AuthController@getRegisterPage')->name('register');
