<?php

/**
 * @package
 */
import("@core/private/hooks/useAPI/_openHttpRequest");
import("@core/private/hooks/useAPI/_closeHttpRequest");
import("@core/private/hooks/useAPI/_sendHttpRequest");
import("@core/private/hooks/useAPI/_setHttpRequestOptions");


/**
 * send http request
 * @function useAPI
 * @param string $url
 * @param array $params
 * @return array
 */
function useAPI(string $url, array $params = []): array {
    # get http method
    $method = $params['method'] ?? "GET";
    
    # get http headers
    $headers = $params['headers'] ?? [];


    # init curl
    $curl = _openHttpRequest();
 
    # set the curl config
    _setHttpRequestOptions($curl, [$url, $method, $headers]);

    # get the curl response
    $response = _sendHttpRequest($curl);

    # close the curl
    _closeHttpRequest($curl);

    # return response
    return json_decode($response, true);
}