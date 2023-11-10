<?php

/**
 * api http request
 * @function useAPI
 * @param string $url
 * @param array $params
 * @return array
 */
function useAPI(string $url, array $params = []): array {
    # declare variables
    $method = $params['method'] ?? "GET";
    $headers = $params['headers'] ?? [];

    # int curl
    $curl = curl_init();
 
    # set the curl config
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    # get the curl response
    $response = curl_exec($curl);

    # close the curl
    curl_close($curl);

    # output response
    return json_decode($response, true);
}