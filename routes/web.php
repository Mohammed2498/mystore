<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\CheckUserType;
use App\Models\Category;
use Database\Seeders\ProductsTableSeeder;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/store', function () {
    return view('store.index');
})->name('store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
// Route::controller(CategoryController::class)->
Route::group([
    'prefix' => 'dashboard', //link
    'as' => 'categories.', //rote names
    'middleware' => ['auth', CheckUserType::class]
], function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('index');
    Route::get('categories/create', [CategoryController::class, 'create'])->name('create');
    Route::post('categories/create', [CategoryController::class, 'store'])->name('store');
    Route::get('categories/trashed', [CategoryController::class, 'getTrashed'])->name('trashed');
    Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    Route::delete('categories/{id}/forcedelete', [CategoryController::class, 'deleteTrashedCategories'])->name('deleteTrashedCategories');
    Route::put('categories/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    Route::get('categories/{category}', [CategoryController::class, 'show'])->name('show');
});
Route::group([
    'prefix' => 'dashboard',
], function () {
    Route::resource('products', ProductController::class);
    Route::delete('products/image/{id}', [ProductController::class, 'destroyImage'])
        ->name('products.images.destroy');
    Route::resource('users', UserController::class);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
