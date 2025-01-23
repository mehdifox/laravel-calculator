<!-- resources/views/calculator/index.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }

        form {
            width: 300px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .result {
            margin-top: 20px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Calculatrice</h1>

    <form method="POST" action="{{ url('/calculate') }}">
        @csrf

        <div class="form-group">
            @error('number1')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="number1">Nombre 1:</label>
            <input type="text" name="number1" value="{{ old('number1') }}" required inputmode="decimal" pattern="^\d+(\,|\.)?\d*$" title="Veuillez entrer un nombre valide (ex: 10.5 ou 10,5)">
        </div>

        <div class="form-group">
            @error('operation')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="operation">Opération:</label>
            <select name="operation" required>
                <option value="+" {{ old('operation') == '+' ? 'selected' : '' }}>+</option>
                <option value="-" {{ old('operation') == '-' ? 'selected' : '' }}>-</option>
                <option value="*" {{ old('operation') == '*' ? 'selected' : '' }}>*</option>
                <option value="/" {{ old('operation') == '/' ? 'selected' : '' }}>/</option>
            </select>
        </div>

        <div class="form-group">
            @error('number2')
                <div class="error">{{ $message }}</div>
            @enderror
            <label for="number2">Nombre 2:</label>
            <input type="text" name="number2" value="{{ old('number2') }}" required inputmode="decimal" pattern="^\d+(\,|\.)?\d*$" title="Veuillez entrer un nombre valide (ex: 10.5 ou 10,5)">
        </div>

        <button type="submit">Calculer</button>
    </form>

    @if (isset($result))
        <div class="result">
            <h2>Résultat: {{ $result }}</h2>
        </div>
    @endif
</body>
</html>
