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
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Plan
Route::get('/index', [PlanController::class, 'showIndex'])->name('index');
Route::get('/input_plan', [PlanController::class, 'showInputPlan'])->name('input_plan');
Route::get('/edit_plan', [PlanController::class, 'showEditPlan'])->name('edit_plan');
Route::get('/resolution_plan', [PlanController::class, 'showResolutionPlan'])->name('resolution_plan');
Route::post('/input_plan', [PlanController::class, 'inputPlan']);
Route::post('/edit_plan', [PlanController::class, 'editPlan']);
Route::post('/delete_plan', [PlanController::class, 'deletePlan'])->name('delete_plan');
Route::post('/decide_plan', [PlanController::class, 'decidePlan'])->name('decide_plan');

