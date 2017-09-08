<?php

/* ----WELCOME ROUTES -----*/

Route::get('/', 'WelcomeController@index');
Route::get('/category/{id}', 'WelcomeController@category');
Route::get('/product-details/{id}', 'WelcomeController@product_details');

/* ----USER OPTIONS ROUTE----- */
Route::get('/user-login', 'WelcomeController@user_login');
Route::post('/user-login-check', 'WelcomeController@user_login_check');
Route::get('/user-logout', 'WelcomeController@user_logout');

/*Cart ROUTES*/
Route::post('/add-to-cart', 'CartController@add_to_cart');
Route::get('show-cart', 'CartController@show_cart');
Route::post('/update-cart', 'CartController@update_cart');
Route::get('/delete-to-cart/{id}', 'CartController@delete_to_cart');
Route::get('/empty-cart', 'CartController@empty_cart');

/*CHECKOUT routes */
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/save-user', 'CheckoutController@save_customer');
Route::post('/customer-login-check', 'CheckoutController@customer_login_check');
Route::get('/shipping-method', 'CheckoutController@shipping_method');
Route::post('/place-order', 'CheckoutController@place_order');
Route::get('/order-success', 'CheckoutController@order_success');

/*Admin Routes*/
Route::get('/admin-panel', 'AdminController@index');
Route::post('/admin_login_check', 'AdminController@admin_login_check');

/*Super Admin Routes */
Route::get('/dashboard', 'SuperAdminController@index');
Route::get('/admin-logout', 'SuperAdminController@logout');

/*Category Routes*/
Route::get('/add_category', 'SuperAdminController@add_category');
Route::post('/save-category', 'SuperAdminController@save_category');
Route::get('/manage-category', 'SuperAdminController@manage_category');
Route::get('/unpublished-category/{id}', 'SuperAdminController@unpublished_category');
Route::get('/published-category/{id}', 'SuperAdminController@published_category');
Route::get('/delete-category/{id}', 'SuperAdminController@delete_category');
Route::get('/edit-category/{id}', 'SuperAdminController@edit_category');
Route::post('/update-category', 'SuperAdminController@update_category');

/*PRODUCTS ROUTE*/
Route::get('/add-product', 'SuperAdminController@add_product');
Route::post('/save-product', 'SuperAdminController@save_product');
Route::get('/manage-product', 'SuperAdminController@manage_product');
Route::get('/unpublished-product/{id}', 'SuperAdminController@unpublished_product');
Route::get('/published-product/{id}', 'SuperAdminController@published_product');
Route::get('/delete-product/{id}', 'SuperAdminController@delete_product');
Route::get('/edit-product/{id}', 'SuperAdminController@edit_product');
Route::post('/update-product', 'SuperAdminController@update_product');

/*MAnufacturer Routes*/
Route::get('/add-manufacturer', 'SuperAdminController@add_manufacturer');
Route::post('/save-manufacturer', 'SuperAdminController@save_manufacturer');
Route::get('/manage-manufacturer', 'SuperAdminController@manage_manufacturer');
Route::get('/unpublished-manufacturer/{id}', 'SuperAdminController@unpublished_manufacturer');
Route::get('/published-manufacturer/{id}', 'SuperAdminController@published_manufacturer');
Route::get('/delete-manufacturer/{id}', 'SuperAdminController@delete_manufacturer');
Route::get('/edit-manufacturer/{id}', 'SuperAdminController@edit_manufacturer');
Route::post('/update-manufacturer', 'SuperAdminController@update_manufacturer');