<?php

use App\Http\Controllers\pemasukancontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Dashboard',[
        "title"=>"Dashboard"
    ]);
});
Route::resource('pemasukan',pemasukancontroller::class)->except('destroy','update','edit');
Route::resource('pemasukan', PemasukanController::class);
