<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useSession");
import("@core/hooks/useHTTP");
import("@core/hooks/usePOST");


/**
 * @type Runner
 */
createPlugin("csrf", function() {
    $key = "csrf-token";

    $token = useSession($key);

    # Set CSRF token
    if (!isset($token) || empty($token)) {
        $token = bin2hex(random_bytes(32));
    
        useSession($key, $token);
    }

    # Validate CSRF token
    if (useHTTP("REQUEST_METHOD") === "POST" && array_key_exists($key, usePOST()))
        !hash_equals(useSession($key), usePOST($key)) && die("CSRF token is not valid!");
}, false);