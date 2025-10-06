<?php
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthRegisterController::class, 'register']);
Route::get('/profile/{id}', [ProfileController::class, 'show']);
Route::put('/profile/{id}/general', [ProfileController::class, 'updateGeneral']);
Route::put('/profile/{id}/car', [ProfileController::class, 'updateCar']);
Route::put('/profile/{id}/documents', [ProfileController::class, 'updateDocuments']);
}