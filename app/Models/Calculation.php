<?php

// app/Models/Calculation.php

namespace App\Models;

class Calculation
{
    private $number1;
    private $number2;
    private $operation;

    public function __construct($number1, $number2, $operation)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->operation = $operation;
    }

    public function calculate()
    {
        switch ($this->operation) {
            case '+':
                return $this->number1 + $this->number2;
            case '-':
                return $this->number1 - $this->number2;
            case '*':
                return $this->number1 * $this->number2;
            case '/':
                if ($this->number2 == 0) {
                    return 'Erreur: Division par zéro';
                }
                return $this->number1 / $this->number2;
            default:
                return 'Opération invalide';
        }
    }
}
