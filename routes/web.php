<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AssignController;

use Illuminate\Support\Facades\Auth;

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
//     return view('main');
// });

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function() {
    Auth::routes();
});

// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/register', function(){
    return redirect('/login');
});

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
 });

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('inventory', [InventoryController::class, 'index'])->name('inventory.index');
        Route::get('inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
        Route::post('inventory/store', [InventoryController::class, 'store'])->name('inventory.store');
        Route::get('inventory/preview/{id}', [InventoryController::class, 'preview'])->name('inventory.preview');

        Route::get('assign', [AssignController::class, 'index'])->name('assign.index');
        Route::get('assign/create', [AssignController::class, 'create'])->name('assign.create');
        Route::post('assign/store', [AssignController::class, 'store'])->name('assign.store');
        
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth', 'PreventBackHistory']], function(){
        Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
