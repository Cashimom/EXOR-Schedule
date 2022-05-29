<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanController;


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

// Auth
Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/register', [AuthController::class, 'showRegister']);

// Plan
Route::get('/index', [PlanController::class, 'showIndex']);
Route::get('/input_plan', [PlanController::class, 'showInputPlan']);
Route::get('/edit_plan', [PlanController::class, 'showEditPlan']);
Route::get('/resolution_plan', [PlanController::class, 'showResolutionPlan']);
