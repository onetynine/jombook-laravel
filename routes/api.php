<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BranchController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('branches', [BranchController::class, 'index']);
Route::get('branches/{id}', [BranchController::class, 'show']);
Route::post('branches', [BranchController::class, 'store']);
Route::put('branches/{id}', [BranchController::class, 'update']);
Route::delete('branches/{id}', [BranchController::class, 'destroy']);
