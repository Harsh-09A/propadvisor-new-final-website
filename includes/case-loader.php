<?php

include_once "./includes/api-client.php";

// ----------------------------------------
// Case Studies
// ----------------------------------------

// $casesApi = "https://backend.propadvisor.co.in/wp-json/wl/v1/case-study";
$casesRes = fetchApiData($casesApi);

$cases = $casesRes['status'] ? $casesRes['data'] : [];
if (!$casesRes['status']) {
    echo "Blog API Error: " . $casesRes['error'];
}
