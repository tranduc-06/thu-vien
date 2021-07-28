<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserpageController;
use App\Http\Controllers\MuonsachController;
use App\Http\Controllers\ThanhvienController;
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
    return view('homepage.userpage');
});




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('checklogin');
Route::resource('/danhmucsach',DanhmucController::class);
Route::resource('/sach',SachController::class);
Route::resource('/dashboard',DashboardController::class);
Route::resource('/userpage',UserpageController::class);
Route::resource('/muonsach',MuonsachController::class);
Route::resource('/muonsach',MuonsachController::class);
Route::resource('/thanhvien',ThanhvienController::class);





    
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
