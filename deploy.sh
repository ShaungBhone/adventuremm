#!/bin/bash

# Copy the .env.example file to .env
cp .env.example .env

# Generate the Laravel artisan key
php artisan key:generate

# Install dependencies and build assets
npm run build