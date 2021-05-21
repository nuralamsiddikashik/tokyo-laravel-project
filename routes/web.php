<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ServiceController;
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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::group( ['middleware' => 'auth'], function () {
    Route::get( '/dashboard', [DashboardController::class, 'index'] )->name( 'admin.dashboard' );
    Route::get( 'hero', [HeroController::class, 'editHeroSection'] )->name( 'admin.hero' );
    Route::post( 'hero', [HeroController::class, 'heroSectionUpdate'] )->name( 'admin.hero.update' );

    // Service Route
    Route::get( 'service', [ServiceController::class, 'index'] )->name( 'admin.service' );
    Route::get( 'create-service', [ServiceController::class, 'addToService'] )->name( 'admin.service.create' );
    Route::post( 'create-service', [ServiceController::class, 'addToStore'] )->name( 'admin.service.store' );

} );