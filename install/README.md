# Visitor Forge Installer

This directory will contain installer files for Visitor Forge.

The installer is part of the product, not an afterthought.

---

## Planned Installer Responsibilities

- check PHP version
- check required PHP extensions
- collect database credentials
- test database connection
- write `visitor-forge/config/config.php`
- run base schema
- seed default settings
- seed enabled modules
- create first admin user
- write system version values
- lock installer after success

---

## Planned Files

Future installer files may include:

```text
install/index.php
install/install.sql
install/seed.sample.sql
install/migrations/
```

These are not fully implemented in the foundation skeleton.

---

## Installer Lock

After installation, the installer should refuse to run again unless an authorized recovery/update process is used.

Possible lock file:

```text
visitor-forge/config/installed.lock
```
