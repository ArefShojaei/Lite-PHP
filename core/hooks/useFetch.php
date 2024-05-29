<?php

/**
 * @package
 */
import("@core/shared/hooks/useFetch/_openHttpRequest");
import("@core/shared/hooks/useFetch/_closeHttpRequest");
import("@core/shared/hooks/useFetch/_sendHttpRequest");
import("@core/shared/hooks/useFetch/_setHttpRequestOptions");


/**
 * Send http request
 * @function useFetch
 * @param string $url
 * @param array $params
 * @return array
 */
function useFetch(string $url, array $params = []) {
    # Get http method
    $method = $params['method'] ?? "GET";
    
    # Get http headers
    $headers = $params['headers'] ?? [];

    # Get http body
    $body = $params['body'] ?? [];

    # Init curl
    $curl = _openHttpRequest();
    
    # Set the curl config
    _setHttpRequestOptions($curl, [$url, $method, $body, $headers]);

    # Get the curl response
    $response = _sendHttpRequest($curl);

    # Close the curl
    _closeHttpRequest($curl);

    # Get response
    return json_decode($response, true);
}