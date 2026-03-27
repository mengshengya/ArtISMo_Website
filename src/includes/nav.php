<nav class="main-nav">
    <ul>
        <li>
            <a href="<?= htmlspecialchars(page_url('abstract.php')) ?>"
               class="<?= $currentPage === 'abstract' ? 'active' : '' ?>">
                <?= htmlspecialchars(t('nav.abstract')) ?>
            </a>
        </li>

        <li>
            <a href="<?= htmlspecialchars(page_url('team.php')) ?>"
               class="<?= $currentPage === 'team' ? 'active' : '' ?>">
                <?= htmlspecialchars(t('nav.team')) ?>
            </a>
        </li>

        <li>
            <a href="<?= htmlspecialchars(page_url('milestones.php')) ?>"
               class="<?= $currentPage === 'milestones' ? 'active' : '' ?>">
                <?= htmlspecialchars(t('nav.milestones')) ?>
            </a>
        </li>

        <li>
            <a href="<?= htmlspecialchars(page_url('publication.php')) ?>"
               class="<?= $currentPage === 'publication' ? 'active' : '' ?>">
                <?= htmlspecialchars(t('nav.publications')) ?>
            </a>
        </li>

        <li>
            <a href="<?= htmlspecialchars(page_url('event.php')) ?>"
               class="<?= $currentPage === 'event' ? 'active' : '' ?>">
                <?= htmlspecialchars(t('nav.events')) ?>
            </a>
        </li>
    </ul>
</nav>