# Migration from 365CMS

365CMS is reference material and migration archaeology. Visitor Forge is a clean Kennetic Concepts product.

---

## Migration Principles

- Inventory old features before rebuilding them.
- Mark each old feature as keep, replace, defer, or delete.
- Preserve useful field names only where they help migration.
- Do not copy client-private content into this repo.
- Do not copy credentials, uploaded media, private config, or agency-specific branding.
- Do not drag old volatile frontend patterns into Visitor Forge.

---

## Feature Inventory Table

Use this table while reviewing 365CMS.

| Old Feature | Old File/Function | Current Problem | New Destination | Decision | Migration Notes |
| --- | --- | --- | --- | --- | --- |
| TBD | TBD | TBD | TBD | Keep / Replace / Defer / Delete | TBD |

---

## Decision Meanings

### Keep

The feature belongs in Visitor Forge and should be rebuilt cleanly.

### Replace

The old feature solves a real need, but the implementation should be replaced.

### Defer

The feature may matter later, but not for v0.1 through v1.0.

### Delete

The feature does not belong in Visitor Forge.

---

## Likely Visitor Forge Destinations

- page content -> pages module
- articles/updates -> news module
- menus -> navigation module
- uploads -> media module
- tourism listings -> locations module
- redirect records -> redirects module
- site config -> settings module
- users -> users/admin roles

---

## Import Bridge Timing

Do not build import scripts until the new schema stabilizes.

Planned milestone:

```text
v0.6.0 - Import Bridge
```

At that point, use exported old data for testing, not live client-private repositories or assets.
