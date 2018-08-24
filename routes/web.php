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

        Route::post('/profile/update', [
            'uses' => 'UserController@postProfileUpdate',
            'as' => 'profileUpdate'
        ]);
    });
});

Route::get('/menu/{id?}', [
    'uses' => 'MenuController@getIndex',
    'as' => 'menu.index'
]);

Route::get('/menu/add-bookmark/{id}', [
    'uses' => 'MenuController@getBookmarkAdd',
    'as' => 'menu.addBookmark',
    'middleware' => 'auth'
]);

Route::get('/menu/delete-bookmark/{id}', [
    'uses' => 'MenuController@getBookmarkDelete',
    'as' => 'menu.deleteBookmark',
    'middleware' => 'auth'
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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'roles']], function(){
    Route::get('/user/list', [
        'uses' => 'AdminController@getUserList',
        'as' => 'userList',
        'roles' => ['Admin']
    ]);

    Route::get('/user/edit/{id}', [
        'uses' => 'AdminController@getUserForm',
        'as' => 'userEdit',
        'roles' => ['Admin']
    ]);

    Route::post('/user/update/{id}', [
        'uses' => 'AdminController@postUserUpdate',
        'as' => 'userUpdate',
        'roles' => ['Admin']
    ]);

    Route::get('/order/list', [
        'uses' => 'AdminController@getOrderList',
        'as' => 'orderList',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/order/show/{id?}', [
        'uses' => 'AdminController@getOrderShow',
        'as' => 'orderShow',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::post('/order/complete', [
        'uses' => 'AdminController@postOrderComplete',
        'as' => 'orderComplete',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/order/delete/{id}', [
        'uses' => 'AdminController@getOrderDelete',
        'as' => 'orderDelete',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/checkout/list', [
        'uses' => 'AdminController@getCheckoutList',
        'as' => 'checkoutList',
        'roles' => ['Admin']
    ]);

    Route::get('/checkout/show/{id?}', [
        'uses' => 'AdminController@getCheckoutShow',
        'as' => 'checkoutShow',
        'roles' => ['Admin']
    ]);

    Route::get('/checkout/show/{id?}/{user_id?}', [
        'uses' => 'AdminController@getUserCheckoutShow',
        'as' => 'userCheckoutShow',
        'roles' => ['Admin']
    ]);

    Route::get('/checkout/make', [
        'uses' => 'AdminController@getCheckoutMake',
        'as' => 'checkoutMake',
        'roles' => ['Admin']
    ]);

    # 카테고리 관리.
    Route::get('/category/list', [
        'uses' => 'AdminController@getCategoryList',
        'as' => 'categoryList',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/category/show/{id?}', [
        'uses' => 'AdminController@getCategoryShow',
        'as' => 'categoryShow',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/category/edit/{id?}', [
        'uses' => 'AdminController@getCategoryForm',
        'as' => 'categoryEdit',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::post('/category/update/{id}', [
        'uses' => 'AdminController@postCategoryUpdate',
        'as' => 'categoryUpdate',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/category/create', [
        'uses' => 'AdminController@getCategoryForm',
        'as' => 'categoryCreate',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::post('/category/create', [
        'uses' => 'AdminController@postCategoryCreate',
        'as' => 'categoryCreate',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/category/delete/{id}', [
        'uses' => 'AdminController@getCategoryDelete',
        'as' => 'categoryDelete',
        'roles' => ['Manager', 'Admin']
    ]);

    # 메뉴 관리.
    Route::get('/menu/list', [
        'uses' => 'AdminController@getMenuList',
        'as' => 'menuList',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/menu/show/{id?}', [
        'uses' => 'AdminController@getMenuShow',
        'as' => 'menuShow',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/menu/edit/{id?}', [
        'uses' => 'AdminController@getMenuForm',
        'as' => 'menuEdit',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::post('/menu/update/{id}', [
        'uses' => 'AdminController@postMenuUpdate',
        'as' => 'menuUpdate',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/menu/create', [
        'uses' => 'AdminController@getMenuForm',
        'as' => 'menuCreate',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::post('/menu/create', [
        'uses' => 'AdminController@postMenuCreate',
        'as' => 'menuCreate',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/menu/delete/{id}', [
        'uses' => 'AdminController@getMenuDelete',
        'as' => 'menuDelete',
        'roles' => ['Manager', 'Admin']
    ]);

    # 옵션메뉴 관리.
    Route::get('/option-menu/list', [
        'uses' => 'AdminController@getOptionMenuList',
        'as' => 'optionMenuList',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/option-menu/show/{id?}', [
        'uses' => 'AdminController@getOptionMenuShow',
        'as' => 'optionMenuShow',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/option-menu/edit/{id?}', [
        'uses' => 'AdminController@getOptionMenuForm',
        'as' => 'optionMenuEdit',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::post('/option-menu/update/{id}', [
        'uses' => 'AdminController@postOptionMenuUpdate',
        'as' => 'optionMenuUpdate',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/option-menu/create', [
        'uses' => 'AdminController@getOptionMenuForm',
        'as' => 'optionMenuCreate',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::post('/option-menu/create', [
        'uses' => 'AdminController@postOptionMenuCreate',
        'as' => 'optionMenuCreate',
        'roles' => ['Manager', 'Admin']
    ]);

    Route::get('/option-menu/delete/{id}', [
        'uses' => 'AdminController@getOptionMenuDelete',
        'as' => 'optionMenuDelete',
        'roles' => ['Manager', 'Admin']
    ]);
});

Route::group(['prefix' => 'checkout', 'as' => 'checkout.', 'middleware' => 'auth'], function(){
    Route::get('/index', [
        'uses' => 'CheckoutController@getCheckoutIndex',
        'as' => 'index'
    ]);

    Route::get('/show/{id?}', [
        'uses' => 'CheckoutController@getCheckoutShow',
        'as' => 'show'
    ]);

    Route::get('/complete/{id}', [
        'uses' => 'CheckoutController@getCheckoutComplete',
        'as' => 'complete'
    ]);
});