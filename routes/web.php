<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Client\Users\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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

Route::get('admin/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/login/store', [LoginController::class, 'store']);


Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/main', [MainController::class, 'index'])->name('admin');
        Route::get('logout/admin', [LoginController::class, 'logout']);

        #DanhMuc
        Route::get('menus/add', [MenuController::class, 'create']);
        Route::post('menus/add/store', [MenuController::class, 'store']);
        Route::get('menus/list', [MenuController::class, 'index']);
        Route::DELETE('menus/destroy', [MenuController::class, 'destroy']);
        Route::get('menus/edit/{menu}', [MenuController::class, 'show']);
        Route::post('menus/edit/{menu}', [MenuController::class, 'update']);
        Route::post('menus/active/{menu}', [MenuController::class, 'edit']);

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);
    });
});

Route::post('/register/store', [RegisterController::class, 'store']);

Route::get('/logout',[RegisterController::class, 'logout']);

Route::get('/', function () {
    return view('client.home');
})->name('home');
Route::get('/cart', function () {
    return view('client.cart.list');
});

Route::get('/check', function () {
    return view('client.cart.checkout');
});

Route::get('/details', function () {
    return view('client.product.detail');
});

Route::get('/about', function () {
    return view('client.infor.about');
});

Route::get('/login', function () {
    return view('client.login.login');
});
Route::get('/register', function () {
    return view('client.login.register');
});
Route::get('/quick', function () {
    return view('client.product.quick');
});
