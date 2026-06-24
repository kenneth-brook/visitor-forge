# ChatGPT Context for Visitor Forge

Visitor Forge is a Kennetic Concepts project and part of the **Civic Anvil** product family.

## Product Summary

Visitor Forge is a portable PHP/MySQL CMS for tourism, CVB, visitor bureau, and destination marketing websites.

It replaces lessons learned from an older volatile CMS with a cleaner productized architecture.

## Current Build Phase

Current phase: `v0.1.0 - Foundation Skeleton`

Primary work now:

- repository skeleton
- documentation
- installer/update model
- config sample
- schema plan
- migration plan
- deployment checklists

Do not start full admin UI work until the installer and database foundation are clearly defined.

## Tech Stack

Use:

- PHP 7.4+
- MySQL/MariaDB
- PDO
- server-rendered admin pages
- small vanilla JavaScript enhancements only where useful
- JSON endpoints for public consumption

Avoid:

- Node.js requirement
- React/Vue/Svelte admin
- Laravel/Symfony rewrite
- AWS dependency
- required build process
- Composer dependency unless explicitly justified

## Hosting Constraints

Visitor Forge must work on standard shared hosting.

Assume:

- limited shell access
- no background worker requirement
- no Node/npm pipeline
- PHP/MySQL available
- file uploads allowed
- .htaccess may or may not be honored depending on host

## Product Family

Civic Anvil is the Kennetic Concepts umbrella for multiple Forge products, including Visitor Forge, Event Forge, future Chamber Forge, and other planned civic/community tools.

Visitor Forge should remain the tourism/CVB CMS. Do not let the broader family name turn this repo into an everything-platform.

## Relationship to Existing Projects

Event Forge is the architectural compass for install/update behavior, deployment discipline, version tracking, and shared-hosting compatibility.

365CMS is reference material only. Treat it as feature inventory and migration archaeology.

Chamber Forge is a future separate product. Do not build chamber-specific features into Visitor Forge v0.1.

Civic Anvil Core is a future shared shell concept for the product family. Do not build it yet.

## Assistance Rules

When helping on this project:

- return full files when generating code
- keep dependencies minimal
- use clear paths
- update docs when schema/architecture/deployment behavior changes
- preserve product boundaries
- avoid copying client/private material
- keep code boring and maintainable
