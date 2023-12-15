<?php

/**
 * init curl as "open http request"
 * @function _openHttpRequest
 * @private
 * @return object
 */
function _openHttpRequest(): object {
    return curl_init();
}

/**
 * set curl option
 * @function _setHttpRequestOptions
 * @private
 * @param object $curl
 * @param array $params
 * @return void
 */
function _setHttpRequestOptions(object $curl, array $params): void {
    # extract params
    list($url, $method, $headers) = $params;

    # set curl options
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
}

/**
 * send http request as "execute the curl"
 * @function _sendHttpRequest
 * @private
 * @param object $curl
 * @return string|bool
 */
function _sendHttpRequest(object $curl): string|bool {
    return curl_exec($curl);
}

/**
 * close http request as "close the curl"
 * @function _closeHttpRequest
 * @private
 * @param object $curl
 * @return void
 */
function _closeHttpRequest($curl): void {
    curl_close($curl);
}



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