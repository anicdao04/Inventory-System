<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\AccountController;

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AssignController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\TaskController;

use App\Http\Controllers\ManageController;
use App\Http\Controllers\MaintenanceScheduleController;
use App\Http\Controllers\MaintenanceRepairController;
use App\Http\Controllers\MaintenanceTransferController;

use App\Models\MaintenanceSchedule;
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
        Route::get('inventory/modify/{id}', [InventoryController::class, 'modify'])->name('inventory.modify');
        Route::get('inventory/update/{id}', [InventoryController::class, 'update'])->name('inventory.update');
        Route::get('inventory/query', [InventoryController::class, 'query'])->name('inventory.query');
        Route::get('inventory-list', [InventoryController::class, 'list'])->name('inventory.list');

        Route::get('assign', [AssignController::class, 'index'])->name('assign.index');
        Route::get('assign/create', [AssignController::class, 'create'])->name('assign.create');
        Route::post('assign/store', [AssignController::class, 'store'])->name('assign.store');
        Route::get('assign/modify/{id}', [AssignController::class, 'modify'])->name('assign.modify');
        Route::put('assign/update/{id}', [AssignController::class, 'update'])->name('assign.update');

        Route::get('designation', [DesignationController::class, 'index'])->name('designation.index');
        Route::get('designation/create', [DesignationController::class, 'create'])->name('designation.create');
        Route::post('designation/store', [DesignationController::class, 'store'])->name('designation.store');
        Route::get('designation/modify/{id}', [DesignationController::class, 'modify'])->name('designation.modify');
        Route::put('designation/update/{id}', [DesignationController::class, 'update'])->name('designation.update');

        Route::get('category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category/modify/{id}', [CategoryController::class, 'modify'])->name('category.modify');
        Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

        Route::get('item', [ItemController::class, 'index'])->name('item.index');
        Route::get('item/create', [ItemController::class, 'create'])->name('item.create');
        Route::post('item/store', [ItemController::class, 'store'])->name('item.store');
        Route::get('item/modify/{id}', [ItemController::class, 'modify'])->name('item.modify');
        Route::put('item/update/{id}', [ItemController::class, 'update'])->name('item.update');

        Route::get('condition', [ConditionController::class, 'index'])->name('condition.index');
        Route::get('condition/create', [ConditionController::class, 'create'])->name('condition.create');
        Route::post('condition/store', [ConditionController::class, 'store'])->name('condition.store');
        Route::get('condition/modify/{id}', [ConditionController::class, 'modify'])->name('condition.modify');
        Route::put('condition/update/{id}', [ConditionController::class, 'update'])->name('condition.update');

        Route::get('task', [TaskController::class, 'index'])->name('task.index');
        Route::get('task/create', [TaskController::class, 'create'])->name('task.create');
        Route::post('task/store', [TaskController::class, 'store'])->name('task.store');
        Route::get('task/modify/{id}', [TaskController::class, 'modify'])->name('task.modify');
        Route::put('task/update/{id}', [TaskController::class, 'update'])->name('task.update');

        Route::get('manage', [ManageController::class, 'index'])->name('manage.index');
        Route::get('manage/transfer', [ManageController::class, 'transfer'])->name('transfer.index');
        Route::get('manage/transfer/category/', [ManageController::class, 'transfer_query'])->name('transfer.query');
        Route::get('manage/transfer/item/{id}', [ManageController::class, 'transfer_item'])->name('transfer.item');
        Route::get('manage/transfer/update', [ManageController::class, 'transfer_update'])->name('transfer.update');

        Route::get('manage/scheduling', [ManageController::class, 'scheduling'])->name('scheduling.index');
        Route::get('manage/scheduling/category/', [ManageController::class, 'scheduling_query'])->name('scheduling.query');
        Route::get('manage/scheduling/item/{id}', [ManageController::class, 'scheduling_item'])->name('scheduling.item');

        Route::get('manage/repair', [ManageController::class, 'repair'])->name('repair.index');
        Route::get('manage/repair/category/', [ManageController::class, 'repair_query'])->name('repair.query');
        Route::get('manage/repair/item/{id}', [ManageController::class, 'repair_item'])->name('repair.item');

        Route::get('manage/maintenance/set', [MaintenanceScheduleController::class, 'set'])->name('maintenance.set');
        Route::get('manage/status/', [MaintenanceScheduleController::class, 'list'])->name('status.list');
        Route::get('manage/status/item/{id}', [MaintenanceScheduleController::class, 'item'])->name('transfer.item');
        Route::get('manage/status/update', [MaintenanceScheduleController::class, 'status_update'])->name('status.update');

        Route::get('manage/replacement', [ManageController::class, 'replacement'])->name('replacement.index');
        Route::get('manage/replacement/category/', [ManageController::class, 'replacement_query'])->name('replacement.query');
        Route::get('manage/replacement/item/{id}', [ManageController::class, 'replacement_item'])->name('replacement.item');
        Route::get('manage/replacement/update', [ManageController::class, 'replacement_update'])->name('replacement.update');
        Route::get('manage/replacement/list', [ManageController::class, 'replacement_list'])->name('replacement.list');
        Route::get('manage/replacement/preview/{id}', [ManageController::class, 'replacement_preview'])->name('replacement.preview');

        Route::get('manage/transfer/list', [MaintenanceTransferController::class, 'list'])->name('transfer.list');

        Route::get('manage/repair/set', [MaintenanceRepairController::class, 'set'])->name('repair.set');
        Route::get('manage/repairs', [MaintenanceRepairController::class, 'list'])->name('repair.list');
        Route::get('manage/repairs/item/{id}', [MaintenanceRepairController::class, 'item'])->name('repairs.item');
        Route::get('manage/repair/update', [MaintenanceRepairController::class, 'repair_update'])->name('repair.update');

        Route::get('record', [RecordController::class, 'index'])->name('record.index');

        Route::get('account', [AccountController::class, 'index'])->name('account.index');
        Route::get('account/create', [AccountController::class, 'create'])->name('account.create');
        Route::post('account/store', [AccountController::class, 'store'])->name('account.store');
        Route::get('account/modify/{id}', [AccountController::class, 'modify'])->name('account.modify');
        Route::put('account/update/{id}', [AccountController::class, 'update'])->name('account.update');
        Route::get('account/delete/{id}', [AccountController::class, 'delete'])->name('account.delete');
        
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth', 'PreventBackHistory']], function(){
        Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
