<?php
require_once __DIR__ . '/../src/includes/config.php';

$currentPage = 'publication';
$pageTitle = t('nav.publications');

load_page_lang('publication');

$publications = require __DIR__ . '/../src/data/publication_data.php';

/**
 * Escape HTML
 */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/**
 * Format the author list and highlight selected authors
 */
function renderAuthors(array $authors): string
{
    $result = [];

    foreach ($authors as $author) {
        $name = e($author['name'] ?? '');

        if (!empty($author['highlight'])) {
            $name = '<strong>' . $name . '</strong>';
        }

        $result[] = $name;
    }

    $count = count($result);

    if ($count === 0) {
        return '';
    }

    if ($count === 1) {
        return $result[0];
    }

    if ($count === 2) {
        return $result[0] . ' &amp; ' . $result[1];
    }

    $last = array_pop($result);
    return implode(', ', $result) . ', &amp; ' . $last;
}

/**
 * Return the publication link
 */
function getPublicationUrl(array $publication): string
{
    if (!empty($publication['link'])) {
        return $publication['link'];
    }

    if (!empty($publication['doi'])) {
        return 'https://doi.org/' . $publication['doi'];
    }

    return '';
}

/**
 * Render link icon
 */
function renderPublicationIcon(array $publication): string
{
    $url = getPublicationUrl($publication);

    if ($url === '') {
        return '';
    }

    return '<a class="publication-icon" href="' . e($url) . '" target="_blank" rel="noopener noreferrer" aria-label="Open publication">↗</a>';
}

/**
 * Render citation text
 */
function renderPublicationText(array $publication): string
{
    $html = '';

    $authors = renderAuthors($publication['authors'] ?? []);
    $year = isset($publication['year']) ? e((string)$publication['year']) : '';
    $month = !empty($publication['month']) ? e($publication['month']) : '';
    $title = !empty($publication['title']) ? e($publication['title']) : '';
    $type = $publication['type'] ?? '';

    if ($authors !== '') {
        $html .= $authors . '. ';
    }

    if ($year !== '' && $month !== '') {
        $html .= '(' . $year . ', ' . $month . '). ';
    } elseif ($year !== '') {
        $html .= '(' . $year . '). ';
    }

    if ($title !== '') {
        $html .= $title . '. ';
    }

    if ($type === 'conference') {
        if (!empty($publication['venue'])) {
            $html .= 'In <em>' . e($publication['venue']) . '</em>';
        }

        if (!empty($publication['pages'])) {
            $html .= ' (pp. ' . e($publication['pages']) . ')';
        }

        if (!empty($publication['publisher'])) {
            $html .= '. ' . e($publication['publisher']);
        }

        $html .= '.';
    } elseif ($type === 'journal') {
        if (!empty($publication['journal'])) {
            $html .= '<em>' . e($publication['journal']) . '</em>';
        }

        if (!empty($publication['volume'])) {
            $html .= ', ' . e($publication['volume']);
        }

        if (!empty($publication['number'])) {
            $html .= '(' . e($publication['number']) . ')';
        }

        if (!empty($publication['pages'])) {
            $html .= ', ' . e($publication['pages']);
        }

        $html .= '.';
    }

    return $html;
}

include __DIR__ . '/../src/includes/header.php';
include __DIR__ . '/../src/includes/nav.php';
?>

<main class="page-content">
    <h1 class="page-title"><?= htmlspecialchars(t('publication.title')) ?></h1>

    <div class="publication-layout">
        <div class="main-page">
            <?php if (!empty($publications)): ?>
                <ol class="publication-list">
                    <?php foreach ($publications as $publication): ?>
                        <li class="publication-item">
                            <?= renderPublicationIcon($publication); ?>
                            <div class="publication-content">
                                <?= renderPublicationText($publication); ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>
            <?php else: ?>
                <p class="publication-empty">No publications available yet.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

</body>
</html>