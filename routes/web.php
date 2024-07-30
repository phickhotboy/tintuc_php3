<?php

use App\Http\Controllers\TintucController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TinController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('login', [AuthController::class, 'login'])
        ->name('login');

Route::post('login', [AuthController::class, 'postLogin'])
        ->name('postLogin');

Route::get('logout', [AuthController::class, 'logout'])
        ->name('logout');

Route::get('register', [AuthController::class, 'register'])
        ->name('register');

Route::post('register', [AuthController::class, 'postRegister'])
        ->name('postRegister');



    Route::get('/',[TintucController::class,'trangchu'])->name('trangchu');
    Route::get('/chitiet/{id}',[TintucController::class,'chitiet'])->name('chitiet');
    Route::get('/tintheoloai/{id}',[TintucController::class,'tinTheoLoai'])->name('tinTheoLoai');
    Route::get('/timkiem',[TintucController::class,'timkiem'])->name('timkiem');





Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'checkAdmin'
], function () {

    Route::group([
        'prefix' => 'tintucs',
        'as' => 'tintucs.'
    ], function () {
        Route::get('/', [TinController::class, 'listTintuc'])
        ->name('listTintuc');

        // .../admin/products/add-tintuc
        Route::get('/add-tintuc', [TinController::class, 'addTintuc'])
        ->name('addTintuc');

        Route::post('/add-tintuc', [TinController::class, 'addPostTintuc'])
        ->name('addPostTintuc');

        // Route::delete('delete-tintuc/{idTintuc}', [TinController::class,'deleteTintuc'])->name('deleteTintuc');
        
        // Route::get('/update-product/{idPd}', [ProductController::class, 'updateProduct'])
        // ->name('updateProduct');

        // Route::patch('/update-product/{idPd}', [ProductController::class, 'updatePostProduct'])
        // ->name('updatePostProduct');
    });
});