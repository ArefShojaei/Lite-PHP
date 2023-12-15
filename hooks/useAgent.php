<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * get user agent of the request
 * @return string
 */
function useAgent(): string {
    return useHTTP("HTTP_USER_AGENT");
}