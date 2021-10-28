<?php

use App\Http\Controllers\GrowLocationoverViewController;
use App\Http\Controllers\testController;
use App\Http\Controllers\WorkOrderController;
use App\Http\Controllers\LaborplanningController;
use App\Http\Controllers\ForcastController;
use App\Http\Controllers\CultivationPlanningController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginRegisterController;
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

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

});

Auth::routes();
Route::get('/logout', function (){
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/',[ LoginRegisterController::class ,'Login']);
Route::get('home', [HomeController::class, 'index'])->name('my-home');
Route::get('forcast-entry',[ ForcastController::class ,'index'])->name('forcast-entry');
Route::post('save-forcast',[ ForcastController::class ,'save_forcast'])->name('save-forcast');
Route::get('labour',[ LaborplanningController::class ,'index'])->name('labour');
Route::get('labour-add',[ LaborplanningController::class ,'labourAdd'])->name('labour-add');
Route::post('save-labour',[ LaborplanningController::class ,'save_labour'])->name('save-labour');
Route::get('delete-labour/{id}',[ LaborplanningController::class ,'delete_labour'])->name('delete-labour');


Route::post('labour-edit',[ LaborplanningController::class ,'labour_edit'])->name('labour-edit');

/** Grow Location Routs */
Route::get('grow-location',[ GrowLocationoverViewController::class ,'index'])->name('growlocation');
Route::post('add-grow-location',[ GrowLocationoverViewController::class ,'add_grow_location'])->name('add-grow-location');
Route::get('grow-location-overview',[ GrowLocationoverViewController::class ,'grow_location_overview'])->name('grow-location-overview');
Route::get('grow-location-parameter/{id}',[ GrowLocationoverViewController::class ,'grow_location_parameter'])->name('grow-location-parameter');
Route::post('save-grow-parameters',[ GrowLocationoverViewController::class ,'save_grow_parameters'])->name('save-grow-parameters');

/** Production Routs */
Route::get('production-setup',[ HomeController::class ,'production_setup'])->name('production-setup');
Route::get('production-stage/{id}',[ HomeController::class ,'production_stage'])->name('production-stage');
Route::post('save-item-can-make',[ HomeController::class ,'save_item_can_make'])->name('save-item-can-make');
Route::post('save-item-labour-addto-make',[ HomeController::class ,'save_item_to_make'])->name('save-item-to-make');
Route::post('save-planned-product-orders',[ HomeController::class ,'save_planned_product_orders'])->name('save-planned-product-orders');
Route::post('save-released-product-orders',[ HomeController::class ,'save_released_product_orders'])->name('save-released-product-orders');

//delivery route
Route::get('delivery',[ HomeController::class ,'delivery'])->name('delivery');
Route::post('add-to-delivered',[ HomeController::class ,'add_to_delivered'])->name('add-to-delivered');



//Route::get('Register',[ LoginRegisterController::class ,'Register']);

/** Cultivation Routs */
Route::get('cultivation-planning',[ CultivationPlanningController::class ,'cultivation_planning'])->name('cultivation-planning');
Route::get('cultivation-forcast',[ CultivationPlanningController::class ,'cultivation_forcast'])->name('cultivation-forcast');
Route::get('cultivation-labor-planning',[ CultivationPlanningController::class ,'cultivation_labor_planning'])->name('cultivation-labor-planning');
Route::get('cultivation-work-order',[ CultivationPlanningController::class ,'cultivation_work_order'])->name('cultivation-work-order');
Route::get('cultivation-grow-location',[ CultivationPlanningController::class ,'cultivation_grow_location'])->name('cultivation-grow-location');



/** Forcast  Routs*/
Route::get('Forcastmoredetail',[ ForcastController::class ,'moredetail']);
Route::get('forcast',[ ForcastController::class ,'forcast'])->name('forcast');

Route::get('sales',[ WorkOrderController::class ,'sales'])->name('sales');
Route::post('save-sales',[ WorkOrderController::class ,'save_sales'])->name('save-sales');

/** Item List sales */
Route::get('item-list',[ WorkOrderController::class ,'item_list'])->name('item-list');

/** purchases route */
Route::get('purchases',[ WorkOrderController::class ,'purchases'])->name('purchases');
Route::post('save-purchase',[ WorkOrderController::class ,'save_purchase'])->name('save-purchase');


Route::get('Laborplanning',[ LaborplanningController::class ,'index']);
Route::get('WorkOrder',[ WorkOrderController::class ,'index']);

