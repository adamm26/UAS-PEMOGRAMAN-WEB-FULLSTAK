<?php

use App\Http\Controllers\Auth\AdminAuth;
use App\Http\Controllers\Admin\Admin;
use App\Http\Controllers\Admin\Category;
use App\Http\Controllers\Admin\AdminRooms;
use App\Http\Controllers\Admin\AdminUsers;
use App\Http\Controllers\Auth\Signup;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    // Menampilkan halaman login
    Route::get('/login', [AdminAuth::class, 'showLoginForm'])->name('admin.login');

    // Memproses form login
    Route::post('/login', [AdminAuth::class, 'login'])->name('admin.login.submit');

    // dashboard
    Route::get('/dashboard', [Admin::class, 'index'])->name('index');

    // user
    Route::get('/users',[AdminUsers::class,'index'])->name('user-index');

    // rooms
    Route::get('/rooms', [AdminRooms::class, 'index'])->name('index-rooms');
    // create room
    Route::get('/room/create', [AdminRooms::class, 'showCreateForm'])->name('room-create');
    Route::post('/createroom', [AdminRooms::class, 'create'])->name('room-submit');
    // detail rooms
    Route::get('/rooms/{id}', [AdminRooms::class, 'view'])->name('room-detail');
    // update room
    Route::get('/room/{id}', [AdminRooms::class, 'roomUpdateForm'])->name('room-update-form');
    Route::post('/roomupdate/{id}', [AdminRooms::class, 'updateRoom'])->name('room-update-submit');
    // hapus room
    Route::delete('/destroyroom/{id}',[AdminRooms::class,'destroyRoom'])->name('destroy-room');

    // category
    Route::get('/category', [Category::class, 'index'])->name('index-category');
    // create
    Route::get('/category/create', [Category::class, 'showCreateForm'])->name('category-create');
    Route::post('/create', [Category::class, 'create'])->name('category-submit');
    // update category
    Route::get('/category/update/{id}', [Category::class, 'showUpdateForm'])->name('category-update');
    Route::post('/update/{id}', [Category::class, 'update'])->name('category-update-submit');
    // category view
    Route::get('/category/{id}', [Category::class, 'view'])->name('category-view');
    // delete
    Route::delete('/category/delete/{id}', [Category::class, 'destroy'])->name('category-destroy');
});

Route::get('/', function () {
    return view('landing-page.index');
})->name('landing-page');

route::get('/signup', function () {
    return view('auth.signup');
})->name('signup-page');

Route::post('create-user', [Signup::class, 'createUser'])->name('create-user');

route::get('/login', function () {
    return view('auth.login');
})->name('login-page');
