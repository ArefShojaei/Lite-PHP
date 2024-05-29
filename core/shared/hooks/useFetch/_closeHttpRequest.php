<?php

/**
 * Close http request as "close the curl"
 * @function _closeHttpRequest
 * @private
 * @param object $curl
 * @return void
 */
function _closeHttpRequest($curl): void {
    curl_close($curl);
}