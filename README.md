# TFA2 — CodeIgniter POS System with MySQL

## Submission Links

- GitHub repository: [https://github.com/bonkval/TFA2](https://github.com/bonkval/TFA2)
- Hosted application: [https://tfa2.page.gd/](https://tfa2.page.gd/)
- Screenshots: See [`DOCUMENTATION.md`](DOCUMENTATION.md)

## Completed Requirements

- CodeIgniter 4 project installed through Composer.
- Base URL configured in `.env`.
- Local MySQL database configured.
- `customers` and `users` tables created through a migration.
- Both tables populated with five sample records through seeders.
- `CustomerModel` and `UserModel` created.
- `Customers` controller retrieves records through `CustomerModel::findAll()`.
- `Users` controller retrieves records through `UserModel::findAll()`.
- Customer Accounts page available at `/customers` with full name, email, and phone.
- User Accounts page available at `/users` with username, full name, and creation date.
- Customer and user records displayed using `foreach` loops in the views.
- Navigation links provided between all four pages.
