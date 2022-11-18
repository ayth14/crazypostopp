<?php

use App\Http\Controllers\HomeControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(HomeControllers::class)
    ->group( function () {
        Route::get('/', 'index')->name('home');
        Route::get('/post/create', 'create')->name('post.create');
        Route::post('store', 'store')->name('post.store');
        
        
        Route::get('/post/{postList}', 'postView')->name('post.view');

    });

