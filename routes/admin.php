<?php


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



