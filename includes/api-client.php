<?php

// ----------------------------------------
// Reusable function to fetch API data
// ----------------------------------------
function fetchApiData($url)
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL            => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT        => 10
    ]);

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        curl_close($curl);
        return [
            "status" => false,
            "data"   => [],
            "error"  => curl_error($curl)
        ];
    }

    curl_close($curl);

    $decoded = json_decode($response, true);

    if ($decoded === null || !isset($decoded['data'])) {
        return [
            "status" => false,
            "data"   => [],
            "error"  => "Invalid JSON response"
        ];
    }

    return [
        "status" => true,
        "data"   => $decoded['data'],
        "error"  => null
    ];
}
