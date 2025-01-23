# Calculatrice Laravel

Ce projet Laravel implémente une simple calculatrice en ligne qui permet d'effectuer des opérations mathématiques de base : addition, soustraction, multiplication et division.

## Prérequis

Avant de démarrer le projet, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- PHP >= 8.2
- Composer

## Installation

1. Clonez le repository sur votre machine locale :

    ```bash
    git clone https://github.com/mehdifox/laravel-calculator.git
    ```

2. Accédez au dossier du projet :

    ```bash
    cd calculatrice-laravel
    ```

3. Installez les dépendances avec Composer :

    ```bash
    composer install
    ```

4. Copiez le fichier `.env.example` et renommez-le en `.env` :

    ```bash
    cp .env.example .env
    ```

5. Générez la clé d'application Laravel :

    ```bash
    php artisan key:generate
    ```

6. Configurez votre base de données (si nécessaire) en modifiant le fichier `.env`. Si vous ne prévoyez pas d'utiliser une base de données, vous pouvez ignorer cette étape.

## Utilisation

1. Lancez le serveur de développement Laravel :

    ```bash
    php artisan serve
    ```

2. Ouvrez votre navigateur et allez à l'URL suivante pour accéder à la calculatrice :

    ```
    http://127.0.0.1:8000/calculator
    ```

## Fonctionnalités

- **Addition**: Additionne deux nombres.
- **Soustraction**: Soustrait le second nombre du premier.
- **Multiplication**: Multiplie les deux nombres.
- **Division**: Divise le premier nombre par le second (avec gestion de la division par zéro).

## Validation

Les entrées sont validées via des règles personnalisées pour garantir qu'elles respectent le format attendu :

- Les nombres doivent être des chiffres (avec un point ou une virgule pour les décimales).
- L'opération doit être l'une des suivantes : `+`, `-`, `*`, `/`.

## Structure du Projet

- **Routes** : Les routes du projet sont définies dans `routes/web.php`.
- **Contrôleur** : La logique de calcul est gérée par `CalculatorController`.
- **Modèle** : Les calculs sont effectués dans le modèle `Calculation`.
- **Formulaire** : Le formulaire et l'affichage des résultats sont gérés dans `resources/views/calculator/index.blade.php`.
- **Validation** : Les règles de validation de la requête sont définies dans `app/Http/Requests/CalculateRequest.php`.

