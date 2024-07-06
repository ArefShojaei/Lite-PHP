<?php

/**
 * @private
 */
function _openHttpRequest(): object {
    return curl_init();
}