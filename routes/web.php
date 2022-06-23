<?php

use App\Http\Controllers\AbautsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServisController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/admin',  function ()
{
   return view('admin.dashboard'); 
});

Route::get('/registers', [DashboardController::class, "registers"]);

Route::post('/delete/{id}', [DashboardController::class, "delete"]);

Route::get('/abauts', [AbautsController::class, "index"]);

Route::post('/saveabaut', [AbautsController::class, "status"]);

Route::post('abautdelete/{id}', [AbautsController::class, "abautdelete"]);

Route::get('editlar/{id}', [AbautsController::class, "edit"]);

Route::put('update/{id}', [AbautsController::class, "update"]);

Route::get('servis', [ServisController::class, "index"]);

Route::get('create', [ServisController::class, "create"]);

Route::post('/sozdat', [ServisController::class, "sozdat"]);








Route::get('dashboard', [AbautsController::class, "test"]);
    


















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
    return view('dashboard');
    })->name('dashboard');
});
