# Visitor Forge Update Checklist

Use this checklist before and after applying file updates.

## Before Update

- [ ] Record current app version
- [ ] Record current schema version
- [ ] Back up current files
- [ ] Back up current database
- [ ] Confirm access to hosting file manager/FTP/SFTP
- [ ] Confirm admin login works
- [ ] Read release notes

## Apply Update

- [ ] Upload new files
- [ ] Do not overwrite `visitor-forge/config/config.php`
- [ ] Do not delete uploaded media/documents
- [ ] Run admin/update or allow bootstrap migration runner to execute when implemented
- [ ] Confirm migrations completed

## After Update

- [ ] Confirm app version updated
- [ ] Confirm schema version updated
- [ ] Confirm admin login works
- [ ] Confirm public API works
- [ ] Confirm core modules load
- [ ] Confirm uploads still work
- [ ] Check error logs

## Notes

Manual SQL should be a rescue path only. Normal updates should use migrations.
