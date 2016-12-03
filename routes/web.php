<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [
        'uses' => 'DashboardController@getIndex',
        'as' => 'dashboard.index'
    ]);
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function(){
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'signup'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'signin'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'signin'
        ]);
    });

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'logout'
        ]);

        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'profile'
        ]);
    });
});

Route::get('/menu/{id?}', [
    'uses' => 'MenuController@getIndex',
    'as' => 'menu.index'
]);

Route::group(['prefix' => 'cart', 'as' => 'cart.'], function(){
    Route::get('/list', [
        'uses' => 'ShoppingCartController@getCart',
        'as' => 'list'
    ]);

    Route::get('/add-item/{id}', [
        'uses' => 'ShoppingCartController@getAddItem',
        'as' => 'addItem'
    ]);

    Route::get('/add-option-item/{menu_id}/{option_id}', [
        'uses' => 'ShoppingCartController@getAddOptionItem',
        'as' => 'addOptionItem'
    ]);

    Route::get('/delete-item/{id}', [
        'uses' => 'ShoppingCartController@getDeleteItem',
        'as' => 'deleteItem'
    ]);

    Route::get('/delete-option-item/{menu_id}/{option_id}/{option_index}', [
        'uses' => 'ShoppingCartController@getDeleteOptionItem',
        'as' => 'deleteOptionItem'
    ]);

    Route::get('/empty', [
        'uses' => 'ShoppingCartController@getEmptyCart',
        'as' => 'emptyCart'
    ]);

    Route::get('/checkout', [
        'uses' => 'ShoppingCartController@getCheckout',
        'as' => 'checkout',
        'middleware' => 'auth'
    ]);
});

Route::group(['prefix' => 'order', 'as' => 'order.', 'middleware' => 'auth'], function(){
    Route::get('/', [
        'uses' => 'OrderController@getIndex',
        'as' => 'index'
    ]);

    Route::get('/show/{id}', [
        'uses' => 'OrderController@getShow',
        'as' => 'show'
    ]);

    Route::get('/cancel/{id}', [
        'uses' => 'OrderController@getCancel',
        'as' => 'cancel'
    ]);
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){
    Route::get('/order/list', [
        'uses' => 'AdminController@getOrderList',
        'as' => 'orderList'
    ]);

    Route::get('/order/show/{id?}', [
        'uses' => 'AdminController@getOrderShow',
        'as' => 'orderShow'
    ]);

    Route::get('/order/complete', [
        'uses' => 'AdminController@getOrderComplete',
        'as' => 'orderComplete'
    ]);
});