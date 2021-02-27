<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\LoginController;
use App\Http\Controllers\AdminPanel\RegisterController;
use App\Http\Controllers\CatalogController;

// Отвечает за показ формы, отправку данных и выход из админки
Route::group(['middleware' => ['admin']], function () {

    // Show form
    Route::get('login-admin', [LoginController::class, 'Form'])->name('showView-Login-in-AdminPanel');
    Route::get('/register-admin', [RegisterController::class, 'getViewRegister'])->name('showView-Register-in-AdminPanel');

    // Send form
    Route::post('/login-in-admin', [LoginController::class, 'Datasend'])->name('login-in-adminpanel');
    Route::post('/register-in-admin', 'AdminPanel\RegisterController@Datasend')->name('register-in-adminpanel');

    // Logout
    Route::post('/logout-admin',[LoginController::class, 'logout'])->name('logout-admin');

});

//Отвечает за действия внутри админки
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    //Route::delete('permissions/destroy', 'CatalogController@massDestroy')->name('permissions.massDestroy');
    //Route::resource('/', 'CatalogController');
    Route::get('/', [CatalogController::class, 'index'])->name('index')->middleware('adminpanel');
    Route::post('/', 'CatalogController@store')->name('store');
    Route::post('/addArtist', 'CatalogController@addArtist')->name('addArtist');
    Route::post('/getGroup', 'CatalogController@getGroup')->name('getGroup');
    Route::get('artist/{artist}/edit', 'CatalogController@edit')->name('artist.edit');
    Route::post('/editid', 'CatalogController@editid')->name('editid');
    Route::post('/deleteid', 'CatalogController@deleteid')->name('deleteid');

    // Route::get('/admin', function () { return view('admin.catalog'); })->name('ad');
});


