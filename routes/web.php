<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

// CUSTOMER ROUTES
Route::get('/', function () {
    return view('customer.welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('customer.aboutus');
})->name('about');

Route::get('/faqs', function () {
    return view('customer.faqs');
})->name('faqs');

Route::get('/login', function () {
    return view('customer.login');
})->name('login');

Route::get('/register', function () {
    return view('customer.register');
})->name('register');

// MENU NAVIGATION ROUTES
Route::get('/drinks', function () {
    return view('customer.drinks');
})->name('menu.drinks');

Route::get('/pastries', function () {
    return view('customer.pastries');
})->name('menu.pastries');

// CART FUNCTIONALITY ROUTES
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::patch('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');

// CHECKOUT FLOW ROUTES
Route::get('/shipping', function () {
    return view('customer.shipping');
})->name('checkout');

// STAFF INTERFACE ROUTES (TESTING)
Route::get('/test-staff', function () {
    return view('staff.dashboard');
});

Route::get('/test-staff-orders', function () {
    return view('staff.orders');
});

Route::get('/test-staff-catalog', function () {
    return view('staff.catalog');
});

// ADMIN MANAGEMENT ROUTES
Route::get('/test-admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/orders', function () {
    return view('admin.orders');
})->name('admin.orders');

Route::get('/admin/catalog', function () {
    return view('admin.catalog');
})->name('admin.catalog');

Route::get('/admin/payments', function () {
    return view('admin.payments');
})->name('admin.payments');

Route::get('/admin/customers', function () {
    return view('admin.customers');
})->name('admin.customers');

Route::get('/admin/users', function () {
    return view('admin.users');
})->name('admin.users');

Route::get('/admin/notifications', function () {
    return view('admin.notifications');
})->name('admin.notifications');

Route::get('/admin/settings', function () {
    return view('admin.settings');
})->name('admin.settings');