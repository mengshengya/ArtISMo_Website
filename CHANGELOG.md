# Changelog

## 2026-05-26

### Changed
- Added `.htaccess` for Apache/InfinityFree routing.
- Mapped `/`, page routes, and `/assets/...` to the `public/` directory.
- Blocked direct access to the `src/` directory.
- Updated `vercel.json` routing for root and main page paths.
- Standardized asset paths from `assets\...` to `assets/...`.
- Renamed the logo asset to use lowercase `logo.png`.
- Replaced temporary event section IDs with stable anchors: `workshop-2` and `other-events`.

### Verified
- Checked `vercel.json` JSON syntax.
- Checked asset path consistency.
- Checked case-sensitive asset references.
