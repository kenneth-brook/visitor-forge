# Visitor Forge

![License](https://img.shields.io/badge/license-Proprietary-blue)
![PHP](https://img.shields.io/badge/PHP-7.4%2B-777BB4?logo=php)
![Database](https://img.shields.io/badge/database-MySQL%20%7C%20MariaDB-orange)
![Version](https://img.shields.io/badge/version-0.1.0--dev-blue)
![Status](https://img.shields.io/badge/status-foundation-lightgrey)
![Architecture](https://img.shields.io/badge/architecture-portable-informational)
![Product Family](https://img.shields.io/badge/family-Civic%20Anvil-8B5E3C)

**Visitor Forge** is a Kennetic Concepts PHP/MySQL tourism and CVB content management system designed for standard shared-hosting environments.

It is part of **Civic Anvil**, the Kennetic Concepts product family for civic, tourism, chamber, public-information, and community-management tools. Visitor Forge sits alongside Event Forge, the future Chamber Forge, and other planned Forge products.

Visitor Forge is not a patch of the old CMS. The old CMS is reference material and migration archaeology. Visitor Forge is a clean product.

---

## Current Version

**Current release:** `0.1.0-dev`

**Release channel:** `foundation`

**Schema version:** `1-planned`

This repository currently contains the documentation-first foundation skeleton. The first working milestone is an installer-aware CMS shell with config creation, system version tracking, migration tracking, admin user creation, and a locked installer.

---

## Purpose

Visitor Forge exists to solve a practical agency/client deployment problem:

- CVB and tourism sites need editable content without a heavy CMS stack.
- Shared hosting is still common and must be supported.
- Old JavaScript-heavy CMS patterns created volatility and support traps.
- Client deployments need repeatable installs and updates.
- Future Kennetic tools need a compatible direction without becoming one giant mudball.

Visitor Forge should be portable, boring, stable, and easy to reason about. Boring pays invoices.

---

## Product Family: Civic Anvil

**Civic Anvil** is the umbrella product family for Kennetic Concepts civic-facing Forge tools.

Visitor Forge remains focused on tourism/CVB content management. Event Forge remains the event/calendar specialist. Chamber Forge remains a future chamber/member-management product. Additional Forge products can be planned under the Civic Anvil family without forcing Visitor Forge to become a giant all-purpose CMS.

The product-family rule is simple: shared philosophy, separate product strength first, integration later.

---

## What Visitor Forge Is

Visitor Forge is a lightweight CMS for:

- visitor bureaus
- tourism authorities
- destination marketing organizations
- travel regions
- CVB-style websites

Initial focus:

- pages
- media
- navigation
- news/articles
- attractions
- dining
- lodging
- visitor resources
- itineraries
- map-ready locations
- redirects
- settings
- users and roles
- public JSON endpoints
- installer and update tooling

---

## What Visitor Forge Is Not

Visitor Forge is not:

- a JavaScript-heavy SPA
- a Node backend
- an AWS-dependent application
- a Laravel/Symfony project
- an Event Forge replacement
- a Chamber Forge replacement
- a direct clone of 365CMS
- a generic everything-CMS at version 0.1

JavaScript should be seasoning, not the stew.

---

## System Requirements

Minimum target environment:

- PHP 7.4+
- MySQL or MariaDB
- PDO MySQL extension
- standard shared hosting
- browser JavaScript enabled for small admin enhancements

No Node.js, npm, Composer, framework build process, or AWS backend is required.

---

## Install / Update Philosophy

Visitor Forge should install and update like a product, not like a folder of loose scripts.

First install should:

1. check PHP version and extensions
2. collect database credentials
3. test the database connection
4. write `visitor-forge/config/config.php`
5. create base database tables
6. seed default settings and modules
7. create the first admin user
8. write app and schema version values
9. lock or disable the installer

Updates should:

1. detect the current schema version
2. run unapplied migrations in order
3. update app/schema metadata
4. expose current version information in admin

Manual SQL should be a rescue path, not the normal upgrade model.

---

## Repository Layout

```text
visitor-forge/
├── README.md
├── ROADMAP.md
├── AGENTS.md
├── LICENSE
├── .gitignore
├── .github/
├── docs/
├── deploy/
├── install/
├── examples/
└── visitor-forge/
    ├── index.php
    ├── api.php
    ├── admin/
    ├── assets/
    ├── config/
    ├── includes/
    ├── modules/
    └── uploads/
```

The nested `visitor-forge/` directory is the deployable application directory. The root directory contains product documentation, install/update support, examples, and repository metadata.

---

## Development Rules

- Keep PHP compatible with common shared hosting.
- Prefer PDO and prepared statements.
- Do not commit real credentials, client content, private config, API keys, or uploaded media.
- Build docs first, then installer, then modules.
- Return full files when generating code for this project.
- Update docs when architecture, schema, or deployment behavior changes.
- Keep Visitor Forge, Event Forge, and Chamber Forge separate until Civic Anvil Core becomes a real planned milestone.

---

## Related Forge Projects

- **Event Forge:** event/calendar management specialist
- **Visitor Forge:** CVB/tourism content management
- **Chamber Forge:** future chamber/member management system
- **Civic Anvil Core:** future shared shell, not a v0.1 requirement
