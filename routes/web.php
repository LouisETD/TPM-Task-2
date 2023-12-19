<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\registration;

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

Route::get('/', [HomeController::class, 'home']);

// Page Registration
Route::get('/registration', [registration::class,'redirectToregister']);

// Page Database
Route::post('/post-registration', [registration::class, 'Registration']);

// Page Update 
// Passing id
Route::get('/update-tenant-page/{id}', [registration::class, 'updateTenantPage']);

// Update from table
Route::post('/update-tenant/{id}', [registration::class], 'updateTenant'); 

// Page Delete
// Passing Delete
Route::post('/delete-tenant/{id}', [registration::class], 'deleteTenant');
