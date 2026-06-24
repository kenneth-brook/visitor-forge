# Visitor Forge Roadmap

Visitor Forge is being built as a portable PHP/MySQL CMS for CVB and tourism websites. This roadmap keeps the project from wandering into the swamp with a lantern and a bad attitude.

---

## Guiding Direction

Visitor Forge should become a stable Kennetic Concepts product within the Civic Anvil family that can be deployed repeatedly on standard shared hosting.

The system should:

- install cleanly
- update cleanly
- track app and schema versions
- use migrations for schema changes
- provide server-rendered admin pages
- expose simple public JSON endpoints
- avoid heavy JavaScript architecture
- stay separate from Event Forge and Chamber Forge until a future Civic Anvil Core phase

---

## Product Family: Civic Anvil

Civic Anvil is the Kennetic Concepts umbrella for Visitor Forge, Event Forge, Chamber Forge, and future civic/community tools.

Roadmap decisions should keep Visitor Forge useful as a standalone product while leaving room for future shared Civic Anvil services such as auth, settings, media, installer/update management, and cross-product dashboards.

---

## Versioning Model

### App Version

Tracked in the database table:

```text
visitor_forge_system.app_version
```

Used to identify the deployed code release.

### Schema Version

Tracked in the database table:

```text
visitor_forge_system.schema_version
```

Used by the migration runner to determine which database changes must be applied.

### Migration History

Tracked in:

```text
visitor_forge_migrations
```

Every schema change should receive a migration file and a migration record.

---

## v0.1.0 - Foundation Skeleton

Goal: installable CMS skeleton.

Includes:

- repository structure
- project documentation
- config sample
- installer design
- install/update documentation
- system table design
- migration table design
- admin user table design
- login/logout plan
- dashboard plan
- settings baseline plan
- migration runner plan

Success condition:

Visitor Forge has a clean product skeleton that future code can follow without having to rediscover the architecture every Tuesday.

---

## v0.2.0 - Pages and Media

Goal: editable basic content.

Includes:

- page CRUD
- slug handling
- publish/unpublish workflow
- media upload
- media library
- API endpoint for pages
- upload validation
- admin media chooser groundwork

---

## v0.3.0 - Navigation and News

Goal: public site content flow.

Includes:

- navigation manager
- news/articles CRUD
- featured image support
- API endpoint for news
- API endpoint for navigation
- basic public examples

---

## v0.4.0 - CVB Locations

Goal: tourism listings.

Includes:

- attractions
- dining
- lodging
- visitor resources
- shared location model
- map-ready latitude/longitude fields
- API filtering by location type
- featured image support

---

## v0.5.0 - Deployment Hardening

Goal: safer client deployment.

Includes:

- deployment checklist
- update checklist
- rollback checklist
- installer lock hardening
- upload security hardening
- schema audit screen
- version display in admin
- backup notes

---

## v0.6.0 - Import Bridge

Goal: practical migration from old CMS exports.

Includes:

- old CMS feature inventory
- keep/replace/defer/delete mapping
- optional import script
- migration notes
- test import using exported old data
- no direct client-private assets in repository

---

## v1.0.0 - Production Baseline

Goal: deployable Visitor Forge release for real CVB/tourism client use.

Must include:

- stable installer
- stable update/migration runner
- pages
- media
- news
- navigation
- CVB listings
- settings
- user roles
- deployment docs
- migration docs
- backup/rollback notes
- public JSON endpoints

---

## Future: Event Forge Relationship

Visitor Forge may consume or embed Event Forge data later.

Possible future pattern:

- Visitor Forge manages tourism content.
- Event Forge manages events.
- Visitor Forge displays Event Forge widgets or feeds.

Visitor Forge should not absorb Event Forge too early.

---

## Future: Chamber Forge Relationship

Chamber-specific features belong to future Chamber Forge.

Do not build member directories, hot deals, committees, ribbon cuttings, or chamber member login into Visitor Forge v0.1.

---

## Future: Civic Anvil Core

Civic Anvil Core is the future shared shell concept for the broader product family. A later Civic Anvil Core may provide:

- shared auth
- shared users
- shared settings
- shared media
- shared installer/update manager
- product modules under one shell

This is a future architecture target, not a foundation milestone.
