<?php

use App\Http\Controllers\Admim\AdminController;
use App\Http\Controllers\AdminController01;
use App\Http\Controllers\CategoryContoller001;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController001;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.dashboard-home');
});

Route::get('/dashboard', function () {
    return view('home.dashboard-home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
route::get('/admin/dashboard',[AdminController01::class,'dashboard'])->name('admin.dashboard');
//route::get('/home/dashboard-home',[HomeController::class,'dashboard'])->name('home.dashboard-home');

// Route::get('/category', [CategoryController::class, 'index'])->name("category.list");

//category route
Route::get('/category', [CategoryContoller001::class, 'index'])->name("category.list");
Route::get('/category/create', [CategoryContoller001::class, 'create'])->name("category.create");
Route::post('/category', [CategoryContoller001::class, 'store'])->name("category.store");
Route::get("/category/{categoryId}/edit", [CategoryContoller001::class, 'edit'])->name('category.edit');
Route::put("/category/{categoryId}", [CategoryContoller001::class, 'update'])->name('category.update');
 Route::delete("/category/{categoryId}", [CategoryContoller001::class, 'destroy'])->name('category.delete');
Route::get('/category/{cateId}', [CategoryContoller001::class, 'show'])->name("category.show");

// product router
Route::get('/product',[ProductController001::class,'index'])->name('product.index');
 Route::get('/product/create',[ProductController001::class,'create'])->name('product.create');
 Route::post('/product',[ProductController001::class,'store'])->name('product.store');
Route::get('/product/{productId}',[ProductController001::class,'show'])->name('product.show');
Route::delete('/product/{product}',[ProductController001::class,'destroy'])->name('product.destroy');
Route::get('/product/{product}/edit',[ProductController001::class,'edit'])->name('product.edit');
Route::put('/product/{product}',[ProductController001::class,'update'])->name('product.update');


//home route
Route::get('/faqs',[DashboardController::class,'faqs'])->name('home.faqs');
// Route::get('/profile',[DashboardController::class,'profile'])->name('home.profile');
Route::get('/',[DashboardController::class,'index'])->name('home.home-dashboard');
Route::get('/home/shop/{category?}',[DashboardController::class,'shop'])->name('home.shop');

Route::get('/cart', [DashboardController::class, 'cart'])->middleware(['auth', 'verified'])->name('home.cart');
Route::get('/add-to-cart/{id}', [DashboardController::class, 'addToCart'])->middleware(['auth', 'verified'])->name('add.to.cart');
Route::patch('/update-cart', [DashboardController::class, 'update'])->name('update.cart');
Route::delete('/remove-from-cart', [DashboardController::class, 'remove'])->name('remove.from.cart');
Route::get('/cart_detail/{id}',[DashboardController::class,'cart_detail'])->middleware(['auth', 'verified'])->name('cart_detail');

Route::get('/checkout',[DashboardController::class,'checkout'])->middleware(['auth', 'verified'])->name('checkout');
Route::get('/search', [DashboardController::class, 'getBySearch'])->name('search_product');


//route payment 
Route::get('/stripe', [DashboardController::class,'stripe'])->middleware(['auth', 'verified'])->name('stripe');
Route::post('/stripe', [DashboardController::class,'stripePost'])->middleware(['auth', 'verified'])->name('stripe.post');

//aba pay
Route::get('/abapay',[PaymentController::class,'showCheckOutForm'])->middleware(['auth', 'verified'])->name('abapay');


//Order item to admin
Route::get('/orders', [OrderController::class, 'index'])->name('admin.order');
Route::post('/orders/approve/{id}', [OrderController::class, 'approve'])->name('admin.approve');
Route::post('/orders/reject/{id}', [OrderController::class, 'reject'])->name('admin.reject');

//User comment
Route::post('/coment',[CommentController::class,'comment'])->middleware(['auth', 'verified'])->name('comment');
Route::get('/admin_comment',[CommentController::class,'admin_comment'])->name('admin_comment');

Route::get('/frontend/{category?}', [DashboardController::class,'getByCategory'])->name('home.getByCategory');
Route::get('/send_Mail/{id}',[MailController::class,'sendMail'])->name('sendMail');
Route::get('/reciveMail/{id}',[MailController::class,'reciveMail'])->name('reciveMail');

//get Wishlist


Route::post('/wishlist/add', [WishlistController::class, 'addToWishlist'])->middleware(['auth', 'verified'])->name('wishlist.add');
Route::get('/wishlist', [WishlistController::class, 'viewWishlist'])->middleware(['auth', 'verified'])->name('wishlist.view');
Route::post('/wishlist/move-to-cart', [WishlistController::class, 'moveToCart'])->middleware(['auth', 'verified'])->name('wishlist.moveToCart');
// Route::get('/cart/ab', [WishlistController::class, 'viewCart'])->name('cart.view');
Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'removeFromWishlist'])->name('wishlist.remove');
// routes/web.php


// Route::get('/wishlist', [WishlistController::class, 'showWishlist'])->name('wishlist.show');
// Route::get('/showProducts',[DashboardController::class,'showProducts'])->name('showProducts');


use App\Http\Controllers\RatingController;
use App\Http\Controllers\SampleController;

Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');


// Add this to your routes/web.php
Route::post('/rating/store', [RatingController::class, 'store'])->name('rating.store');

//about
Route::get('/about', function () {
    return view('home.about_form');
})->name('about.form');


// sample
Route::get('/sample',[SampleController::class,'sample'])->name('sample.form');
