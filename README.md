
# Storage Management System

Warehouse management application that is useful for managing the entry and release of stock items with authentication of admin, cashier, and manager (super admin).


## Features

- CRUD product
- CRUD Supplier
- Create transaction
- Read Customers
- Create and Read purchases


## Installation

Install my-project with npm

```bash
  git clone https://github.com/Arkamfun/storage-management.git
  cd repo-name
  npm install
  npm run dev
```
    
## Tech Stack

**Client:** PHP Blade

**Server:** Laravel, SQLite


## Demo

account test:

- Manager (can register admin, cashier)
- email and password Manager :
    email: manager@gmail.com
    password: 123123
- Admin (for CRUD product, supplier and, purchases)
- email and password Admin :
    email:admin@gmail.com
    password:123123
- cashier (create transaction)
- email and password cashier :
    email: cashier@gmail.com
    password: 123123


## Requirement

- PHP 8.2.12
- Composer 2.8.4
- SQLite
- Laravel