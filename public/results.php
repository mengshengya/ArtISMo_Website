<?php
require_once __DIR__ . '/../src/includes/config.php';
require_once __DIR__ . '/../src/components/render_blocks.php';

$currentPage = 'results';
$pageTitle = t('nav.results');

load_page_lang('results');

$sections = require __DIR__ . '/../src/content/results_content.php';

// Sort sections by date descending (latest first)
usort($sections, function ($a, $b) {
    $dateAStr = '';
    if (isset($a['date'])) {
        $dateAStr = is_array($a['date']) ? ($a['date']['en'] ?? '') : $a['date'];
    }
    $dateBStr = '';
    if (isset($b['date'])) {
        $dateBStr = is_array($b['date']) ? ($b['date']['en'] ?? '') : $b['date'];
    }

    $timeA = $dateAStr ? strtotime($dateAStr) : 0;
    $timeB = $dateBStr ? strtotime($dateBStr) : 0;

    return $timeB <=> $timeA;
});

$detailId = $_GET['id'] ?? null;
$matchedItem = null;

if ($detailId !== null) {
    foreach ($sections as $section) {
        if (($section['id'] ?? '') === $detailId) {
            $matchedItem = $section;
            break;
        }
    }
}

if ($matchedItem) {
    $pageTitle = content_title($matchedItem, $lang) . ' | ' . t('results.title');
}

include __DIR__ . '/../src/includes/header.php';
include __DIR__ . '/../src/includes/nav.php';
?>

<main class="page-content">
    <?php if ($detailId !== null): ?>
        <?php if ($matchedItem): ?>
            <!-- Detail Page View -->
            <div class="results-detail-layout">
                <div class="back-nav">
                    <a href="results.php?lang=<?= urlencode($lang) ?>" class="back-link-btn">
                        <span class="back-icon">←</span> <?= content_escape(t('results.back_link')) ?>
                    </a>
                </div>

                <article class="detail-container">
                    <header class="detail-header">
                        <div class="detail-meta">
                            <?php if (!empty($matchedItem['category_key'])): ?>
                                <span class="detail-category"><?= content_escape(t($matchedItem['category_key'])) ?></span>
                            <?php endif; ?>
                            <?php
                            $itemDate = '';
                            if (!empty($matchedItem['date'])) {
                                $itemDate = content_value($matchedItem['date'], $lang);
                            }
                            if ($itemDate !== ''):
                            ?>
                                <?php if (!empty($matchedItem['category_key'])): ?>
                                    <span class="detail-meta-separator">•</span>
                                <?php endif; ?>
                                <span class="detail-date"><?= content_escape($itemDate) ?></span>
                            <?php endif; ?>
                        </div>
                        <h1 class="detail-title"><?= content_escape(content_title($matchedItem, $lang)) ?></h1>
                    </header>

                    <?php if (!empty($matchedItem['preview_image'])): ?>
                        <div class="detail-main-image">
                            <img src="<?= content_escape($matchedItem['preview_image']) ?>" alt="<?= content_escape(content_title($matchedItem, $lang)) ?>">
                        </div>
                    <?php endif; ?>

                    <div class="detail-content">
                        <?php render_content_blocks($matchedItem['blocks'] ?? [], $lang); ?>
                    </div>
                </article>
            </div>
        <?php else: ?>
            <!-- Section Not Found View -->
            <div class="results-error-layout">
                <div class="error-card">
                    <h2>Result Not Found</h2>
                    <p>The research or work result you are looking for does not exist or has been moved.</p>
                    <a href="results.php?lang=<?= urlencode($lang) ?>" class="back-link-btn">
                        <?= content_escape(t('results.back_link')) ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <!-- Grid Index View -->
        <h1 class="page-title"><?= content_escape(t('results.title')) ?></h1>

        <div class="results-grid">
            <?php foreach ($sections as $section): ?>
                <?php
                $id = $section['id'] ?? '';
                $title = content_title($section, $lang);
                $category = !empty($section['category_key']) ? t($section['category_key']) : '';
                $summary = '';
                if (!empty($section['summary_key'])) {
                    $summary = t($section['summary_key']);
                } elseif (!empty($section['summary'])) {
                    $summary = content_value($section['summary'], $lang);
                }
                $img = $section['preview_image'] ?? '';
                $projectUrl = 'results.php?id=' . urlencode($id) . '&lang=' . urlencode($lang);
                ?>
                <div class="result-card">
                    <a href="<?= $projectUrl ?>" class="card-image-link" aria-label="<?= content_escape($title) ?>">
                        <?php if ($img): ?>
                            <div class="card-image" style="background-image: url('<?= content_escape($img) ?>');"></div>
                        <?php else: ?>
                            <div class="card-image-fallback">
                                <span>ArtISMo</span>
                            </div>
                        <?php endif; ?>
                    </a>
                    <div class="card-content">
                        <div class="card-meta">
                            <?php if ($category): ?>
                                <span class="card-category"><?= content_escape($category) ?></span>
                            <?php endif; ?>
                            <?php
                            $itemDate = '';
                            if (!empty($section['date'])) {
                                $itemDate = content_value($section['date'], $lang);
                            }
                            if ($itemDate !== ''):
                            ?>
                                <?php if ($category): ?>
                                    <span class="card-meta-separator">•</span>
                                <?php endif; ?>
                                <span class="card-date"><?= content_escape($itemDate) ?></span>
                            <?php endif; ?>
                        </div>
                        <h2 class="card-title">
                            <a href="<?= $projectUrl ?>"><?= content_escape($title) ?></a>
                        </h2>
                        <p class="card-summary"><?= content_escape($summary) ?></p>
                        <div class="card-footer">
                            <a href="<?= $projectUrl ?>" class="read-more-link">
                                <?= content_escape(t('results.read_more')) ?> <span class="arrow">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>
</body>

</html>
