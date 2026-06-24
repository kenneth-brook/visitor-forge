# Visitor Forge Architecture

Visitor Forge is a modular PHP/MySQL CMS intended for shared-hosting deployment.

The architecture should be practical, installer-aware, update-aware, and boring enough to survive real client use.

---

## System Overview

Visitor Forge has four major areas:

1. **Public layer**
   - `visitor-forge/index.php`
   - public routing and display handoff
   - public JSON consumption examples

2. **API layer**
   - `visitor-forge/api.php`
   - read-only public JSON endpoints
   - no unpublished content exposure

3. **Admin layer**
   - `visitor-forge/admin/`
   - server-rendered PHP pages
   - authenticated access
   - CSRF protection for state changes

4. **Core includes**
   - `visitor-forge/includes/`
   - bootstrap
   - database connection
   - auth
   - CSRF
   - settings
   - modules
   - migrations
   - media handling
   - response helpers

---

## Bootstrap Responsibilities

Future file:

```text
visitor-forge/includes/bootstrap.php
```

Responsibilities:

- start session safely
- load config
- define constants
- set timezone
- connect database
- load helpers
- check install state
- run migration checks when appropriate
- configure safe error behavior

---

## Database Layer

Future file:

```text
visitor-forge/includes/db.php
```

Responsibilities:

- create central PDO connection
- enforce utf8mb4
- provide prepared query helpers
- provide transaction helpers
- avoid scattered raw connection code

PDO is preferred over mysqli.

---

## Admin/Public Boundary

Admin pages may read and write content.

Public API endpoints should only expose published content and safe settings.

Never expose:

- password hashes
- user emails unless explicitly intended
- unpublished content
- private settings
- API keys
- internal config paths

---

## Module Boundaries

Each module should have:

- module key
- display name
- enabled flag
- admin route(s)
- public API resource if needed
- database tables if needed

Core modules are loaded from the database table `visitor_forge_modules` and optionally backed by module folders in `visitor-forge/modules/`.

Do not build a plugin marketplace in v0.1. Keep modules practical.

---

## Install and Update Flow

Install and update behavior is a first-class part of the architecture.

First install creates:

- config file
- system table
- migration table
- users table
- settings table
- modules table
- default admin user
- installer lock

Updates run unapplied migrations in order and update app/schema metadata.

---

## Future Expansion Rules

- Visitor Forge may embed Event Forge data later.
- Visitor Forge should not absorb Event Forge.
- Chamber-specific features belong to Chamber Forge.
- Shared auth/media/settings belong to a future Civic Anvil Core phase.

Build compatibility hooks, not premature empires.
