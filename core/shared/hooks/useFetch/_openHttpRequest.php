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