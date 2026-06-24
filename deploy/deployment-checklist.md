# Visitor Forge Deployment Checklist

Use this checklist for first-time deployments.

## Pre-Deployment

- [ ] Confirm PHP 7.4+ is available
- [ ] Confirm MySQL/MariaDB is available
- [ ] Confirm PDO MySQL extension is enabled
- [ ] Create database
- [ ] Create database user
- [ ] Assign database permissions
- [ ] Confirm upload directory can be writable
- [ ] Confirm no real credentials are committed
- [ ] Confirm no client-private files are in the repo

## File Deployment

- [ ] Upload/copy Visitor Forge files
- [ ] Confirm `visitor-forge/config/` is writable during install
- [ ] Confirm `visitor-forge/uploads/` is writable
- [ ] Confirm upload folders contain PHP execution protection where supported

## Installer

- [ ] Run installer
- [ ] Enter database credentials
- [ ] Confirm database connection
- [ ] Create first admin user
- [ ] Confirm base tables created
- [ ] Confirm default settings seeded
- [ ] Confirm installer lock created

## Post-Deployment

- [ ] Log into admin
- [ ] Confirm app version displays correctly
- [ ] Confirm schema version displays correctly
- [ ] Confirm uploads work
- [ ] Confirm public API responds
- [ ] Confirm errors are not displayed publicly in production
- [ ] Back up deployment files
- [ ] Back up database
