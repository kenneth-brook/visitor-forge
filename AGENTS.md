# Visitor Forge Agent Guide

This file defines project rules for AI helpers, future contributors, and late-night code gremlins with commit access.

---

## Project Identity

Visitor Forge is a Kennetic Concepts product in the Civic Anvil product family.

It is a clean PHP/MySQL tourism and CVB CMS. It is not a direct refactor of 365CMS.

Use:

- Civic Anvil as the umbrella product family
- Event Forge as the architectural pattern
- 365CMS as feature inventory and migration reference only

Civic Anvil products should share install/update discipline, practical deployment thinking, and future integration paths. They should not be prematurely mashed into one giant system.

---

## Non-Negotiables

- PHP 7.4+ compatibility
- MySQL/MariaDB compatibility
- shared-hosting friendly
- no required Node.js
- no required Composer
- no React/Vue/Svelte admin
- no Laravel/Symfony rewrite unless explicitly requested
- PDO preferred over mysqli
- prepared statements for SQL
- CSRF on admin forms
- password_hash/password_verify for passwords
- no real credentials in repo
- no client-private content in repo
- no uploaded client media in repo

---

## Output Rules for AI Assistance

When generating code:

- return full files whenever possible
- avoid partial snippets unless specifically requested
- explain where each file goes
- keep code practical and portable
- update documentation when architecture or schema changes
- do not invent dependencies
- do not drift into Civic Anvil Core unless asked
- preserve Visitor Forge / Event Forge / Chamber Forge separation

---

## First Milestone Priority

For v0.1.0, prioritize:

1. documentation
2. repo skeleton
3. config model
4. installer plan
5. system/version tables
6. migration tracking
7. first admin account plan
8. installer lock plan

Do not build the full admin UI before the installer and schema foundation are clear.

---

## Old CMS Handling

The old CMS may inform:

- feature inventory
- workflow requirements
- known failure points
- migration strategy
- useful field names

Do not copy:

- client content
- client credentials
- API keys
- private config
- uploaded media
- agency-specific branding
- copyrighted client material

If old developer-created code is reused, clean it, generalize it, document it, and remove any deployment-specific material.

---

## Coding Style

- Prefer boring, readable PHP.
- Use strict-ish input validation even where PHP 7.4 limits type elegance.
- Keep includes small and named by responsibility.
- Escape admin output.
- Sanitize slugs.
- Keep JSON responses consistent.
- Keep database access centralized.

Boring code is good code here. Fireworks belong in the browser only when the client paid for fireworks.
