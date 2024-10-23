<?php

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

Route::get('/admin', function () {
    return view('welcome'); // or return a string: return 'Hello, Laravel!';
});
// Route::get('/greeting', function () {
//     return 'Hello World';
// });
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');