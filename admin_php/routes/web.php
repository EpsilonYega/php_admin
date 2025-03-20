<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'admin_main']);

Route::get('/newuser_page', [MainController::class, 'admin_new_user']);

Route::post('/create_user', [MainController::class, 'admin_create_user']);

Route::get('/users', [MainController::class, 'admin_get_users']);

Route::get('/user_info', [MainController::class, 'admin_user_card']);

Route::get('/info', [MainController::class, 'admin_get_user']);

// Route::post('/delete', [MainController::class, 'admin_drop_user']);

Route::get('/delete', [MainController::class, 'admin_drop_user']);

Route::get('/update_page', [MainController::class, 'admin_update_user_page']);

Route::post('/update', [MainController::class, 'admin_update_user']);