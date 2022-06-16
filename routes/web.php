<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers,Controller;
use App\Http\Controllers\SayhiController;
use App\Http\Controllers\ViewpageController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\FromController;
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
    return view('hello');
});



// Route::group(["prefix"=>'pnv'] ,function(){
//     Route::get("staffs", function(){
//         echo "staff";
//     } );
//     Route::get("students", function(){
//         echo "student";
//     } );
// });

// Route::get('/sayhi', function () {
//     return view('sayhi');
// });
Route::get('/goi', [SayhiController::class, 'hehe']);
Route::get('/vie', [ViewpageController::class, 'settexx']);

// Route::get('/tinh', function () {
//     return view('sum');
// });

// Route::get('/tinh',[CountController::class, 'show']);
// Route::post([CountController::class, 'show']);

Route::get('/formmmm', [FromController::class, 'display']);

// Route::get('/f', function () {
//     return view('FormRequest');
// });