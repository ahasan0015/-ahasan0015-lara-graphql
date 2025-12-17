🌟 Features

GraphQL queries & mutations

Interactive GraphQL Playground / GraphiQL

Optional authentication (Sanctum / Passport / JWT)

Example schemas (Users, Posts, etc.)

Ready for production or learning projects

🛠 Installation
# 1. Create Laravel project (if not already)
composer create-project laravel/laravel laragraphql
cd laragraphql

# 2. Install Lighthouse GraphQL
composer require nuwave/lighthouse

# 3. Publish config & schema
php artisan vendor:publish --tag=lighthouse-schema

# 4. Serve app
php artisan serve