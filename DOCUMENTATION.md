# TFA2 — Project Documentation

## Application flow

For `/customers` and `/users`, CodeIgniter routes the request to the corresponding controller. The controller creates its model and uses `findAll()`. The model uses CodeIgniter's Query Builder to retrieve rows from MySQL, and the controller passes those rows to the view.

## Database schema

### `customers`

| Column | Type | Constraint |
| --- | --- | --- |
| `id` | `INT` | Auto increment, primary key |
| `full_name` | `VARCHAR(100)` | Not null |
| `email` | `VARCHAR(100)` | Not null |
| `phone` | `VARCHAR(20)` | Nullable |
| `created_at` | `DATETIME` | Not null |

### `users`

| Column | Type | Constraint |
| --- | --- | --- |
| `id` | `INT` | Auto increment, primary key |
| `username` | `VARCHAR(50)` | Not null, unique |
| `full_name` | `VARCHAR(100)` | Not null |
| `created_at` | `DATETIME` | Not null |

## Main files

- Models: `app/Models/CustomerModel.php`, `app/Models/UserModel.php`
- Controllers: `app/Controllers/Customers.php`, `app/Controllers/Users.php`
- Views: `app/Views/customers/index.php`, `app/Views/users/index.php`
- Migration: `app/Database/Migrations/2026-09-15-000001_CreateCustomersAndUsersTables.php`
- Seeders: `app/Database/Seeds/CustomerSeeder.php`, `UserSeeder.php`, and `DatabaseSeeder.php`
- Local environment template: `.env.example`

## Pages

- `/` — Landing page
- `/about` — Activity overview
- `/customers` — Customer records from MySQL
- `/users` — User records from MySQL

Setup and run commands are provided in [README.md](README.md).
