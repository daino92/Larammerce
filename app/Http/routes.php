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

//============= *** Product Routes *** =============///

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/increase/{id}', [
    'uses' => 'ProductController@getIncreaseByOne',
    'as' => 'product.increaseByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::get('/search', [
   'uses' => 'ProductController@getResults',
    'as' => 'shop.results'
]);

//Route::get('/signup/{confirmationCode}', [
//    'uses' => 'UserController@getSignup',
//    'as' => 'mails.email'
//]);

//============= *** User Routes *** =============//

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
        Route::get('/profile', [
            'uses' =>'UserController@getProfile',
            'as' => 'user.profile'
        ]);
        Route::get('/logout',[
            'uses' =>'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });
});
//=========================================================

//============= *** Admin Routes *** =============//

Route::get('/admin', [ //this leads to dashboard
    'uses' => 'AdminController@adminDashboard',
    'as' => 'admin.dashboard',
    'middleware' => 'auth'
]);

Route::get('/admin/dashboard', [
    'uses' => 'AdminController@adminDashboard',
    'as' => 'admin.dashboard',
    'middleware' => 'auth'
]);

Route::get('/admin/charts', [
    'uses' => 'AdminController@adminCharts',
    'as' => 'admin.charts',
    'middleware' => 'auth'
]);

Route::get('/admin/activities', [
    'uses' => 'AdminController@adminActivities',
    'as' => 'admin.activities',
    'middleware' => 'auth'
]);

Route::get('/admin/transactions', [
    'uses' => 'AdminController@adminTransactions',
    'as' => 'admin.transactions',
    'middleware' => 'auth'
]);

Route::get('/admin/products', [
    'uses' => 'AdminController@adminProducts',
    'as' => 'admin.products',
    'middleware' => 'auth'
]);

//--------------------------------------------------------------
Route::get('/admin/users/roles', [
    'uses' => 'AdminController@adminManageRoles',
    'as' => 'admin.users.roles',
    'middleware' => 'auth'
]);

//============= ***  Admin Users *** =============//

Route::get('/admin/users/allusers', [
    'uses' => 'AdminUserController@index',
    'as' => 'admin.users.allusers',
    'middleware' => 'auth'
]);

Route::get('/admin/users/adduser', [
    'uses' => 'AdminUserController@create',
    'as' => 'admin.users.adduser',
    'middleware' => 'auth'
]);

Route::get('/admin/users/{id}/edituser', [
    'uses' => 'AdminUserController@edit',
    'as' => 'admin.users.edituser',
    'middleware' => 'auth'
]);

Route::get('/admin/users/showusers/{id}', [
    'uses' => 'AdminUserController@show',
    'as' => 'admin.users.showusers',
    'middleware' => 'auth'
]);

Route::delete('/admin/users/{id}', [
    'uses' => 'AdminUserController@destroy',
    'as' => 'admin.users.destroyuser',
    'middleware' => 'auth'
]);

Route::patch('/admin/users/{id}', [
    'uses' => 'AdminUserController@update',
    'as' => 'admin.users.update',
    'middleware' => 'auth'
]);

Route::post('/admin/users/{id}', [
    'uses' => 'AdminUserController@store',
    'as' => 'admin.users.store',
    'middleware' => 'auth'
]);

//Route::group(['middleware' => 'auth'], function() {
//    Route::resource('admin/users', 'AdminUserController');
//});