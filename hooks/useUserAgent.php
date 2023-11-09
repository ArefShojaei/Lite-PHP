<?php

/**
 * @desc user-agent
 * @function useUserAgent
 * @return {string}
 */
function useUserAgent(): string {
    return useHTTP("HTTP_USER_AGENT");
}