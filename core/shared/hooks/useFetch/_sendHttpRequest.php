<?php

/**
 * Send http request as "execute the curl"
 * @function _sendHttpRequest
 * @private
 * @param object $curl
 * @return string|bool
 */
function _sendHttpRequest(object $curl): string|bool {
    return curl_exec($curl);
}