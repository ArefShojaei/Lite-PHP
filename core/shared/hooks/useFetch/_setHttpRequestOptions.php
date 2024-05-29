<?php

/**
 * Set curl option
 * @function _setHttpRequestOptions
 * @private
 * @param object $curl
 * @param array $params
 * @return void
 */
function _setHttpRequestOptions(object $curl, array $params): void {
    # Extract params
    list($url, $method, $body, $headers) = $params;

    # Set curl options
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
}