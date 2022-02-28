<?php
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/shop', [SiteController::class, 'shop'])->name('shop');

Route::get('/register', [SiteController::class, 'register'])->name('register');

Route::get('/login/login', [SiteController::class, 'login'])->name('login');

Route::get('/product/detail/{id}', [SiteController::class, 'product_details'])->name('product_details');

Route::get('/admin/products', [ProductController::class, 'index'])->name('products');

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('new_product');

Route::post('/admin/products/store', [ProductController::class, 'store'])->name('save_product');

Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('edit_product');

Route::post('/admin/products/update/{id}', [ProductController::class, 'update'])->name('update_product');

Route::get('/admin/products/delete/{id}', [ProductController::class, 'destroy'])->name('delete_product');


Route::get('/hola1', function(){
    return view('hello2');
});

Route::get('/hola3', [HelloController::class, 'hello3']);

Route::get('/hola4', [HelloController::class, 'hello4']);

Route::get('/hola5/{firstname}/{lastname}', [HelloController::class, 'hello5']);
