<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


Route::group('perfix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
