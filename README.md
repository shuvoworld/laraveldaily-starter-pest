# Laravel Starter Project with Pest

A starter Laravel project configured with Pest testing framework. This project provides a clean foundation for building Laravel applications with modern testing practices.

## Features

- **Laravel 12.x** - Latest version of the Laravel framework
- **Pest 3.x** - Elegant testing framework with a beautiful syntax
- **Pre-configured Testing** - Example tests included to get you started
- **Development Tools** - Includes Laravel Pint, Sail, and Tinker

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js & NPM (for frontend assets)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/shuvoworld/laraveldaily-starter-pest.git
cd laraveldaily-starter-pest
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Run migrations:
```bash
php artisan migrate
```

5. Build frontend assets:
```bash
npm run build
```

## Running Tests

Run tests using Pest:
```bash
./vendor/bin/pest
```

Or use the Laravel test command:
```bash
php artisan test
```

## Available Commands

- `composer test` - Run tests
- `composer dev` - Start development server with hot reload
- `php artisan serve` - Start Laravel development server
- `npm run dev` - Start Vite development server
- `npm run build` - Build production assets

## Testing with Pest

This project uses [Pest](https://pestphp.com/) for testing. Pest provides a beautiful and elegant testing API built on top of PHPUnit.

Example test:
```php
test('the application returns a successful response', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});
```

## Project Structure

- `app/` - Application core files (Models, Controllers, etc.)
- `tests/` - Pest test files
  - `tests/Feature/` - Feature tests
  - `tests/Unit/` - Unit tests
- `routes/` - Application routes
- `resources/` - Views, CSS, and JavaScript
- `database/` - Migrations, factories, and seeders

## Learn More

- [Laravel Documentation](https://laravel.com/docs)
- [Pest Documentation](https://pestphp.com/docs)
- [LaravelDaily](https://laraveldaily.com/)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).