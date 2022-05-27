<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CampaignController;

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
Route::resource('/register', RegisterController::class);

// Users    
Route::resource('/dashboard', DashboardController::class);

// Users.Campaign
Route::resource('/campaign', CampaignController::class);
Route::get('/editcampaign', [CampaignController::class, 'editCampaign']);
Route::get('/addoperator', [CampaignController::class, 'addOperator']);


