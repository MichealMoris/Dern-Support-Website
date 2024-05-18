<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;

Route::middleware('auth')->group(function (){
    Route::get('/', [MainController::class, 'index']);
    Route::get('/service/{id}', [MainController::class, 'service']);
    Route::get('/logout', [AuthController::class, "logout"]);
    Route::post('/addCategory', [ServiceCategoryController::class, "addCat"]);
    Route::post('/addService/{id}', [ServiceController::class, "addService"]);
    Route::delete('/deleteCat/{id}', [ServiceCategoryController::class, "deleteCat"]);
    Route::delete('/deleteService/{catID}/{id}', [ServiceController::class, "deleteService"]);
    Route::get('/edit/{id}', [ServiceCategoryController::class, 'edit']);
    Route::get('/editService/{catID}/{id}', [ServiceController::class, 'edit']);
    Route::put('/updateService/{catID}/{id}', [ServiceController::class, 'updateService']);
    Route::put('/editCat/{id}', [ServiceCategoryController::class, "updateCat"]);
});

Route::middleware('guest')->group(function (){
    Route::get('/login', [AuthController::class, "loginPage"])->name("login");
    Route::get('/register', [AuthController::class, "registerPage"]);
    Route::post('/login', [AuthController::class, "login"]);
    Route::post('/register', [AuthController::class, "register"]);
});

