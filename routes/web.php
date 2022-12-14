<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user/diskusi', function () {
    return view('user.diskusi');
})->name('diskusi');

require __DIR__.'/auth.php';

Route::get('/chat', [ChatController::class, 'index'])->middleware(['auth'])->name('chat');
Route::get('messages', [ChatController::class, 'fetchMessages']);
Route::post('messages', [ChatController::class, 'sendMessage']);
Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user');
Route::get('/user/wishlist', [UserController::class, 'wishlist'])->middleware(['auth'])->name('wishlist');
Route::resource('product', ProductController::class);

Route::view('/test', 'product.product-detail');
