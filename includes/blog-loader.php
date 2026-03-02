<?php

include_once "./includes/api-client.php";

// ----------------------------------------
// Fetch Blogs
// ----------------------------------------
$blogsApi = "https://projects.thedeltagroup.co.in/wp-json/wl/v1/posts";
$blogsRes = fetchApiData($blogsApi);

$blogs = $blogsRes['status'] ? $blogsRes['data'] : [];
if (!$blogsRes['status']) {
    echo "Blog API Error: " . $blogsRes['error'];
}
