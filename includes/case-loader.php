<?php

include_once "./includes/api-client.php";

// ----------------------------------------
// Case Studies
// ----------------------------------------
// $casesApi = "https://projects.thedeltagroup.co.in/wp-json/wl/v1/cases";
$casesApi = "https://projects.thedeltagroup.co.in/wp-json/wl/v1/posts";
$casesRes = fetchApiData($casesApi);

$cases = $casesRes['status'] ? $casesRes['data'] : [];
if (!$casesRes['status']) {
    echo "Blog API Error: " . $casesRes['error'];
}
