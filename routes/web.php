<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController; //追記部分
use App\Http\Controllers\LifeCycleTestController; //追記部分

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users', 'verified'])->name('dashboard');


Route::get('/component-test1', [ComponentTestController::class, 'showComponent1']); //追記部分
Route::get('/component-test2', [ComponentTestController::class, 'showComponent2']); //追記部分
Route::get('/servicecontainertest', [LifeCycleTestController::class, 'showServiceContainerTest']); //追記部分
Route::get('/serviceprovidertest', [LifeCycleTestController::class, 'showServiceProviderTest']); //追記部分


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
