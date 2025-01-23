<?php

// app/Http/Controllers/CalculatorController.php

namespace App\Http\Controllers;

use App\Models\Calculation;
use App\Http\Requests\CalculateRequest;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator.index');
    }

    public function calculate(CalculateRequest $request)
    {
        // Validation déjà faite par CalculateRequest

        // Remplacer la virgule par un point pour les calculs
        $number1 = str_replace(',', '.', $request->number1);
        $number2 = str_replace(',', '.', $request->number2);

        // Utilisation d'un modèle pour effectuer les calculs
        $calculation = new Calculation($number1, $number2, $request->operation);
        $result = $calculation->calculate();

        return view('calculator.index', ['result' => $result]);
    }
}
