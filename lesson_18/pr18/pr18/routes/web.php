<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(ProductController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/product/{slug}', 'show')->name('product.show')->where('slug','[A-Za-z0-9-]+');

    Route::prefix('gurban')->name('products.')->group(function (){
        Route::get('/products/create', 'create')->name('create');
        Route::post('products', 'store')->name('store');
        Route::get('/products/{id}/edit', 'edit')->name('edit');
        Route::put('/products/{id}', 'update')->name('update');
        Route::delete('/products/{id}', 'delete')->name('delete');
    });
});
Route::get('/categories{slug}/products', [CategoryController::class, 'show'])
    ->name('categories/show')->where('slug', '[A-Za-z]');

Route::get('/brands{slug}/products', [BrandController::class, 'show'])
    ->name('brands/show')->where('slug', '[A-Za-z]');

