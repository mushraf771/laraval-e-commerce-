<?php

use App\Http\Controllers\backend\BannerContoller;
use App\Http\Controllers\backend\BrandsController;
use App\Http\Controllers\backend\CategoryContoller;
use App\Http\Controllers\backend\ProductAttributeController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\ProductImageController;
use App\Http\Controllers\backend\SubCategoryController;
use App\Http\Controllers\backend\TestimonialContoller;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\frontend\dashboard\accounnt\AddressController;
use App\Http\Controllers\frontend\dashboard\accounnt\ChangePasswordController;
use App\Http\Controllers\frontend\dashboard\accounnt\ProfileController;
use App\Http\Controllers\frontend\dashboard\accounnt\ResetPasswordController;
use App\Http\Controllers\frontend\dashboard\DashboardController;
use App\Http\Controllers\frontend\dashboard\orders\CancelledOrderController;
use App\Http\Controllers\frontend\dashboard\orders\OrdersController;
use App\Http\Controllers\frontend\dashboard\orders\ReturnedOrderController;
use App\Http\Controllers\frontend\dashboard\orders\ReviewsController;
use App\Http\Controllers\frontend\dashboard\payment\PaymentController;
use App\Http\Controllers\frontend\dashboard\payment\PrivacyController;
use App\Http\Controllers\frontend\dashboard\wishlist\WishlistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController as prd;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
//     Route::get('/',[HomeController::class ,'index'])->name('index');
// });
// Route::middleware([''])->name('dashboard.')->prefix('dashboard')->group(function () 
Route::middleware(['auth'])->name('dashboard.')->prefix('dashboard')->group(function () 
{
        Route::get('/', [HomeController::class,'redirect']);
       
        // account
        Route::resource('/user-profile',ProfileController::class,);
        Route::resource('/user-address', AddressController::class);
        // Route::resource('/user-change-password',ChangePasswordController::class);
        // Route::resource('/user-reset-password',ResetPasswordController::class);
        // orders
        Route::resource('/orders',OrdersController::class);
        Route::resource('/order-returns',ReturnedOrderController::class);
        Route::resource('/cancelled-orders',CancelledOrderController::class);
        Route::resource('/reviews',ReviewsController::class);
        //    wishlilst
        Route::resource('/wishlist',WishlistController::class);
        // payment
        Route::resource('/payment-method',PaymentController::class);
        Route::resource('/privacy',PrivacyController::class);
        Route::resource('/categories',CategoryContoller::class);
        Route::resource('/sub-categories',SubCategoryController::class);
        Route::resource('/brands',BrandsController::class);
        Route::resource('/products',ProductController::class);
        Route::resource('/product-images',ProductImageController::class);
        Route::resource('/product-attributes',ProductAttributeController::class);
        Route::resource('/testimonials',TestimonialContoller::class);
        Route::resource('/orders',OrdersController::class);
        Route::resource('/banners',BannerContoller::class);
});
Route::middleware(['auth'])->name('dashboard.')->prefix('dashboard')->group(function () 
{
        Route::get('/', [HomeController::class,'redirect']);    
        // account
        Route::resource('/user-profile',ProfileController::class,);
        Route::resource('/user-address', AddressController::class);
        Route::resource('/user-change-password',ChangePasswordController::class);
        Route::resource('/user-reset-password',ResetPasswordController::class);
        // orders
        Route::resource('/orders',OrdersController::class);
        Route::resource('/order-returns',ReturnedOrderController::class);
        Route::resource('/cancelled-orders',CancelledOrderController::class);
        Route::resource('/reviews',ReviewsController::class);
        //    wishlilst
        Route::resource('/wishlist',WishlistController::class);
        // payment
        Route::resource('/payment-method',PaymentController::class);
        Route::resource('/privacy',PrivacyController::class);
});
// routes
// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified','auth'])->group(function () 
// {
       Route::get('/', [HomeController::class,'index']);
       // Route::get('/', [HomeController::class,'index']);
       Route::get('/category', [CategoriesController::class,'index']);
       Route::get('/product', [ProductController::class,'index']);
       Route::get('/zoom', [ProductController::class,'index2']);
       Route::get('/sign', [ProductController::class,'signup']);
       Route::get('/logon', [ProductController::class,'login']);
       Route::get('/checkout', [ProductController::class,'checkout']);
       Route::get('/wishlist', [ProductController::class,'wishlist']);
       Route::get('/cart', [ProductController::class,'cart']);
       // Route::get('/dashboard', [ProductController::class,'dashboard']);
// });