<?php

/**
 * @package
 */
import("@core/modules/plugin/createPlugin");
import("@core/hooks/useHeader");


/**
 * security plugin
 * @type runner
 * @summary adding and removing specific headers for attacks!
 */
createPlugin("security", function() {
    # ADD
    useHeader("X-Frame-Options", "DENY");
    useHeader("X-XSS-Protection", "0");
    useHeader("X-Content-Type-Options", "nosniff");
    useHeader("Content-Type", "text/html; charset=UTF-8");
    useHeader("Strict-Transport-Security", "max-age=31536000; includeSubDomains; preload");
    useHeader("Content-Security-Policy", "default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline");
    
    # REMOVE
    useHeader("X-Powered-By");
    useHeader("Server");
}, false);