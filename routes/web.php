<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Home\HomeController;
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
Route::group(['prefix' => '/admin'], function ($route) {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/subcategories', SubCategoryController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/attributes', AttributeController::class);
    Route::resource('/banners', BannerController::class);
    Route::get('/site-settings',[SettingController::class, 'SiteSetting'])->name('add.settings');
    Route::post('/store-settings',[SettingController::class, 'storeSetting'])->name('store.settings');
    Route::post('/update-settings',[SettingController::class, 'UpdateSetting'])->name('update.settings');
    Route::get('/get-subcategories', [ProductController::class, 'getSubcategories'])->name('get.subcategories');

});



Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/products-by-category/{slug}', [HomeController::class, 'ProductsByCategory'])->name('products.by.category');
Route::get('/products-by-subcategory/{slug}', [HomeController::class, 'ProductsBySubCategory'])->name('products.by.subcategory');
Route::get('/product-details/{slug}',[HomeController::class,'productdetails'])->name('product.details');
Route::get('/add-to-cart',[HomeController::class,'AddtoCart'])->name('add_to_cart');
Route::get('/remove-to-cart',[HomeController::class,'RemovetoCart'])->name('remove_to_cart');
Route::get('/get-products', [HomeController::class, 'getProducts'])->name('get.products');
