# TFA2 — CodeIgniter POS with MySQL

This activity extends the TFA1 POS application by replacing static PHP arrays with records retrieved from a MySQL database through CodeIgniter models.

## Links

- GitHub repository: [https://github.com/bonkval/TFA2](https://github.com/bonkval/TFA2)
- Local application: [http://localhost:8080](http://localhost:8080)

## Requirements

- PHP 8.2 or newer with the `intl`, `mbstring`, and `mysqli` extensions
- Composer
- MySQL 8 or MariaDB

## Local setup

1. Install dependencies: `composer install`
2. Copy `.env.example` to `.env`. Update the MySQL username and password if they differ from the defaults.

   When using XAMPP, make sure `extension=intl` and `extension=mysqli` are enabled in `php.ini`, then restart Apache.
3. Create the database: `php spark db:create tfa2_pos`
4. Create the tables: `php spark migrate`
5. Insert five sample records per table: `php spark db:seed DatabaseSeeder`
6. Start the server: `php spark serve`
7. Visit `http://localhost:8080`.

To rebuild the local tables and sample data later, run `php spark migrate:refresh --seed DatabaseSeeder`.

## Implementation

- `CustomerModel` wraps the `customers` table.
- `UserModel` wraps the `users` table.
- The `Customers` and `Users` controllers call their model's `findAll()` method.
- Views render retrieved rows using `foreach` and escape output with `esc()`.
- A reversible migration defines both required tables.
- `DatabaseSeeder` runs customer and user seeders that add five records per table.

See [DOCUMENTATION.md](DOCUMENTATION.md) for the schema and project structure.
