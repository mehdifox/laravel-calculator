<?php

// routes/web.php

use App\Http\Controllers\CalculatorController;
use Illuminate\Routing\Route;

Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculate', [CalculatorController::class, 'calculate']);
