# Visitor Forge Modules

Visitor Forge should be modular from the beginning without pretending to be a plugin marketplace.

---

## Module Registry

Modules are tracked in:

```text
visitor_forge_modules
```

Each module should have:

- module key
- display name
- enabled flag
- sort order
- optional admin routes
- optional public API endpoints
- optional database tables

---

## Initial Core Modules

Foundation/admin modules:

- dashboard
- settings
- users
- modules
- media

CVB/tourism modules:

- pages
- news
- navigation
- attractions
- dining
- lodging
- visitor resources
- itineraries
- maps/locations
- redirects

---

## Folder Structure

Module folders live in:

```text
visitor-forge/modules/
```

Initial folders:

```text
pages/
news/
attractions/
dining/
lodging/
events/
itineraries/
listings/
maps/
redirects/
```

The `events` folder is reserved for possible Event Forge consumption/embed support. Visitor Forge should not become Event Forge.

---

## Enable / Disable Behavior

A disabled module should:

- hide related admin navigation
- block related write actions
- optionally block public API endpoints
- leave existing data intact

Do not delete module data simply because a module is disabled.

---

## Future Chamber Modules

Do not build these into Visitor Forge v0.1:

- member directory
- business categories
- member profiles
- job postings
- hot deals
- ribbon cuttings
- sponsorships
- committees
- member login

Those belong to future Chamber Forge planning.

---

## Naming Rules

- module keys should be lowercase snake_case or simple lowercase words
- table names should use the `visitor_forge_` prefix
- public API resource names should be predictable and plural where practical

Examples:

```text
pages
news
locations
navigation
settings
```
