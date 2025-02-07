<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useSession");


/**
 * @type Runner
 */
createPlugin("csrf", function() {
    $token = useSession("csrf-token");

    # Set CSRF token
    if (!isset($token) || empty($token)) {
        $token = bin2hex(random_bytes(32));
    
        useSession("csrf-token", $token);
    }
}, false);