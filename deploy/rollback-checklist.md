# Visitor Forge Rollback Checklist

Use this checklist if an update fails.

## Immediate Triage

- [ ] Record visible error message
- [ ] Check PHP error log
- [ ] Check database migration status if accessible
- [ ] Determine whether files, database, or config caused the issue

## File Rollback

- [ ] Restore previous file backup
- [ ] Preserve `visitor-forge/config/config.php`
- [ ] Preserve uploaded media/documents
- [ ] Clear cache if applicable

## Database Rollback

- [ ] Restore database backup if schema/data changed and cannot be repaired
- [ ] Confirm `visitor_forge_system` version values after restore
- [ ] Confirm migration records match restored schema

## Verification

- [ ] Admin login works
- [ ] Public API works
- [ ] Public site display works
- [ ] Uploads still exist
- [ ] Error logs are clean enough for operation

## Notes

Down-migrations are not required for early milestones. For now, reliable backups are the rollback strategy.
