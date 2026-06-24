# Visitor Forge Database Schema

Visitor Forge uses MySQL/MariaDB and should default to `utf8mb4`.

All schema changes must be handled through migrations once the migration runner exists.

---

## Principles

- Use clear table names prefixed with `visitor_forge_`.
- Use integer primary keys unless a clear reason exists otherwise.
- Use `created_at` and `updated_at` for mutable content tables.
- Use prepared statements for all database access.
- Avoid schema changes without migration files.
- Keep public API queries limited to published content.

---

## Baseline Tables

### visitor_forge_system

Tracks installed app and schema state.

Planned fields:

```text
id
app_name
app_version
schema_version
installed_at
updated_at
```

### visitor_forge_migrations

Tracks applied migrations.

Planned fields:

```text
id
migration_key
migration_name
applied_at
```

### visitor_forge_users

Admin users.

Planned fields:

```text
id
username
email
password_hash
role
is_active
last_login_at
created_at
updated_at
```

Initial roles:

- admin
- manager
- editor
- viewer

### visitor_forge_settings

System and site settings.

Planned fields:

```text
id
setting_key
setting_value
autoload
updated_at
```

### visitor_forge_modules

Installed/enabled module registry.

Planned fields:

```text
id
module_key
module_name
is_enabled
sort_order
created_at
updated_at
```

### visitor_forge_pages

General content pages.

Planned fields:

```text
id
title
slug
content
excerpt
template_key
meta_title
meta_description
is_published
published_at
created_by
updated_by
created_at
updated_at
```

### visitor_forge_media

Media library.

Planned fields:

```text
id
file_name
original_name
file_path
mime_type
file_size
alt_text
caption
uploaded_by
created_at
updated_at
```

### visitor_forge_navigation

Navigation manager.

Planned fields:

```text
id
label
url
page_id
parent_id
sort_order
target
is_active
created_at
updated_at
```

### visitor_forge_news

CVB news/articles.

Planned fields:

```text
id
title
slug
summary
body
featured_image_id
external_url
is_published
published_at
created_by
updated_by
created_at
updated_at
```

### visitor_forge_locations

Shared location table for tourism listings.

Planned fields:

```text
id
name
slug
location_type
description
address_1
address_2
city
state
zip
phone
email
website
latitude
longitude
featured_image_id
is_published
created_at
updated_at
```

Initial `location_type` values:

- attraction
- dining
- lodging
- venue
- visitor_resource

### visitor_forge_redirects

Simple redirect manager.

Planned fields:

```text
id
source_path
target_url
status_code
is_active
created_at
updated_at
```

---

## Index Planning

Expected indexes:

- unique slugs where applicable
- published/status filters
- location type filters
- navigation parent/sort filters
- migration key unique index
- setting key unique index
- module key unique index

Exact SQL belongs in `install/install.sql` and migration files once implementation begins.

---

## Documentation Rule

Whenever schema changes, update this file and add a migration.

Manual SQL without docs is how projects become haunted furniture.
