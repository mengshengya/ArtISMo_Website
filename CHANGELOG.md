# Changelog

## 2026-05-26

### Changed
- Separated content-heavy pages from page layout by adding structured content files under `src/content/`.
- Added `src/components/render_blocks.php` to render reusable content blocks such as paragraphs, headings, image groups, local videos, and YouTube embeds.
- Refactored `abstract.php`, `milestones.php`, and `event.php` so they read structured sections instead of hardcoding page content in the public page files.
- Consolidated event and milestone page content into `src/content/event_content.php` and `src/content/milestones_content.php`.
- Removed the now-unused event and milestone language files to avoid duplicated content sources.
- Updated `README.md` with the new content/page/component separation and the supported content block types.
- Replaced local milestone videos with YouTube embeds for the web simulation, local monitoring, and real-vehicle demos.
- Added `.htaccess` for Apache/InfinityFree routing.
- Mapped `/`, page routes, and `/assets/...` to the `public/` directory.
- Blocked direct access to the `src/` directory.
- Updated `vercel.json` routing for root and main page paths.
- Standardized asset paths from `assets\...` to `assets/...`.
- Renamed the logo asset to use lowercase `logo.png`.
- Replaced temporary event section IDs with stable anchors: `workshop-2` and `other-events`.
- Styled publication titles with the site accent light blue and bold weight.
- Removed the empty `Validation & System Integration` milestone section.
- Added linked work description content to the `Resilient Platoon Applications` milestone section.
- Renamed the English resilient platoon demo video title and caption.
- Added a second YouTube demo to the `Resilient Platoon Applications` milestone section.
- Renamed the second resilient platoon demo video title and caption.
- Split the `Resilient Platoon Applications` content into shorter web sections with scenario-specific video explanations.

### Verified
- Checked that page content for abstract, milestones, and events is now loaded from `src/content/`.
- Checked that `web.mp4`, `yolo.mkv`, and `Real_car_Web.mp4` are no longer referenced by the PHP pages.
- Checked `vercel.json` JSON syntax.
- Checked asset path consistency.
- Checked case-sensitive asset references.
- Checked publication title markup and CSS changes with `git diff --check`.
- Checked that the removed milestone section no longer appears in content search.
- Checked the resilient platoon content link and wording.
- Checked the updated English resilient platoon video title and caption.
- Checked the additional resilient platoon YouTube URL.
- Checked the updated second resilient platoon video title and caption.
- Checked the revised resilient platoon text structure and video explanations.
