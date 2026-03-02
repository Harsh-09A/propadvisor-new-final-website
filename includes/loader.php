<?php
$currentSlug = $_GET['slug'] ?? '';

function buildUrl($page, $slug = '')
{
    $pageName = basename($page, ".php");

    // Blog page
    if ($pageName === "blog-details" && $slug) {
        return "blog/$slug";
    }

    // Project page
    if ($pageName === "case-studies-details" && $slug) {
        return "case-studies/$slug";
        // return "/property-details.php?slug=$slug";
    }

    // Other pages
    return "$pageName.php";
}
