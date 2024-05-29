<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * Get user agent of the Request
 * @function useAgent
 * @return string
 */
function useAgent(): string {
    return useHTTP("HTTP_USER_AGENT");
}