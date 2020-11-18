<?php

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
/* FrontEnd Location */
Route::get('/', 'IndexController@index');
Route::get('/list-products', 'IndexController@shop');
Route::get('/cat/{id}', 'IndexController@listByCat')->name('cats');
Route::get('/product-detail/{id}', 'IndexController@detailpro');

////// get Attribute ////////////
Route::get('/get-product-attr', 'IndexController@getAttrs');

/// Coupon Area ///
Route::post('/apply-coupon', 'CouponController@applycoupon');
Route::post('/cancel-coupon', 'CouponController@cancelcoupon');

/// Simple User Login /////
Route::get('/login_page', 'UsersController@index');
Route::post('/register_user', 'UsersController@register');
Route::post('/user_login', 'UsersController@login');
Route::get('/logout', 'UsersController@logout');

////// User Authentications ///////////
Route::group(['middleware' => 'FrontLogin_middleware'], function () {
    Route::get('/myaccount', 'UsersController@account');
    Route::put('/update-profile/{id}', 'UsersController@updateprofile');
    Route::put('/update-password/{id}', 'UsersController@updatepassword');
    Route::get('/check-out', 'CheckOutController@index');
    Route::post('/submit-checkout', 'CheckOutController@submitcheckout');
    Route::get('/order-review', 'OrdersController@index');
    Route::post('/submit-order', 'OrdersController@order');
    Route::get('/payment/transfer-bank/{id}', 'OrdersController@transferbank');
    // Route::get('/payment/e-wallet/{id}', 'OrdersController@ewallet');
    // Route::get('/paypal', 'OrdersController@paypal');

    ///// Cart Area /////////
    Route::post('/addToCart', 'CartController@addToCart')->name('addToCart');
    Route::get('/viewcart', 'CartController@index');
    Route::get('/cart/deleteItem/{id}', 'CartController@deleteItem');
    Route::get('/cart/update-quantity/{id}/{quantity}', 'CartController@updateQuantity');
});


// ==============================================================================================

/* Admin Location */
Auth::routes(['register' => false]);
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'ProductsController@index');

    /// Setting Area
    // Route::get('/settings', 'AdminController@settings');
    // Route::get('/check-pwd', 'AdminController@chkPassword');
    // Route::post('/update-pwd', 'AdminController@updatAdminPwd');

    /// Category Area
    Route::resource('/category', 'CategoryController');
    Route::get('delete-category/{id}', 'CategoryController@destroy');
    Route::get('/check_category_name', 'CategoryController@checkCateName');

    /// Products Area
    Route::resource('/product', 'ProductsController');
    Route::get('delete-product/{id}', 'ProductsController@destroy');
    Route::get('delete-image/{id}', 'ProductsController@deleteImage');

    /// Product Attribute
    Route::resource('/product_attr', 'ProductAtrrController');
    Route::get('delete-attribute/{id}', 'ProductAtrrController@deleteAttr');

    /// Product Images Gallery
    Route::resource('/image-gallery', 'ImagesController');
    Route::get('delete-imageGallery/{id}', 'ImagesController@destroy');

    /// Coupon
    Route::resource('/coupon', 'CouponController');
    Route::get('delete-coupon/{id}', 'CouponController@destroy');
});
