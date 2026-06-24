# Visitor Forge Security

Visitor Forge is intended for real client deployment, so basic security must be part of the foundation instead of sprinkled on later like panic glitter.

---

## Credentials

Never commit:

- database credentials
- API keys
- private config
- client exports
- uploaded client media

Only commit:

```text
visitor-forge/config/config.sample.php
```

---

## Passwords

Use:

- `password_hash()` for storing passwords
- `password_verify()` for login checks

Never store plaintext passwords.

---

## Sessions

Session handling should:

- use a named session
- regenerate session ID on login
- destroy session on logout
- check active user status
- enforce role checks

---

## CSRF

Every admin form that changes state must include and validate a CSRF token.

State-changing actions include:

- create
- update
- delete
- publish/unpublish
- upload
- settings changes
- user changes

---

## SQL Safety

Use PDO prepared statements.

Avoid scattered raw SQL execution across admin pages. Centralize database helpers in `includes/db.php`.

---

## Uploads

Upload handling must:

- validate MIME type
- validate file extension
- limit file size
- rename files safely
- prevent PHP execution in upload folders where hosting allows
- store upload metadata in the database

Allowed initial MIME types:

- image/jpeg
- image/png
- image/gif
- image/webp
- application/pdf

---

## Output Escaping

Admin templates must escape output by default.

Use helper functions for:

- HTML text
- HTML attributes
- URLs
- JSON output

---

## Installer Protection

After installation, the installer must be locked or disabled.

Installer should refuse to run if:

- config exists
- installed lock exists
- system table exists

---

## Permissions

Every admin action must check user role.

Initial roles:

- admin
- manager
- editor
- viewer

Viewers should not perform write actions.
