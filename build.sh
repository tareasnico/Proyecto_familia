#!/usr/bin/env bash
# exit on error
set -o errexit

# Instalar dependencias de PHP
composer install --no-dev --no-interaction --no-autoloader --no-scripts
composer install --no-interaction --optimize-autoloader

# Instalar dependencias de Frontend y compilar assets
npm install
npm run build

# Generar la clave de la aplicación (si no está definida) y ejecutar migraciones
php artisan key:generate --force
php artisan migrate --force