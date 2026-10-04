# PHP Learning Journey

A beginner-friendly collection of PHP examples written while learning PHP from scratch. Each folder covers one topic with small, runnable scripts and comments explaining the concepts.

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green)

## What's Inside

| # | Topic | Folder | Concepts |
|---|-------|--------|----------|
| 01 | Basics | [`01-basics`](01-basics) | `echo`, `print`, comments |
| 02 | Variables | [`02-variables`](02-variables) | variables, constants, interpolation, type juggling and casting |
| 03 | Operators | [`03-operators`](03-operators) | arithmetic, comparison (`==` vs `===`), logical, ternary, `??` |
| 04 | Loops | [`04-loops`](04-loops) | `while`, `do-while`, `for`, `foreach`, `break`, `continue` |
| 05 | Arrays | [`05-arrays`](05-arrays) | indexed, associative, multidimensional, array functions |
| 06 | Functions | [`06-functions`](06-functions) | parameters, default values, type hints, return types, `match` |
| 07 | Superglobals | [`07-superglobals`](07-superglobals) | `$_GET`, `$_POST`, `$_SERVER`, HTML forms |
| 08 | MySQL CRUD | [`08-mysql-crud`](08-mysql-crud) | `mysqli`, prepared statements, Create/Read/Update/Delete |

## Project Structure

```
php-learning-journey/
├── 01-basics/hello.php
├── 02-variables/variables.php
├── 03-operators/operators.php
├── 04-loops/loops.php
├── 05-arrays/arrays.php
├── 06-functions/functions.php
├── 07-superglobals/
│   ├── get-form.html
│   ├── get-handler.php
│   ├── post-form.html
│   └── post-handler.php
├── 08-mysql-crud/
│   ├── schema.sql
│   ├── config.php
│   ├── create.php
│   ├── read.php
│   ├── update.php
│   └── delete.php
├── .gitignore
├── LICENSE
└── README.md
```

## Getting Started

### Requirements
- PHP 8.0 or higher
- MySQL or MariaDB (only for `08-mysql-crud`), e.g. via [XAMPP](https://www.apachefriends.org/)

### Run the examples

```bash
git clone https://github.com/<your-username>/php-learning-journey.git
cd php-learning-journey

# Start PHP's built-in server
php -S localhost:8000
```

Then open for example:
- `http://localhost:8000/02-variables/variables.php`
- `http://localhost:8000/07-superglobals/get-form.html`

### Set up the database (for Day 08)

```bash
mysql -u root -p < 08-mysql-crud/schema.sql
```

Update the credentials in [`08-mysql-crud/config.php`](08-mysql-crud/config.php) if yours differ, then visit `create.php`, `read.php`, `update.php` and `delete.php` in the browser.

## Notes on Security

- User input is escaped with `htmlspecialchars()` to prevent XSS.
- Database queries use **prepared statements** instead of string concatenation to prevent SQL injection.

## Roadmap

- [ ] Form validation and sanitization
- [ ] Sessions and cookies
- [ ] File uploads
- [ ] OOP in PHP (classes, inheritance, interfaces)
- [ ] PDO instead of `mysqli`
- [ ] Mini project: user registration and login system

## License

Released under the [MIT License](LICENSE).

---

*Learning in public, one commit at a time.*
