<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//============= *** Product Routes *** =============//

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/search', [
    'uses' => 'ProductController@getResults',
    'as' => 'shop.results'
]);

Route::get('/categories', [
    'uses' => 'ProductController@getCategories',
    'as' => 'shop.categories'
]);

Route::get('/product-details/{id}', [
    'uses' => 'ProductController@preview_product',
    'as' => 'shop.preview_product'
]);

Route::get('/category', [
    'uses' => 'ProductController@products',
    'as' => 'shop.products'
]);

//=============== *** Cart Routes *** ===============//

Route::get('/add-to-cart/{id}', [
    'uses' => 'CartController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'CartController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/increase/{id}', [
    'uses' => 'CartController@getIncreaseByOne',
    'as' => 'product.increaseByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'CartController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shopping-cart', [
    'uses' => 'CartController@getCart',
    'as' => 'product.shoppingCart'
]);

//=============== *** Order Routes *** ===============//

Route::get('/checkout', [
    'uses' => 'OrderController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'OrderController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

//=============== *** User Routes *** ===============//

Route::group(['prefix' => 'user'], function() {
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/signup', [
            'uses' =>'UserController@getSignup',
            'as' => 'user.signup'
        ]);
        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);
        Route::get('/signin', [
            'uses' =>'UserController@getSignin',
            'as' => 'user.signin'
        ]);
        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });

    Route::group(['middleware' => 'auth'], function (){
        Route::get('/logout',[
            'uses' =>'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });
});

Route::get('/user/profile', [
    'uses' => 'UserController@userProfile',
    'as' => 'user.profile',
    'middleware' => 'auth', //need fix with CheckRole
    //'middleware' => 'roles',
    //'roles' => ['User']
]);

Route::patch('/user/profile/{id}',[
    'uses' => 'UserController@update',
    'as' => 'update.user',
    'middleware' => 'roles',
    'roles' => ['User']
]);

Route::get('/user/profile/order-history', [
    'uses' =>'UserController@OrderHistory',
    'as' => 'order.history',
    'middleware' => 'roles',
    'roles' => ['User']
]);

Route::get('/user/profile/ongoing-orders', [
    'uses' =>'UserController@OngoingOrders',
    'as' => 'ongoing.orders',
    'middleware' => 'roles',
    'roles' => ['User']
]);

//=============== *** Admin Routes *** ===============//

Route::get('/admin', [ //this leads to dashboard
    'uses' => 'AdminController@adminDashboard',
    'as' => 'admin.dashboard',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/dashboard', [
    'uses' => 'AdminController@adminDashboard',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/charts', [
    'uses' => 'AdminController@adminCharts',
    'as' => 'admin.charts',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/activities', [
    'uses' => 'AdminController@adminActivities',
    'as' => 'admin.activities',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/transactions', [
    'uses' => 'AdminController@adminTransactions',
    'as' => 'admin.transactions',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/products', [
    'uses' => 'AdminController@adminProducts',
    'as' => 'admin.products',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/users/vendors', [
    'uses' => 'AdminController@adminVendors',
    'as' => 'admin.users.vendors',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/users/roles', [
    'uses' => 'AdminController@adminManageRoles',
    'as' => 'admin.users.roles',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

//=============== ***  Admin CRUD Users *** ===============//

Route::get('/admin/users/allusers', [
    'uses' => 'AdminUserController@index',
    'as' => 'admin.users.allusers',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/users/showusers/{id}', [
    'uses' => 'AdminUserController@show',
    'as' => 'admin.users.showusers',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/users/adduser', [
    'uses' => 'AdminUserController@create',
    'as' => 'admin.users.adduser',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::post('/admin/users/{id}', [
    'uses' => 'AdminUserController@store',
    'as' => 'admin.users.store',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::get('/admin/users/{id}/edituser', [
    'uses' => 'AdminUserController@edit',
    'as' => 'admin.users.edituser',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::patch('/admin/users/{id}', [
    'uses' => 'AdminUserController@update',
    'as' => 'admin.users.update',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

Route::delete('/admin/users/{id}', [
    'uses' => 'AdminUserController@destroy',
    'as' => 'admin.users.destroyuser',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

//=============== *** Vendor Routes *** ===============//

Route::get('/vendor/profile',[
    'uses' => 'VendorController@vendorProfile',
    'as' => 'vendor.profile',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);

Route::patch('/vendor/profile/{id}',[
    'uses' => 'VendorController@update',
    'as' => 'update.vendor',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);

Route::get('/vendor/orders',[
    'uses' => 'VendorController@VendorOrders',
    'as' => 'vendor.orders',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);

//=============== ***  Vendor CRUD *** ===============//

Route::get('/vendor/allproducts',[
    'uses' => 'ProductCRUD@index',
    'as' => 'vendor.allproducts',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);

Route::get('/vendor/add-products',[
    'uses' => 'ProductCRUD@create',
    'as' => 'vendor.addproducts',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);

Route::post('/vendor/{id}', [
    'uses' => 'ProductCRUD@store',
    'as' => 'vendor.store',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);

Route::get('/vendor/showproducts/{id}', [
    'uses' => 'ProductCRUD@show',
    'as' => 'vendor.showproduct',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);

Route::get('/vendor/{id}/editproduct', [
    'uses' => 'ProductCRUD@edit',
    'as' => 'vendor.editproduct',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);

Route::patch('/vendor/{id}', [
    'uses' => 'ProductCRUD@update',
    'as' => 'vendor.update',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);

Route::delete('/vendor/{id}', [
    'uses' => 'ProductCRUD@destroy',
    'as' => 'vendor.destroyproduct',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Vendor']
]);