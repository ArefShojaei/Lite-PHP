<?php

import("@core/shared/hooks/useFetch/_openHttpRequest");
import("@core/shared/hooks/useFetch/_closeHttpRequest");
import("@core/shared/hooks/useFetch/_sendHttpRequest");
import("@core/shared/hooks/useFetch/_setHttpRequestOptions");


/**
 * Send http request
 */
function useFetch(string $url, array $params = []): array {
    $method = $params['method'] ?? "GET";
    
    $headers = $params['headers'] ?? [];

    $body = $params['body'] ?? [];

    
    # Start the request process
    $curl = _openHttpRequest();
    
    _setHttpRequestOptions($curl, [$url, $method, $body, $headers]);

    $response = _sendHttpRequest($curl);

    # End the request process
    _closeHttpRequest($curl);


    # Get the response
    return json_decode($response, true);
}