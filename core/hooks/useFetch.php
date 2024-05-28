<?php

/**
 * @package
 */
import("@core/shared/hooks/useFetch/_openHttpRequest");
import("@core/shared/hooks/useFetch/_closeHttpRequest");
import("@core/shared/hooks/useFetch/_sendHttpRequest");
import("@core/shared/hooks/useFetch/_setHttpRequestOptions");


/**
 * send http request
 * @function useFetch
 * @param string $url
 * @param array $params
 * @return array
 */
function useFetch(string $url, array $params = []) {
    # get http method
    $method = $params['method'] ?? "GET";
    
    # get http headers
    $headers = $params['headers'] ?? [];

    # get http body
    $body = $params['body'] ?? [];

    # init curl
    $curl = _openHttpRequest();
    
    # set the curl config
    _setHttpRequestOptions($curl, [$url, $method, $body, $headers]);

    # get the curl response
    $response = _sendHttpRequest($curl);

    # close the curl
    _closeHttpRequest($curl);

    # return response
    return json_decode($response, true);
}