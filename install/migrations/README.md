# Visitor Forge Migrations

Database migrations will live in this directory.

---

## Naming Pattern

Use ordered migration names:

```text
001_initial_schema.sql
002_add_media_indexes.sql
003_add_redirects.sql
```

---

## Rules

- Every schema change gets a migration.
- Migrations run in order.
- Applied migrations are recorded in `visitor_forge_migrations`.
- Manual SQL is rescue-only, not the normal update path.
- Update `docs/DB_SCHEMA.md` whenever schema changes.

---

## Initial Planned Migration

```text
001_initial_schema.sql
```

This should create the base v0.1 schema once implementation begins.
