# Todo App

A Laravel 12 application for managing a todo workflow.

## Stack

- PHP 8.2+
- Laravel 12
- Vite
- Tailwind CSS
- Axios
- PHPUnit

## Project Structure

The repository follows the standard Laravel application structure, including:

- `app/` for application code
- `database/` for migrations, factories, and seeders
- `routes/` for application routes
- `resources/` for frontend resources
- `tests/` for automated tests

## Local Setup

Clone the repository and install dependencies:

```bash
composer install
npm install
```

Create the environment file and generate the application key:

```bash
cp .env.example .env
php artisan key:generate
```

Run migrations:

```bash
php artisan migrate
```

Start the application:

```bash
php artisan serve
```

For frontend development:

```bash
npm run dev
```

## Testing

Run the Laravel test suite with:

```bash
php artisan test
```

## Status

Learning project used to practice Laravel application structure and development workflow.

## Author

**Moein** — Backend Software Engineer focused on PHP, Laravel, and Software Architecture.

GitHub: https://github.com/Dev-Moein
