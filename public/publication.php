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
 * Generate BibTeX citation string
 */
function generateBibtex(array $publication): string
{
    $type = $publication['type'] ?? 'article';
    $title = $publication['title'] ?? '';
    $year = $publication['year'] ?? '';
    
    // Clean title to form a citeKey
    $firstWord = strtolower(explode(' ', trim($title))[0] ?? 'key');
    $firstWord = preg_replace('/[^a-zA-Z0-9]/', '', $firstWord);
    $citeKey = 'zemouche' . $year . $firstWord;
    
    $bibAuthors = [];
    foreach ($publication['authors'] ?? [] as $auth) {
        $bibAuthors[] = $auth['name'];
    }
    $authorsStr = implode(' and ', $bibAuthors);
    
    if ($type === 'journal') {
        $journal = $publication['journal'] ?? '';
        $volume = $publication['volume'] ?? '';
        $number = $publication['number'] ?? '';
        $pages = $publication['pages'] ?? '';
        $doi = $publication['doi'] ?? '';
        
        $bib = "@article{" . $citeKey . ",\n";
        $bib .= "  title={" . $title . "},\n";
        $bib .= "  author={" . $authorsStr . "},\n";
        $bib .= "  journal={" . $journal . "},\n";
        if ($volume !== '') $bib .= "  volume={" . $volume . "},\n";
        if ($number !== '') $bib .= "  number={" . $number . "},\n";
        if ($pages !== '') $bib .= "  pages={" . $pages . "},\n";
        $bib .= "  year={" . $year . "}";
        if ($doi !== '') $bib .= ",\n  doi={" . $doi . "}";
        $bib .= "\n}";
    } else { // conference
        $venue = $publication['venue'] ?? '';
        $pages = $publication['pages'] ?? '';
        $publisher = $publication['publisher'] ?? '';
        $doi = $publication['doi'] ?? '';
        
        $bib = "@inproceedings{" . $citeKey . ",\n";
        $bib .= "  title={" . $title . "},\n";
        $bib .= "  author={" . $authorsStr . "},\n";
        $bib .= "  booktitle={" . $venue . "},\n";
        if ($pages !== '') $bib .= "  pages={" . $pages . "},\n";
        $bib .= "  year={" . $year . "}";
        if ($publisher !== '') $bib .= ",\n  publisher={" . $publisher . "}";
        if ($doi !== '') $bib .= ",\n  doi={" . $doi . "}";
        $bib .= "\n}";
    }
    
    return $bib;
}

/**
 * Generate APA style citation string
 */
function generateApa(array $publication): string
{
    $authorsList = [];
    foreach ($publication['authors'] ?? [] as $auth) {
        $authorsList[] = $auth['name'];
    }
    
    $authorsStr = '';
    $count = count($authorsList);
    if ($count === 0) {
        $authorsStr = '';
    } elseif ($count === 1) {
        $authorsStr = htmlspecialchars($authorsList[0]);
    } elseif ($count === 2) {
        $authorsStr = htmlspecialchars($authorsList[0]) . ' &amp; ' . htmlspecialchars($authorsList[1]);
    } else {
        $last = htmlspecialchars(array_pop($authorsList));
        $escapedList = array_map('htmlspecialchars', $authorsList);
        $authorsStr = implode(', ', $escapedList) . ', &amp; ' . $last;
    }
    
    $year = isset($publication['year']) ? htmlspecialchars((string)$publication['year']) : '';
    $title = !empty($publication['title']) ? htmlspecialchars($publication['title']) : '';
    $type = $publication['type'] ?? '';
    
    $apa = $authorsStr;
    if ($year !== '') {
        $apa .= ' (' . $year . ').';
    }
    if ($title !== '') {
        $apa .= ' ' . $title . '.';
    }
    
    if ($type === 'journal') {
        $journal = !empty($publication['journal']) ? htmlspecialchars($publication['journal']) : '';
        $volume = !empty($publication['volume']) ? htmlspecialchars($publication['volume']) : '';
        $number = !empty($publication['number']) ? htmlspecialchars($publication['number']) : '';
        $pages = !empty($publication['pages']) ? htmlspecialchars($publication['pages']) : '';
        
        if ($journal !== '') {
            $apa .= ' <em>' . $journal . '</em>';
        }
        if ($volume !== '') {
            $apa .= ', ' . $volume;
        }
        if ($number !== '') {
            $apa .= '(' . $number . ')';
        }
        if ($pages !== '') {
            $apa .= ', ' . $pages;
        }
        $apa .= '.';
    } else { // conference
        $venue = !empty($publication['venue']) ? htmlspecialchars($publication['venue']) : '';
        $pages = !empty($publication['pages']) ? htmlspecialchars($publication['pages']) : '';
        if ($venue !== '') {
            $apa .= ' In <em>' . $venue . '</em>';
        }
        if ($pages !== '') {
            $apa .= ' (pp. ' . $pages . ')';
        }
        $apa .= '.';
    }
    
    if (!empty($publication['doi'])) {
        $apa .= ' https://doi.org/' . htmlspecialchars($publication['doi']);
    }
    
    return $apa;
}

$totalCount = count($publications);
$journalCount = count(array_filter($publications, fn($p) => ($p['type'] ?? '') === 'journal'));
$conferenceCount = count(array_filter($publications, fn($p) => ($p['type'] ?? '') === 'conference'));

$years = array_unique(array_column($publications, 'year'));
rsort($years);

include __DIR__ . '/../src/includes/header.php';
include __DIR__ . '/../src/includes/nav.php';
?>

<main class="page-content">
    <h1 class="page-title"><?= htmlspecialchars(t('publication.title')) ?></h1>

    <div class="publication-layout-dashboard">
        <!-- Statistics Bar -->
        <div class="pub-stats-container">
            <div class="pub-stat-box">
                <span class="pub-stat-number"><?= $totalCount ?></span>
                <span class="pub-stat-label"><?= htmlspecialchars(t('publication.stat_total')) ?></span>
            </div>
            <div class="pub-stat-box">
                <span class="pub-stat-number"><?= $journalCount ?></span>
                <span class="pub-stat-label"><?= htmlspecialchars(t('publication.stat_journals')) ?></span>
            </div>
            <div class="pub-stat-box">
                <span class="pub-stat-number"><?= $conferenceCount ?></span>
                <span class="pub-stat-label"><?= htmlspecialchars(t('publication.stat_conferences')) ?></span>
            </div>
        </div>

        <!-- Toolbar (Search & Filters) -->
        <div class="pub-toolbar">
            <div class="pub-search-wrapper">
                <span class="pub-search-icon">🔍</span>
                <input type="text" id="pub-search" class="pub-search-input" placeholder="<?= htmlspecialchars(t('publication.search_placeholder')) ?>">
            </div>

            <div class="pub-filter-groups">
                <!-- Type Filter -->
                <div class="pub-filter-group">
                    <span class="pub-filter-label"><?= htmlspecialchars(t('publication.filter_type')) ?>:</span>
                    <div class="pub-filter-buttons">
                        <button class="pub-filter-btn active" data-filter-type="all" onclick="setTypeFilter(this, 'all')"><?= htmlspecialchars(t('publication.filter_all')) ?></button>
                        <button class="pub-filter-btn" data-filter-type="journal" onclick="setTypeFilter(this, 'journal')"><?= htmlspecialchars(t('publication.journals')) ?></button>
                        <button class="pub-filter-btn" data-filter-type="conference" onclick="setTypeFilter(this, 'conference')"><?= htmlspecialchars(t('publication.conferences')) ?></button>
                    </div>
                </div>

                <!-- Year Filter -->
                <div class="pub-filter-group">
                    <span class="pub-filter-label"><?= htmlspecialchars(t('publication.filter_year')) ?>:</span>
                    <div class="pub-filter-buttons">
                        <button class="pub-filter-btn active" data-filter-year="all" onclick="setYearFilter(this, 'all')"><?= htmlspecialchars(t('publication.filter_all')) ?></button>
                        <?php foreach ($years as $year): ?>
                            <button class="pub-filter-btn" data-filter-year="<?= $year ?>" onclick="setYearFilter(this, '<?= $year ?>')"><?= $year ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Publications Feed -->
        <div class="main-page">
            <?php if (!empty($publications)): ?>
                <div class="pub-cards-list" id="pub-list">
                    <?php foreach ($publications as $pub): 
                        $link = !empty($pub['link']) ? $pub['link'] : '';
                        $doi = !empty($pub['doi']) ? $pub['doi'] : '';
                        
                        // Gather search texts
                        $searchData = [];
                        $searchData[] = strtolower($pub['title'] ?? '');
                        foreach ($pub['authors'] ?? [] as $auth) {
                            $searchData[] = strtolower($auth['name'] ?? '');
                        }
                        if (!empty($pub['journal'])) $searchData[] = strtolower($pub['journal']);
                        if (!empty($pub['venue'])) $searchData[] = strtolower($pub['venue']);
                        if (!empty($pub['year'])) $searchData[] = (string)$pub['year'];
                        $searchText = implode(' ', $searchData);
                    ?>
                        <div class="pub-card" data-pub-year="<?= e($pub['year'] ?? '') ?>" data-pub-type="<?= e($pub['type'] ?? '') ?>" data-search-text="<?= e($searchText) ?>">
                            <div class="pub-card-header">
                                <div class="pub-badges">
                                    <span class="pub-badge pub-badge-<?= e($pub['type'] ?? '') ?>">
                                        <?= e(ucfirst($pub['type'] ?? '')) ?>
                                    </span>
                                </div>
                                <span class="pub-card-year"><?= e($pub['year'] ?? '') ?></span>
                            </div>

                            <?php 
                            $primaryUrl = getPublicationUrl($pub);
                            if ($primaryUrl !== ''): ?>
                                <a href="<?= e($primaryUrl) ?>" target="_blank" rel="noopener noreferrer" class="pub-title"><?= e($pub['title'] ?? '') ?></a>
                            <?php else: ?>
                                <span class="pub-title"><?= e($pub['title'] ?? '') ?></span>
                            <?php endif; ?>

                            <p class="pub-authors"><?= renderAuthors($pub['authors'] ?? []) ?></p>

                            <?php 
                            $venueStr = '';
                            if (($pub['type'] ?? '') === 'conference' && !empty($pub['venue'])) {
                                $venueStr = 'In <em>' . e($pub['venue']) . '</em>';
                                if (!empty($pub['pages'])) $venueStr .= ' (pp. ' . e($pub['pages']) . ')';
                                if (!empty($pub['publisher'])) $venueStr .= '. ' . e($pub['publisher']);
                            } elseif (($pub['type'] ?? '') === 'journal' && !empty($pub['journal'])) {
                                $venueStr = '<em>' . e($pub['journal']) . '</em>';
                                if (!empty($pub['volume'])) $venueStr .= ', Vol. ' . e($pub['volume']);
                                if (!empty($pub['number'])) $venueStr .= ', No. ' . e($pub['number']);
                                if (!empty($pub['pages'])) $venueStr .= ', pp. ' . e($pub['pages']);
                            }
                            if ($venueStr !== ''):
                            ?>
                                <p class="pub-venue"><?= $venueStr ?>.</p>
                            <?php endif; ?>

                            <div class="pub-actions">
                                <?php if ($link !== ''): ?>
                                    <a href="<?= e($link) ?>" class="pub-btn pub-btn-primary" target="_blank" rel="noopener noreferrer">Access Article ↗</a>
                                <?php endif; ?>
                                
                                <?php if ($doi !== ''): ?>
                                    <a href="https://doi.org/<?= e($doi) ?>" class="pub-btn pub-btn-secondary" target="_blank" rel="noopener noreferrer">DOI</a>
                                <?php endif; ?>

                                <button class="pub-btn pub-btn-accent cite-toggle-btn" onclick="toggleCitationDrawer(this)">Cite</button>
                            </div>

                            <!-- Citation expansion drawer -->
                            <div class="citation-drawer">
                                <div class="citation-tabs">
                                    <button class="citation-tab-btn active" onclick="switchCitationTab(this, 'bibtex')">BibTeX</button>
                                    <button class="citation-tab-btn" onclick="switchCitationTab(this, 'apa')">APA</button>
                                </div>
                                <div class="citation-panes">
                                    <div class="citation-pane active" data-tab-pane="bibtex">
                                        <div class="citation-code-wrapper">
                                            <code class="citation-code"><?= e(generateBibtex($pub)) ?></code>
                                            <button class="citation-copy-btn" onclick="copyCitation(this)">Copy BibTeX</button>
                                        </div>
                                    </div>
                                    <div class="citation-pane" data-tab-pane="apa">
                                        <div class="citation-code-wrapper">
                                            <div class="citation-text-preview"><?= generateApa($pub) ?></div>
                                            <button class="citation-copy-btn" onclick="copyCitation(this, true)">Copy APA</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Empty state for search and filters -->
                <div class="pub-no-results" id="pub-no-results" style="display: none;">
                    <span class="pub-no-results-icon">🔎</span>
                    <h3><?= htmlspecialchars(t('publication.empty')) ?></h3>
                    <p>Try adjusting your search keywords or active filters.</p>
                </div>
            <?php else: ?>
                <p class="pub-no-results">No publications available yet.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<script>
let currentTypeFilter = 'all';
let currentYearFilter = 'all';
let searchQuery = '';

function filterPublications() {
    const cards = document.querySelectorAll('.pub-card');
    let visibleCount = 0;
    
    cards.forEach(card => {
        const type = card.getAttribute('data-pub-type');
        const year = card.getAttribute('data-pub-year');
        const searchText = card.getAttribute('data-search-text');
        
        const matchesType = (currentTypeFilter === 'all' || type === currentTypeFilter);
        const matchesYear = (currentYearFilter === 'all' || year === currentYearFilter);
        const matchesSearch = (searchQuery === '' || searchText.includes(searchQuery));
        
        if (matchesType && matchesYear && matchesSearch) {
            card.style.display = 'flex';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });
    
    // Toggle empty state
    const emptyState = document.getElementById('pub-no-results');
    if (emptyState) {
        if (visibleCount === 0) {
            emptyState.style.display = 'block';
        } else {
            emptyState.style.display = 'none';
        }
    }
}

// Search filter input listener
const searchInput = document.getElementById('pub-search');
if (searchInput) {
    searchInput.addEventListener('input', function(e) {
        searchQuery = e.target.value.toLowerCase().trim();
        filterPublications();
    });
}

// Type filters selector
function setTypeFilter(btn, type) {
    document.querySelectorAll('.pub-filter-btn[data-filter-type]').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    currentTypeFilter = type;
    filterPublications();
}

// Year filters selector
function setYearFilter(btn, year) {
    document.querySelectorAll('.pub-filter-btn[data-filter-year]').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    currentYearFilter = year;
    filterPublications();
}

// Toggle Citation Drawer accordion-style
function toggleCitationDrawer(btn) {
    const card = btn.closest('.pub-card');
    const drawer = card.querySelector('.citation-drawer');
    const isOpen = drawer.classList.contains('open');
    
    // Close other open drawers for layout cleanliness
    document.querySelectorAll('.citation-drawer.open').forEach(d => {
        if (d !== drawer) {
            d.classList.remove('open');
            const toggle = d.closest('.pub-card').querySelector('.cite-toggle-btn');
            if (toggle) toggle.classList.remove('pub-btn-primary');
        }
    });
    
    if (isOpen) {
        drawer.classList.remove('open');
        btn.classList.remove('pub-btn-primary');
    } else {
        drawer.classList.add('open');
        btn.classList.add('pub-btn-primary');
    }
}

// Switch citation format tabs
function switchCitationTab(btn, tab) {
    const drawer = btn.closest('.citation-drawer');
    
    // Update active tab button style
    drawer.querySelectorAll('.citation-tab-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    
    // Update visible citation content pane
    drawer.querySelectorAll('.citation-pane').forEach(p => p.classList.remove('active'));
    drawer.querySelector(`.citation-pane[data-tab-pane="${tab}"]`).classList.add('active');
}

// Copy citation content to clipboard
function copyCitation(btn, isHtml = false) {
    const wrapper = btn.closest('.citation-code-wrapper');
    let text = '';
    
    if (isHtml) {
        const preview = wrapper.querySelector('.citation-text-preview');
        text = preview.textContent || preview.innerText;
    } else {
        const code = wrapper.querySelector('.citation-code');
        text = code.textContent || code.innerText;
    }
    
    navigator.clipboard.writeText(text.trim()).then(() => {
        const originalText = btn.textContent;
        btn.textContent = 'Copied!';
        btn.classList.add('copied');
        
        setTimeout(() => {
            btn.textContent = originalText;
            btn.classList.remove('copied');
        }, 2000);
    }).catch(err => {
        console.error('Failed to copy text: ', err);
    });
}
</script>

</body>
</html>
