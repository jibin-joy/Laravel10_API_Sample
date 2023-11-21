<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/student', function () {
//     return (' I am a message from api route');
// });
Route::get('student',[StudentController::class, 'index']);
Route::post('upload',[StudentController::class, 'upload']);
Route::put('student/edit/{id}',[StudentController::class, 'edit']);
