<?php

function _setHttpRequestOptions(object $curl, array $params): void {
    list($url, $method, $body, $headers) = $params;

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
}