<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::controller(FileController::class)->group(function(){
   Route::get('/','index');
   Route::post('file','Xabar')->name('file.store');
});
