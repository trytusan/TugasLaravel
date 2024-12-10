<?php

use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BackPageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', [FrontPageController::class, 'index'])->name('landing');
Route::get('/product/{id}', [FrontPageController::class, 'itemdetails'])->name('product.itemdetails');
Route::get('/cart', [FrontPageController::class, 'cart'])->name('cart');
Route::get('/checkout', [FrontPageController::class, 'checkout'])->name('checkout');
Route::get('/panel', [BackPageController::class, 'panel'])->name('backpage.panel');
Route::get('/formadd', [BackPageController::class, 'formadd'])->name('backpage.formadd');
Route::get('/formedit/{id}', [BackPageController::class, 'formedit'])->name('backpage.formedit');

Route::resource('packages', PackageController::class);

Route::middleware('auth')->group(function () {
    Route::get('/backpage1/items', [PackageController::class, 'index'])->name('products.index');
    Route::post('/backpage2/items', [PackageController::class, 'store'])->name('admin.product.store');
    Route::get('/backpage2/items', [PackageController::class, 'store'])->name('admin.product.store');
    Route::get('/backpage/items', [PackageController::class, 'create'])->name('admin.product.create');
    Route::put('products/{id}', [PackageController::class, 'update'])->name('products.update');
    Route::get('backpage/items', [PackageController::class, 'index'])->name('admin.product');
    Route::delete('/backpage/items/{id}', [PackageController::class, 'destroy'])->name('products.destroy');
    Route::delete('/backpage/items', [PackageController::class, 'bulkDelete'])->name('products.bulkDelete');
}); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', [BackPageController::class, 'panel'])->name('panel');
    Route::get('/items', [BackPageController::class, 'items'])->name('items');
    Route::get('/orders', [BackPageController::class, 'orders'])->name('orders');
    Route::get('/ordersdetails', [BackPageController::class, 'ordersdetails'])->name('ordersdetails');
    Route::get('/formedit', [BackPageController::class, 'formedit'])->name('formedit');
});

Route::middleware('auth')->resource('package', PackageController::class);

require __DIR__ . '/auth.php';

