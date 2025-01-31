<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useHeader");


/**
 * @type Runner
 * @summary Adding and removing specific headers for attacks!
 */
createPlugin("security", function() {
    # Add headers
    useHeader("X-Frame-Options", "DENY");
    useHeader("X-XSS-Protection", "1");
    useHeader("X-Content-Type-Options", "nosniff");
    useHeader("Content-Type", "text/html; charset=UTF-8");

    # Remove headers
    useHeader("X-Powered-By");
    useHeader("Server");
}, false);