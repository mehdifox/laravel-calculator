<?php

// app/Http/Requests/CalculateRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculateRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à effectuer cette requête.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Aucune restriction d'accès ici
    }

    /**
     * Récupère les règles de validation pour la requête.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number1' => ['required', 'regex:/^\d+(\,|\.)?\d*$/'],
            'number2' => ['required', 'regex:/^\d+(\,|\.)?\d*$/'],
            'operation' => 'required|in:+,-,*,/',
        ];
    }

    /**
     * Récupère les messages d'erreur personnalisés pour la validation.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'number1.required' => 'Le premier nombre est requis.',
            'number1.regex' => 'Ce champ doit être un nombre.',
            'number2.required' => 'Le second nombre est requis.',
            'number2.regex' => 'Ce champ doit être un nombre.',
            'operation.required' => 'L\'opération est requise.',
            'operation.in' => 'L\'opération doit être l\'un des suivants : +, -, *, /.'
        ];
    }
}
