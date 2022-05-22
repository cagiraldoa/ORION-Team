<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name("home");


Route::get('/create', [TeamController::class, 'index'])->name("create.index");

Route::get('/list/{area}', [TeamController::class, 'list'])->name("list.index");

Route::get('/individual/{id}', [TeamController::class, 'show'])->name("list.show");

Route::delete('/individual/{id}', [TeamController::class, 'delete'])->name("delete_team");

Route::put('/individual/{id}', [TeamController::class, 'edit_individual'])->name("edit_member");

Route::put('/list', [TeamController::class, 'edit'])->name("edit_team");

Route::post('/create', [TeamController::class, 'add'])->name("add_team");
