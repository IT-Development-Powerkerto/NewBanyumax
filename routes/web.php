<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\BudgetingAdvertisingController;
use App\Http\Controllers\BudgetingRealizationController;
use App\Http\Controllers\RoutineEvaluation;

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
    return view('welcome');
});

Route::resource('/login', LoginController::class);

// Users
Route::resource('/dashboard', DashboardController::class);
Route::resource( '/realization', BudgetingRealizationController::class);


// Users.Campaign
// Route::resource('/campaign', CampaignController::class);
Route::get('/campaign', [CampaignController::class, 'index']) ->name('campaign.index');
Route::get('/campaign/create', [CampaignController::class, 'create']) ->name('campaign.create');
Route::post('/campaign/store', [CampaignController::class, 'store']) ->name('campaign.store');
Route::get('/campaign/edit/{id}', [CampaignController::class, 'edit']) ->name('campaign.edit');
Route::patch('/campaign/update/{id}', [CampaignController::class, 'update']) ->name('campaign.update');
Route::get('/campaign/delete/{id}', [CampaignController::class, 'destroy']) ->name('campaign.destroy');
Route::get('/addoperator', [CampaignController::class, 'addOperator']);

// Users.Budgeting
Route::resource('/budgetingadvertising', BudgetingAdvertisingController::class);
Route::resource('/budgetingrealization', BudgetingRealizationController::class);
Route::resource('/routineevaluation', RoutineEvaluation::class);
