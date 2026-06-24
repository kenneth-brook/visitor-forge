# CVB Requirements

Visitor Forge begins as a CVB/tourism CMS.

This document tracks the content and workflow needs that should guide the product.

---

## Common CVB Content Needs

- general pages
- visitor information
- attractions
- dining
- lodging
- events embeds or feeds
- itineraries
- maps and locations
- news/articles
- guides and downloadable PDFs
- seasonal landing pages
- navigation management
- redirects

---

## Tourism Listing Needs

Location/listing records should support:

- name
- slug
- type/category
- description
- address
- phone
- email
- website
- latitude
- longitude
- featured image
- publish state

Initial listing types:

- attraction
- dining
- lodging
- venue
- visitor_resource

---

## Media Needs

Media library should support:

- image uploads
- PDF/document uploads
- alt text
- captions
- file metadata
- safe filenames
- upload validation

---

## Admin Workflow Needs

Admin users need to:

- log in securely
- edit pages
- upload media
- manage news
- manage navigation
- manage tourism listings
- publish/unpublish content
- manage redirects
- update settings
- view app/schema version

Initial roles:

- admin
- manager
- editor
- viewer

---

## Public Display/API Needs

Public site templates should be able to request JSON for:

- pages by slug
- news lists and details
- navigation
- locations by type
- settings safe for public display

API responses should be consistent.

Success shape:

```json
{
  "success": true,
  "data": [],
  "meta": {
    "app_version": "0.1.0"
  }
}
```

Error shape:

```json
{
  "success": false,
  "error": {
    "code": "not_found",
    "message": "Resource not found."
  }
}
```
