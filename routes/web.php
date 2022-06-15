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
use App\Http\Controllers\CeoController;
use App\Http\Controllers\CreatePropmotions;
use App\Http\Controllers\Reimbursment;
use App\Http\Controllers\BudgetingRequest;
use App\Http\Controllers\FinanceDashboard;
use App\Http\Controllers\DashboardInputer;
use App\Http\Controllers\ViewDataClosing;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\EditLeadTunneling;

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

Route::resource('/editleadtunneling', EditLeadTunneling::class);
// Users

Route::resource( '/realization', BudgetingRealizationController::class);


// Users.Campaign
// Route::resource('/campaign', CampaignController::class);
Route::get('/campaign-adv', [CampaignController::class, 'index']) ->name('campaign.index');
Route::get('/campaign-adv/create', [CampaignController::class, 'create']) ->name('campaign.create');
Route::post('/campaign-adv/store', [CampaignController::class, 'store']) ->name('campaign.store');
Route::get('/campaign-adv/edit/{id}', [CampaignController::class, 'edit']) ->name('campaign.edit');
Route::patch('/campaign-adv/update/{id}', [CampaignController::class, 'update']) ->name('campaign.update');
Route::get('/campaign-adv/delete/{id}', [CampaignController::class, 'destroy']) ->name('campaign.destroy');

// Users.Advertiser
Route::resource('/dashboard-adv', DashboardController::class);
Route::resource('/operator-adv', OperatorController::class);
Route::resource('/budgetingadvertising-adv', BudgetingAdvertisingController::class);
Route::resource('/budgetingrealization-adv', BudgetingRealizationController::class);
Route::resource('/routineevaluation-adv', RoutineEvaluation::class);

// User.Ceo
Route::resource('/ceo', CeoController::class);
// User.Manager
Route::resource('/manager', CeoController::class);

// User.Customer Service
Route::resource('/createpromotion', CreatePropmotions::class);
Route::resource('/reimbursment', Reimbursment::class);
Route::get('/dashboard-cs', function () {
    return view('User.Cs.PageDashboardCS');
});
Route::get('/budgetingrealization-cs', function () {
    return view('User.Cs.PageBudgetingrealizationCs');
});
Route::get('/routineevaluation-cs', function () {
    return view('User.Cs.PageRoutineEvaluationCs');
});

// User.Finance
Route::resource('/finance', FinanceDashboard::class);
Route::resource('/budgetingrequest', BudgetingRequest::class);

//User.Inputer
Route::resource('/inputer', DashboardInputer::class);
Route::resource('/viewdataclosing', ViewDataClosing::class);