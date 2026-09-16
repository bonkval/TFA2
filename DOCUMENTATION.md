# TFA2 — Project Documentation

## Screenshots
<img width="867" height="212" alt="image" src="https://github.com/user-attachments/assets/879fb55e-6493-4fea-91e4-219e0e4274c0" />
<img width="1508" height="938" alt="image" src="https://github.com/user-attachments/assets/ac735ba4-324a-4691-b3e6-cb095af7a1af" />
<img width="1294" height="931" alt="image" src="https://github.com/user-attachments/assets/b961e8d0-a596-4dc8-9284-d335729995ab" />
<img width="1567" height="938" alt="image" src="https://github.com/user-attachments/assets/53f3898b-2c9d-4ef7-9afc-91fdd69e661f" />
<img width="1528" height="930" alt="image" src="https://github.com/user-attachments/assets/813988d1-0603-4ab1-a728-53c55f429278" />

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
