<?php

function _sendHttpRequest(object $curl): string|bool {
    return curl_exec($curl);
}