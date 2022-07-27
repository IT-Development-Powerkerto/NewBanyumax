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
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\DashboardCeo;
use App\Http\Controllers\DashboardManager;
use App\Http\Controllers\BudgetingRequestInputer;
use App\Http\Controllers\BudgetingRealizationInputer;
use App\Http\Controllers\CampaignAdmin;
use App\Http\Controllers\OperatorAdmin;
use App\Http\Controllers\BudgetingAdvertisingAdmin;
use App\Http\Controllers\BudgetingRealizationAdmin;
use App\Http\Controllers\RountineEvaluationAdmin;
use App\Http\Controllers\CreatePromotionCustomerService;
use App\Http\Controllers\ReimbursmentCustomerService;
use App\Http\Controllers\BudgetingRealizationCustomerService;
use App\Http\Controllers\RoutineEvaluationCustomerService;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Modal\AddProduct2;
use App\Http\Livewire\Modal\EditProduct;
use App\Http\Controllers\BudgetingDibursement;

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

Route::middleware(['guest'])->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('/login', LoginController::class);
});

Route::resource('/register', RegisterController::class);

Route::middleware(['auth'])->group(function(){

    Route::get('/logout',[LoginController::class, 'logout']);
    // Admin.Dashboard
    Route::resource('/dashboard-admin', DashboardAdmin::class);
});

Route::resource('/editleadtunneling', EditLeadTunneling::class);
// Users

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::resource( '/realization', BudgetingRealizationController::class);

// Admin.CEO.Dashboard
Route::resource('/dashboard-ceo', DashboardCeo::class);
// Admin.Manager.Admin
Route::resource('/dashboard-manager', DashboardManager::class);
// Admin.cs
Route::resource('/createpromotion-cs-admin', CreatePromotionCustomerService::class);
Route::resource('/reimbursment-cs-admin', ReimbursmentCustomerService::class);
Route::resource('/budgetingrealization-cs-admin', BudgetingRealizationCustomerService::class);
Route::resource('/routineevaluation-cs-admin', RoutineEvaluationCustomerService::class);
// Admin.Inputer
Route::resource('/dashboard-inputer', DashboardInputer::class);
Route::resource('/budgetingrequest-inputer', BudgetingRequestInputer::class);
Route::resource('/budgetingrealization-inputer', BudgetingRealizationInputer::class);
// Admin.Adv
Route::resource('/campaign-admin', CampaignAdmin::class);
Route::resource('/operator-admin', OperatorAdmin::class);
Route::resource('/budgetingadvertising-admin', BudgetingAdvertisingAdmin::class);
Route::resource('/budgetingrealization-admin', BudgetingRealizationAdmin::class);
Route::resource('/rountineevaluation-admin', RountineEvaluationAdmin::class);
Route::get('/budgetingdisbursment-admin', function () {
    return view('admin.advertiser.PageBudgetingDibursement');
});
// Admin. Finance
Route::get('/dashboard-finance', function () {
    return view('admin.finance.PageDashboard');
});
Route::get('/dashboard-budgetrequest-finance', function () {
    return view('admin.finance.PageBudgetRequestFinance');
});
Route::get('/dashboard-budgetrealization-finance', function () {
    return view('admin.finance.PageBudgetRealizationFinance');
});

//Admin.Logistic
Route::get('/logistic-warehouse', function () {
    return view('admin.logistic.PageWarehouse');
});
Route::get('/logistic-expedisi', function () {
    return view('admin.logistic.PageExpedition');
});

//admin.reporting
Route::get('/live-reporting', function () {
    return view('admin.reporting.LiveReporting');
});
Route::get('/pivoting', function () {
    return view('admin.reporting.PagePivoting');
});

// Adv.Campaign
Route::resource('/campaign-adv', CampaignController::class);
// Product
Route::resource('/product', ProductController::class);
// Users.Advertiser
Route::resource('/dashboard-adv', DashboardController::class);
Route::resource('/operator-adv', OperatorController::class);
Route::resource('/budgetingadvertising-adv', BudgetingAdvertisingController::class);
Route::resource('/budgetingrealization-adv', BudgetingRealizationController::class);
Route::resource('/routineevaluation-adv', RoutineEvaluation::class);
Route::resource('/budgetingdibursement-adv', BudgetingDibursement::class);
Route::get('/profile-adv', function () {
    return view('User.Advertiser.PageProfile');
});
Route::get('/detaillead-adv', function () {
    return view('User.Advertiser.Pagedetail-lead-tunneling');
});

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
Route::get('/crm', function () {
    return view('User.Cs.PageCRM');
});
Route::get('/routineevaluation-cs', function () {
    return view('User.Cs.PageRoutineEvaluationCs');
});
Route::get('/profil-cs', function () {
    return view('User.Cs.PageProfilCS');
});


// User.Finance
Route::resource('/finance', FinanceDashboard::class);
Route::resource('/budgetingrequest', BudgetingRequest::class);

//User.Inputer
Route::resource('/viewdataclosing', ViewDataClosing::class);



//Product Component
// Route::get('/product/add', AddProduct2::class)->name('addproduct');
// Route::get('/product/edit/{id}', EditProduct::class)->name('editproduct');

//Super Admin
Route::get('/dashboard-sa', function () {
    return view('User.SuperAdmin.PageDashboardSA');
});

//role CEO

Route::get('/dashboard-ceo', function () {
    return view('ceo.PageDashboard');
});
//role Manager
Route::get('/dashboard-manager', function () {
    return view('manager.PageDashboard');
});

//role Finance
Route::get('/finance-budgeting-request', function () {
    return view('finance.PageBudgetRequestFinance');
});
Route::get('/finance-budgeting-realization', function () {
    return view('finance.PageBudgetRealizationFinance');
});
Route::get('/finance', function () {
    return view('finance.PageDashboard');
});
//role Inputer
Route::get('/inputer-budgeting-request', function () {
    return view('Inputer.PageBudgetingRequest');
});
Route::get('/inputer-budgeting-realization', function () {
    return view('Inputer.PageBudgetingRealization');
});
Route::get('/inputer', function () {
    return view('Inputer.PageDashboard');
});