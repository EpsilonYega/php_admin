<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'admin_main']);

Route::get('/newuser_page', [MainController::class, 'admin_new_user']);

Route::post('/create_user', [MainController::class, 'admin_create_user']);

Route::get('/users', [MainController::class, 'admin_get_users']);

Route::get('/user_info/{login}', [MainController::class, 'admin_user_card']);

Route::get('/delete/{login}', [MainController::class, 'admin_drop_user']);

Route::get('/update_page/{login}', [MainController::class, 'admin_update_user_page']);

Route::post('/update/{data}', [MainController::class, 'admin_update_user']);