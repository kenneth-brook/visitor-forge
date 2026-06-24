# Visitor Forge Install and Update Model

Install and update behavior is a core feature of Visitor Forge.

The goal is to support repeatable client deployment on shared hosting without one-off guessing.

---

## First Install

The installer should:

1. detect whether Visitor Forge is already installed
2. check PHP version
3. check required PHP extensions
4. collect database credentials
5. test the database connection
6. write `visitor-forge/config/config.php`
7. run base schema
8. seed default settings
9. seed enabled modules
10. create first admin user
11. write system version values
12. lock or disable installer after success

---

## Required Checks

Installer should check:

- PHP 7.4+
- PDO extension
- PDO MySQL driver
- session support
- JSON support
- file upload support
- writable config directory during install
- writable uploads directory

---

## Config Creation

The installer writes:

```text
visitor-forge/config/config.php
```

The repository only commits:

```text
visitor-forge/config/config.sample.php
```

Never commit real database credentials.

---

## Installer Lock

After installation, the installer must be locked.

Possible lock methods:

- create `visitor-forge/config/installed.lock`
- require logged-in admin access for update actions
- block install screens if `visitor_forge_system` exists

Use more than one signal where practical.

---

## System Tracking Table

Future table:

```sql
CREATE TABLE visitor_forge_system (
    id INT AUTO_INCREMENT PRIMARY KEY,
    app_name VARCHAR(100) NOT NULL DEFAULT 'Visitor Forge',
    app_version VARCHAR(20) NOT NULL,
    schema_version INT NOT NULL DEFAULT 1,
    installed_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
);
```

---

## Migration Tracking Table

Future table:

```sql
CREATE TABLE visitor_forge_migrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    migration_key VARCHAR(100) NOT NULL UNIQUE,
    migration_name VARCHAR(255) NOT NULL,
    applied_at DATETIME NOT NULL
);
```

---

## Update Flow

When updated files are dropped in:

1. app boots
2. current schema version is detected
3. migration runner checks available migration files
4. unapplied migrations run in order
5. app/schema version metadata updates
6. admin can view current version state

---

## Rollback Notes

Before an update:

- back up files
- back up database
- record current app version
- record current schema version

Rollback must be practical, but down-migrations are not required for v0.1.

For early versions, rollback may mean restoring the previous file package and database backup.
