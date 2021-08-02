<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserpageController;
use App\Http\Controllers\QuanlyMuonsachController;
use App\Http\Controllers\ThanhvienController;
use App\Http\Controllers\MuonsachController;
use App\Models\DanhmucSach;
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

// Route::get('/', function () {
//     $danhmuc = DanhmucSach::orderBy('id_Danhmuc','DESC')->get();
//     return view('homepage.userpage')->with(compact('danhmuc'));
// });

Route::get('/',[UserpageController::class, 'index']);
Route::get('/danh-muc/{slugdanhmuc}',[UserpageController::class, 'danhmuc']);
Route::get('/chi-tiet/{slugsach}',[UserpageController::class, 'chitiet'])->middleware('auth');
Route::get('/tim-kiem',[UserpageController::class, 'timkiem']);
Route::post('/muon-sach-1',[MuonsachController::class, 'store'])->middleware('checkborrowed');
Route::get('/muon-sach',[MuonsachController::class, 'index'])->middleware('auth');;
Route::get('/the-thanh-vien',[UserpageController::class, 'thethanhvien'])->middleware('auth');







Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('checklogin');
Route::resource('/danhmucsach',DanhmucController::class);
Route::resource('/sach',SachController::class);
Route::resource('/dashboard',DashboardController::class);
Route::get('/quanlymuonsach',[QuanlyMuonsachController::class, 'index'])->middleware('auth');
Route::get('/quanlymuonsach/require',[QuanlyMuonsachController::class, 'require'])->middleware('auth');
Route::post('/quanlymuonsach/dongy',[QuanlyMuonsachController::class, 'dongy']);
Route::post('/quanlymuonsach/tuchoi',[QuanlyMuonsachController::class, 'tuchoi']);
Route::post('/quanlymuonsach/datra',[QuanlyMuonsachController::class, 'datra']);
Route::resource('/thanhvien',ThanhvienController::class);





    
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
