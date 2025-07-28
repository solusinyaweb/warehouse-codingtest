<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/user', function () {
    return view('user.user');
});
Route::get('/add-user', function () {
    return view('user.add-user');
});
Route::get('/edit-user', function () {
    return view('user.edit-user');
});
Route::get('/product', function () {
    return view('product.product');
});
Route::get('/add-product', function () {
    return view('product.add-product');
});
Route::get('/edit-product', function () {
    return view('product.edit-product');
});
Route::get('/category', function () {
    return view('category.category');
});
Route::get('/add-category', function () {
    return view('category.add-category');
});
Route::get('/edit-category', function () {
    return view('category.edit-category');
});
