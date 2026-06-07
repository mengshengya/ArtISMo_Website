# ArtISMo Website

This repository contains the website for the ArtISMo project.

The site is currently a lightweight PHP website. Public pages and assets are stored in
`public/`, while shared PHP components, language files, and structured content data are
stored in `src/`.
https://artismo-website.vercel.app/results.php?lang=en

## Project Structure

```text
ArtISMo_Website/
├── index.php
├── public/
│   ├── abstract.php
│   ├── team.php
│   ├── milestones.php
│   ├── publication.php
│   ├── event.php
│   └── assets/
│       ├── css/
│       ├── js/
│       ├── img/
│       └── video/
└── src/
    ├── components/
    │   └── render_blocks.php
    ├── content/
    │   ├── abstract_content.php
    │   ├── milestones_content.php
    │   └── event_content.php
    ├── includes/
    │   ├── config.php
    │   ├── header.php
    │   └── nav.php
    ├── data/
    │   ├── team_data.php
    │   └── publication_data.php
    └── lang/
        ├── en/
        └── fr/
```

## Local Development

The recommended local development workflow is to use the PHP Server extension in VS Code.

1. Open this project folder in VS Code.
2. Open one of the files inside `public/`, for example:

   ```text
   public/abstract.php
   ```

3. Start the server from VS Code:

   ```text
   PHP Server: Serve Project
   ```

   or right-click the PHP file and choose the PHP Server option.

4. If the extension asks for a project root or document root, use:

   ```text
   public/
   ```

5. The website should then be available locally at a URL similar to:

   ```text
   http://localhost:3000/abstract.php
   ```

If the server is started from the repository root instead of `public/`, open:

```text
http://localhost:3000/public/abstract.php
```

For final deployment, using `public/` as the web root is preferred.

## Editing Website Content

Most routine updates should be made in the existing content, data, and language files
rather than directly changing page layout files.

The site now separates content from page structure:

```text
public/*.php                page layout shell
src/content/*.php           structured page sections, images, videos, and captions
src/components/*.php        reusable rendering logic
src/data/*.php              structured lists such as team members and publications
src/lang/*.php              shared labels and long abstract text
```

In normal maintenance, avoid editing `public/*.php` unless the page layout itself needs
to change.

### Content Pages

The main content pages are stored in:

```text
src/content/abstract_content.php
src/content/milestones_content.php
src/content/event_content.php
```

Each content file returns a PHP array of sections. A section usually contains:

```text
id       stable anchor used by the sub-navigation
title    English/French section title, or a translation key
blocks   ordered content blocks
```

Supported block types include:

```text
paragraph
html
heading
image
image_group
video
youtube
```

Use `paragraph` for plain text, `html` only for trusted internal HTML such as links or
lists, `image_group` for event photo rows, and `youtube` for embedded YouTube videos.

### Main Text

Shared labels and the long abstract text are stored in:

```text
src/lang/en/
src/lang/fr/
```

Examples:

```text
src/lang/en/abstract_en.php
src/lang/fr/abstract_fr.php
src/lang/en/common_en.php
src/lang/fr/common_fr.php
```

Milestones and events now keep their bilingual section content directly in
`src/content/milestones_content.php` and `src/content/event_content.php`.

When adding or editing content, keep the English and French versions synchronized where
possible.

### Team Members

Team member information is stored in:

```text
src/data/team_data.php
```

Photos should be placed under:

```text
public/assets/img/team/
```

Use web-style paths with forward slashes:

```text
assets/img/team/example.jpg
```

Avoid Windows-style backslashes in website paths:

```text
assets\img\team\example.jpg
```

### Publications

Publication entries are stored in:

```text
src/data/publication_data.php
```

Add new publications by appending a new item to the returned PHP array. Use the existing
entries as templates.

### Images and Videos

Images are stored in:

```text
public/assets/img/
```

Videos are stored in:

```text
public/assets/video/
```

Use lowercase, simple file names when possible. On Linux servers, file names are
case-sensitive, so `Logo.png` and `logo.png` are different files.

## Deployment Notes

The project is temporarily deployed on InfinityFree. For a cleaner final deployment, the
server should use `public/` as the web root.

Recommended final structure:

```text
web root -> public/
private PHP source -> src/
```

This keeps internal source files outside the directly accessible public website folder.

If the hosting provider does not allow setting `public/` as the web root, the current
root-level `index.php` can redirect visitors to `public/abstract.php`, but this is a
temporary workaround rather than the preferred final structure.

## Pre-Deployment Checklist

Before publishing a new version:

1. Check that all navigation links work.
2. Check that images and videos load correctly.
3. Check both English and French pages.
4. Check the site on desktop and mobile screen widths.
5. Confirm file name capitalization matches the paths used in the PHP files.
6. Confirm all asset paths use forward slashes.
7. Commit the changes in Git before uploading or deploying.

## Future Maintenance Direction

Because website updates are expected to be infrequent, a full online CMS or school-account
editing system is not necessary at this stage.

The recommended workflow for now is:

```text
edit content/data/language files
test locally with VS Code PHP Server
commit changes with Git
deploy the updated website
```

Later, when the website is ready to move under the laboratory domain, the project can be
migrated to a formal server where `public/` is configured as the document root. School SSO
or authorized editing can be added only if regular non-technical updates become necessary.

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for project update history.
