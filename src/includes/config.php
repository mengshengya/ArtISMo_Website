<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$supportedLangs = ['en', 'fr'];
$defaultLang = 'en';

if (isset($_GET['lang']) && in_array($_GET['lang'], $supportedLangs, true)) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = $_SESSION['lang'] ?? $defaultLang;

$translations = [];

$commonFile = __DIR__ . '/../lang/' . $lang . '/common_' . $lang . '.php';

if (is_file($commonFile)) {
    $commonTranslations = require $commonFile;

    if (is_array($commonTranslations)) {
        $translations = $commonTranslations;
    }
}

function load_page_lang(string $page): void
{
    global $lang, $translations;

    $pageFile = __DIR__ . '/../lang/' . $lang . '/' . $page . '_' . $lang . '.php';

    if (is_file($pageFile)) {
        $pageTranslations = require $pageFile;

        if (is_array($pageTranslations)) {
            $translations = array_merge($translations, $pageTranslations);
        }
    }
}

function t(string $key): string
{
    global $translations;
    return $translations[$key] ?? $key;
}

function page_url(string $pageFile): string
{
    global $lang;
    return $pageFile . '?lang=' . urlencode($lang);
}

function lang_switch_url(string $targetLang): string
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage . '?lang=' . urlencode($targetLang);
}