<?php

function _openHttpRequest(): object {
    return curl_init();
}