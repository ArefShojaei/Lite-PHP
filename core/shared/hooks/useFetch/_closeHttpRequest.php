<?php

/**
 * @private
 */
function _closeHttpRequest(object $curl): void {
    curl_close($curl);
}